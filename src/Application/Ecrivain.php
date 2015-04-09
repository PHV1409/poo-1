<?php
namespace Application;

class Ecrivain extends AbstractUser{

    /**
     * @var biographie
     */
    protected $biographie;


    // Créé directement dans l'index
//    /**
//     * @param $genre
//     * @param $nom
//     * @param $prenom
//     * @param $email
//     * @param $biographie
//     */
//    public function __construct($genre, $nom, $prenom, $email, $biographie){
//        $this->genre = $genre;
//        $this->nom = $nom;
//        $this->prenom = $prenom;
//        $this->email = $email;
//        $this->biographie = $biographie;
//    }

    /**
     * @param \biographie $biographie
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * @return \biographie
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    public function inscription()
    {
        return "L'écrivain ". $this->prenom . " s'est bien inscrit !";
    }

    public function connexion(){
        return "L'écrivain ". $this->prenom . " s'est bien connecté !";
    }

    public function deconnexion(){
        return parent::deconnexion() ."L'écrivain ". $this->prenom . " s'est bien déconnecté !";
    }


}