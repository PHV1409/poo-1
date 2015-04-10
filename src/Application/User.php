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
     * Constante de formation
     */
    const FORMATION = "3W Academy";

    /**
     * Constante de langue
     */
    const LANGUES = "Français";

    /**
     * Methode pour commenter
     */
    public function commenter($message){
        return $this->prenom. " a commenté!";
    }

    /**
     * $this représente l'objet définit par la fonction toString
     * qui converti l'objet en chaine de caractères
     * @param int $note
     * @return string
     */
    public function noter($note = 4){
        return $this. " a noté : " .$note;
    }

    /**
     * Interagir avec un utilisateur, un message et une note
     * @param User $user
     * @param string $message
     * @param $note
     * @return string
     */
    public function interagir(User $user, $message = "", $note){
        // Appel de la méthode repondre() et de la méthode noter() en interne
        return $this->repondre($user,$message). " " .$this->noter($note);
    }



    /**
     * final présise que la méthode ne peut être réécrite par les classes filles
     */
    public final function partagerResauxSociaux(){
        return $this . " a partagé sur Facebook et Twitter :) ";
    }

    public function repondre(User $user, $message = "Aucun message"){
        // return $this->prenom est remplacé par $this qui utilise la méthode __toString
        return $this. "<span style='color:red'> a répondu à au commentaire de : </span>" .$user->prenom. " : " . $message;
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

    /**
     * @return string
     */
    static public function getPays(){
        return "Tous les utilisateurs viennent de " . self::PAYS;
    }

    /**
     * @return string
     */
    static public function getFormation(){
        return "Tous les utilisateurs ont suivi la formation " . self::FORMATION;
    }

    /**
     * @return string
     */
    static public function getLangues(){
        return "Tous les utilisateurs parlent le " . self::LANGUES;
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