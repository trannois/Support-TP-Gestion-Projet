<?php
require_once '../../../src/config.php';

// si pas d'objet form c'est pas normal => page d'accueil
if ( ! array_key_exists('form_enregistre', $_SESSION)) {
    header( 'location:/');
}

$form = $_SESSION['form_enregistre'];

$membre = new Membre();

$test = true;
$test &= $form->getValidateur()->cestUnAlfaNum( 'ident', $_POST['ident']);
// TODO liste des tests
if ( ! $test )
    header('location:'.MODULE_URL.'/inscription.php');

$membre->setIdent($_POST['ident']);

$test = true;
$test &= $form->validateur()->cestUnAlfa('pass', $_POST['pass']);
// TODO liste des tests
if ( ! $test )
    header('location:'.MODULE_URL.'/inscription.php');

$membre->setPass($_POST['pass']);

$gest = new GestionMembre();
$gest->add($membre);

header( 'location:'.MODULE_URL.'/inscription_ok.php');