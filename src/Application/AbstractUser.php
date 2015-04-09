<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 07/04/15
 * Time: 12:12
 */


/**
 * Classe qui me sert de modèle aux classes filles qui hériteront de cette classe
 * Nomenclature: Mon nom de classe abstraite est préfixé par le mot clef "Abstract"
 * Class AbstractUser
 */
abstract class AbstractUser implements CrudInterface{

    /**
     * @var genre
     */
    protected $genre;

    /**
     * @var nom
     */
    protected $nom;

    /**
     * @var prenom
     */
    protected $prenom;

    /**
     * @var email
     */
    protected $email;

    /**
     * @var connexion
     */
    protected $connexion;



    /**
     * @return mixed
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * @param $nom
     * @return mixed
     */
    public function setNom($nom){
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom(){
        return $this->prenom;
    }

    /**
     * @param $prenom
     * @return mixed
     */
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    /**
     * Get Mail
     * @return mixed
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @param $email
     * @return mixed
     */
    public function setEmail($email){
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGenre(){
        return $this->genre;
    }

    /**
     * @param $genre
     * @return mixed
     */
    public function setGenre($genre){
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public abstract function inscription();

    public abstract function connexion();

    public function deconnexion(){
        return $this->prenom . " s'est bien déconnecté.<br/>";
    }

    /**
     * @return mixed
     */
    public function creer()
    {
        // TODO: Implement creer() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function modifier($id)
    {
        // TODO: Implement modifier() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function voir($id)
    {
        // TODO: Implement voir() method.
    }

    /**
     * @return mixed
     */
    public function Lister()
    {
        // TODO: Implement Lister() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function supprimer($id)
    {
        // TODO: Implement supprimer() method.
    }


// FIN de class AbstractUser
}

?>