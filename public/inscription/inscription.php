<?php
require_once '../../src/config.php';

// création ou récupération de l'objet formulaire

if (array_key_exists('form_enregistre', $_SESSION)) {
    $form = $_SESSION['form_enregistre'];
} else {
    $form = new Form( 'enregistre' );
    $form->setValidateur( new Validateur() );
    $form->addInput('ident');
    $form->addInput('pass');
    $_SESSION['form_enregistre'] = $form;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../jquery/jquery.js"></script>
</head>
<body>

<?php include "../../src/inc/navbar.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <form name="enregistre" method="post" action="./controleurs/s_incrire.php">
                <div class="form-group">
                    <label for="inputIdent">Votre identifiant</label>
                    <input name="ident" type="text" class="form-control" id="inputIdent" aria-describedby="identHelp" placeholder="Saisir votre identifiant">
                    <small id="identHelp" class="form-text text-muted">L'identifiant que vous allez donner sera visible par l'ensemble des autres membres.</small>
                    <?php // TODO : afficher les erreurs ?>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Mot de passe</label>
                    <input name="pass" type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">S'enregistrer</button>
            </form>
        </div>
        <div class="col">

        </div>
    </div>
</div>

</body>
</html>