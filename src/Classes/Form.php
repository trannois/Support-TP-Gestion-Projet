<?php

/**
 * Class Form
 * Un formulaire c'est une liste d'input et un validateur
 */
class Form
{
    protected $inputs = [];
    protected $name;
    protected $validateur;

    /**
     * Form constructor.
     * @param $name
     */
    public function __construct( $name )
    {
        $this->name = $name;
    }

    /**
     * Setter
     * @param Validateur $val
     */
    public function setValidateur( Validateur $val )
    {
        $this->validateur = $val;
    }

    /**
     * Getter
     * @return Validateur
     */
    public function getValidateur()
    {
        return $this->validateur;
    }

    /**
     * Ajout un input
     * @param $name
     */
    public function addInput( $name )
    {
        array_push( $this->inputs, $name );
    }

}