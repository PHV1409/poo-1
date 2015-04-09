<?php
namespace Application;

/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 03/04/15
 * Time: 16:33
 */

/**
 * Class User
 */
class User extends AbstractUser implements AuthentificationInterface, InscriptionInterface{


    /**
     * @var
     */
    protected $age;

    /**
     * Constante de pays
     */
    const PAYS = "France";

    /**
     * Constante de langue
     */
    const LANGUES = "Français";

    /**
     * Methode pour commenter
     */
    public function commenter(){
        return $this->prenom. " a commenté!";
    }

    public function noter($note){
        return $this->prenom. " a noté! " .$note;
    }

    public function repondre(User $user){
        return $this->prenom. " a répondu au commentaire de " .$user->prenom;
    }

    /**
     * @param $nom
     * @param $prenom
     * @param $email
     * @param int $age
     */
    public function __construct($nom, $prenom, $email, $age = 26){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->age = $age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set Last Login
     * @param $date
     * @return mixed
     */
    public function setLastLogin($date)
    {
        // TODO: Implement setLastLogin() method.
    }

    /**
     * Get Last Login
     * @return mixed
     */
    public function getLastLogin()
    {
        // TODO: Implement getLastLogin() method.
    }

    /**
     * Set Date Created
     * @param $date
     * @return mixed
     */
    public function setDateCreated($date)
    {
        // TODO: Implement setDateCreated() method.
    }

    /**
     * Get Date Created
     * @return mixed
     */
    public function getDateCreated()
    {
        // TODO: Implement getDateCreated() method.
    }


    public function inscription()
    {
        return "L'utilisateur ". $this->prenom . " s'est bien inscrit !";
    }

    /**
     * @return mixed
     */
    public function desinscription()
    {
        // TODO: Implement desinscription() method.
    }

    /**
     * @return string
     */
    public function connexion(){
        return "L'utilisateur ". $this->prenom . " s'est bien connecté !";
    }

    /**
     * @return string
     */
    public function deconnexion(){
        return "L'utilisateur ". $this->prenom . " s'est bien connecté !";
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


} // FIN de Class User