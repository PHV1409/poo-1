<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 08/04/15
 * Time: 10:41
 */

interface CrudInterface{

    /**
     * @return mixed
     */
    public function creer();

    /**
     * @param $id
     * @return mixed
     */
    public function modifier($id);

    /**
     * @param $id
     * @return mixed
     */
    public function voir($id);

    /**
     * @return mixed
     */
    public function Lister();

    /**
     * @param $id
     * @return mixed
     */
    public function supprimer($id);


// FIN de l'Interface CRUD
}