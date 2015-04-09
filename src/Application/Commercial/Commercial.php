<?php

namespace Application\Commercial;

use Application\EditeurInterface;
use Application\User;

/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 07/04/15
 * Time: 10:55
 */


class Commercial extends User implements EditeurInterface{
    /**
     * @var mag
     */
    protected $mag;

    /**
     * @var experience
     */
    protected $experience;

    /**
     * Methode pour vendre
     * Les méthodes de classes font des traitements et retournent une ou plusieurs valeurs
     */
    public function vendre(){ // pas de echo dans les méthodes
        return $this->prenom. " a vendu un article!";
    }

    public function promotionner(){
        return $this->prenom. " a promotionné un article.";
    }

    /**
     * @param $nom
     * @param $prenom
     * @param $email
     * @param int $age
     * @param $mag
     * @param $experience
     */
    public function __construct($nom, $prenom, $email, $age, $mag, $experience){
        parent::__construct($nom, $prenom, $email, $age);
        $this->mag = $mag;
        $this->experience = $experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $mag
     */
    public function setMag($mag)
    {
        $this->mag = $mag;
    }

    /**
     * @return mixed
     */
    public function getMag()
    {
        return $this->mag;
    }


    /**
     * @param $article
     * @return mixed|string
     */
    public function moderer($article)
    {
        return $this->prenom. " " .$this->nom. " \"commercial\" a modéré cet article ". $article;
    }

    /**
     * @param $user
     * @return mixed|string
     */
    public function blamer($user)
    {
        return $this->prenom. " " .$this->nom. " \"commercial\" a blamé cet utilisateur ". $user->getNom();
    }

    /**
     * @param $article
     * @return mixed|string
     */
    public function promouvoir($article)
    {
        return $this->prenom. " " .$this->nom. " \"commercial\" a promu cet article ". $article;
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