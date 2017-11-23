<?php

/**
 * Class GestionMembre
 * CRUD d'un membre, repose sur un fichier .id contenant le compteur pour l'index
 * et un fichier .data pour les données, une ligne pour chaque enregistrement
 */
class GestionMembre
{
    private $file;
    private $fileId;
    private $currentId;

    /**
     * Ouvre le fichier et lit la première ligne contenant le dernier id
     * GestionMembre constructor.
     */
    public function __construct()
    {
        // TODO : vérifier que le fichier membres.id existe sinon le créer avec l'index zéro dedans => 0:
        $this->fileId = fopen( DATA_PATH.'/'.FICHIER_MEMBRE.'.id', 'r');
        list($this->currentId) = explode(":", fgets($this->fileId));
        fclose($this->fileId);
        $this->fileId = fopen( DATA_PATH.'/'.FICHIER_MEMBRE.'.id', 'w');
        flock( $this->fileId,LOCK_EX );
        // TODO : vérifier qu'il n'est déjà pas pris
        $this->file = fopen( DATA_PATH.'/'.FICHIER_MEMBRE.'.data', 'a+');
    }

    /**
     * ferme le descripteur de fichier
     * le fait de le garder ouvert empêche l'écriture par une autre requête qui pourrait
     * rendre inconsistant l'id
     */
    function __destruct()
    {
        fwrite($this->fileId, $this->currentId.":");
        fclose($this->fileId);
        fclose($this->file);
    }

    /**
     * @param Membre $membre
     */
    public function add( Membre $membre )
    {
        $this->currentId++;
        $membre->setUid($this->currentId);
        fwrite( $this->file, serialize($membre)."\n");
    }

    /**
     * Supprime un membre de la liste
     * @param Membre $membre
     */
    public function del( Membre $membre ) {
        // TODO
    }

    /**
     * Parcours chaque ligne du fichier de donnée .data pour voir si le membre $membre est déjà inscrit
     * @param Membre $membre
     * @return bool|mixed|string
     */
    public function exist( Membre $membre ) {
        fseek($this->file, 0, SEEK_SET);
        while( $unMembre = fgets($this->file) ) {
            $unMembre = unserialize( $unMembre );
            if ( $membre->estCeLeMeme( $unMembre ) ) {
                return $unMembre;
            }
        }
        return false;
    }
}