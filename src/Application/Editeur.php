<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 07/04/15
 * Time: 10:18
 */


class Editeur extends User implements EditeurInterface{

    /**
     * @var
     */
    protected $presse;

    /**
     *
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $presse
     */
    public function __construct($nom, $prenom, $email, $presse){
        parent::__construct($nom, $prenom, $email);
        $this->presse = $presse;
    }

    //  ***  Les méthodes getters & setters  ***

    /**
     * @param mixed $presse
     */
    public function setPresse($presse)
    {
        $this->presse = $presse;
    }

    /**
     * @return mixed
     */
    public function getPresse()
    {
        return $this->presse;
    }

    /**
     * @param $article
     * @return mixed|string
     */
    public function moderer($article)
    {
        return $this->prenom. " " .$this->nom. " \"éditeur\" a modéré cet article ". $article;
    }

    /**
     * @param $user
     * @return mixed|string
     */
    public function blamer($user)
    {
        return $this->prenom. " " .$this->nom. " \"éditeur\" a blamé cet utilisateur ". $user->getNom();
    }

    /**
     * @param $article
     * @return mixed|string
     */
    public function promouvoir($article)
    {
        return $this->prenom. " " .$this->nom. " \"éditeur\" a promu cet article ". $article;
    }

    /**
     * @param User $user
     * @param string $message
     * @return string
     */
    public function repondre(User $user, $message = "Aucun message"){
        //$user est un objet de la classe User
        return "<span style='color:red'>Un éditeur a répondu à : </span>" .$user;
    }


// FIN de la class Editeur
}