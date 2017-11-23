<?php
require_once '../../../src/config.php';

$reponse = ['code' => 1 ];

if ( ! array_key_exists('ident', $_GET) OR ! array_key_exists('pass', $_GET)) {
    $reponse['code'] = -1;
    echo json_encode( $reponse );
    exit();
}

$validateur = new Validateur();
$test = true;
$test &= $validateur->cestUnAlfaNum( 'ident', $_GET['ident']);
// TODO : faire les autres tests
if ( !$test ) {
    $reponse['code'] = -2;
    // TODO : rajouter les messages d'erreur
    echo json_encode( $reponse );
    exit();   
}

// TODO : faire la validation du pass

$pass = $_GET['pass'];

$tmpMembre = new Membre();
$tmpMembre->setIdent($_GET['ident']);
$tmpMembre->setPass($_GET['pass']);

$gest = new GestionMembre();
$membre = $gest->exist( $tmpMembre );
if ( $membre === false ) {
    $reponse['code'] = 0;
    echo json_encode( $reponse );
    exit();
}


$reponse['membre']['uid'] = $membre->getUid();
$reponse['membre']['ident'] = $membre->getIdent();
echo json_encode( $reponse );
exit();