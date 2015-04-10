<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 10/04/15
 * Time: 11:13
 */


/**
 * Class Superadmin
 * @package Application
 */
final class Superadmin extends User {

    protected $login;

    protected $mdp;

    protected $role;

    function __construct($login, $mdp, $role)
    {
        $this->login = $login;
        $this->mdp = $mdp;
        $this->role = $role;
    }

    /**
     * @param \Application\connexion $connexion
     */
    public function setConnexion($connexion)
    {
        $this->connexion = $connexion;
    }

    /**
     * @return \Application\connexion
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }




} 