<?php
const USER='';
const ROOT_URL=''.USER;
const MODULE_URL=ROOT_URL.'/inscription';
const DATA_PATH=__DIR__.'/../data';
const FICHIER_MEMBRE='membres';

include __DIR__.'/inc/menu.php';

spl_autoload_register( function( $class ) {
    include __DIR__.'/LPWeb/'.$class.'.php';
    // TODO définir des nameSpace pour les classes et modifier l'autoload pour être PSR-4
});

session_name('LPWeb');
session_start();