<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 08/04/15
 * Time: 10:16
 */

interface EditeurInterface{

    /**
     * @param $article
     * @return mixed
     */
    public function moderer($article);

    /**
     * @param $user
     * @return mixed
     */
    public function blamer($user);

    /**
     * @param $article
     * @return mixed
     */
    public function promouvoir($article);


// FIN de l'Interface Editeur
}