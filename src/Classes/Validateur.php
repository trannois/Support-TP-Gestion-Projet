<?php

/**
 * Class Validateur
 * Différents tests pour valider ou non un input
 * Tient à jour une la liste des erreurs pour chaque input testés
 * TODO : trop de responsabilité pour cette classe,
 * TODO : faire une classe pour les tests et une classe pour la gestion des messages d'erreur
 *
 */
class Validateur
{
    protected $messages = [];

    /**
     * Tiens à jour la liste des erreurs de validation
     * @param $text string message d'erreur à enregistrer
     */
    protected function addMessage( $key , $text ) {
        if ( ! array_key_exists($key, $this->messages) )
            $this->messages[$key] = [];
        array_push($this->messages[$key], $text );
    }

    /**
     * return true si $val ne contient que des charactères alphabétiques, des nombres,
     * et les caractères de ponctuation - _ .
     * Sinon false
     * @param $key
     * @param $val string chaîne de texte à tester
     * @return bool
     */
    public function cestUnAlfaNum( $key, $val ) {
        // TODO test
        $this->addMessage( $key, "ce n'est pas un alfa numérique ");
        return true;
    }

    /**
     * return true si $val ne contient que des charactères alphabétiques
     * Sinon false
     * @param $key
     * @param $val string chaîne de texte à tester
     * @return bool
     */
    public function cestUnAlfa( $key, $val ) {
        // TODO test et message d'erreur
        return true;
    }
}