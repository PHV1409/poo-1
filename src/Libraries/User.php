<?php
namespace Libraries;

/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 08/04/15
 * Time: 14:30
 */

/**
 * Class User
 * @package Libraries
 */
class User {

    /**
     * @var
     */
    protected $email;

    /**
     * @var
     */
    protected $password;

    /**
     * @param $email
     * @param $password
     */
    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
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
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

} 