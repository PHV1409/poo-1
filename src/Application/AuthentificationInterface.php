<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 07/04/15
 * Time: 15:48
 */

/**
 * Interface AuthentificationInterface
 */
interface AuthentificationInterface{

    /**
     * Set Last Login
     * @param $date
     * @return mixed
     */
    public function setLastLogin($date);

    /**
     * Get Last Login
     * @return mixed
     */
    public function getLastLogin();

    /**
     * Set Date Created
     * @param $date
     * @return mixed
     */
    public function setDateCreated($date);

    /**
     * Get Date Created
     * @return mixed
     */
    public function getDateCreated();
}