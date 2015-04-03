<?php
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 03/04/15
 * Time: 16:33
 */

/**
 * Class User
 */
class User {

    /**
     * @var
     */
    protected $nom;

    /**
     * @var
     */
    protected $prenom;

    /**
     * @var
     */
    protected $email;

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
        echo $this->prenom. " a commenté!";
    }

    public function repondre(User $user){
        echo $this->prenom. " a répondu au commentaire de " .$user->prenom;
    }

    /**
     * Constructeur d'objet qui prends 4 paramètres
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $age
     */
    public function __construct($nom, $prenom, $email, $age){
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
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }



} // FIN de Class User