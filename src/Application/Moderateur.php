<?php
namespace Application;

/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 03/04/15
 * Time: 18:08
 */
class Moderateur extends User{

    /**
     * @var etoile
     */
    protected $etoile;

    /**
     * @var description
     */
    protected $description;

    public function blamer(User $user){
        return $this->prenom . " a blamé l'utilisateur " . $user->prenom;
    }

    /**
     * @param $nom
     * @param $prenom
     * @param $email
     * @param int $age
     * @param $etoile
     * @param $description
     */
    public function __construct($nom, $prenom,$email,$age,$etoile, $description){
        // J'appel mon constructeur parent
        parent::__construct($nom,$prenom,$email,$age);
        $this->etoile = $etoile;
        $this->description = $description;
    }

    /**
     * @param \description $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \etoile $etoile
     */
    public function setEtoile($etoile)
    {
        $this->etoile = $etoile;
    }

    /**
     * @return \etoile
     */
    public function getEtoile()
    {
        return $this->etoile;
    }

    /**
     * Fonction "magique" avec double __
     * Permet de convertir mon objet en chaine de caractère
     * Conversion en chaine de caractère de mon objet
     * @return string
     */
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

}