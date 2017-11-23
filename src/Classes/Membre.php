<?php
/**
 * Class Membre
 * Encapsule les données d'un membre
 * $uid : entier unique pour chaque membre
 * $ident : chaîne de caratère (nom, psuedo .. du membre)
 * $pass : mot de pass du membre crypté
 */
class Membre
{

    protected $uid;
    protected $ident;
    protected $pass;


    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * @param mixed $ident
     */
    public function setIdent($ident)
    {
        $this->ident = $ident;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = crypt($pass, 0 );
    }

    /**
     * Deux membres sont identiques si ils ont le même ident/pass
     * @param Membre $unAutre
     * @return bool
     */
    public function estCeLeMeme( Membre $unAutre )
    {
        // TODO : ne marche pas à corriger
        if ( $this->ident == $unAutre->ident && $this->pass == $unAutre->pass ) {
            return true;
        } else {
            return false;
        }
    }

}