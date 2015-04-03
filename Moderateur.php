<?php

include "User.php";

/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 03/04/15
 * Time: 18:08
 */
class Moderateur extends User {

    /**
     * @var etoile
     */
    protected $etoile;

    /**
     * @var description
     */
    protected $description;

    /**
     * @param $nom
     * @param $prenom
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



}