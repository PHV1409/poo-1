<?php
namespace Application;
/**
 * Created by PhpStorm.
 * User: wac30
 * Date: 10/04/15
 * Time: 10:56
 */
use Application\Commercial\Commercial;


/**
 * La classe "final" ne peut pas être hérité
 * à contrario de la classe abstract qui est faite pour être hérité
 *
 * ATTENTION : Commercial est dans le namespace Application\Commercial
 * donc il faut créer un use : use Application\Commercial\Commercial;
 *
 * Class VRP
 * @package Application
 */
final class VRP extends Commercial{

    /**
     * @var $commerce
     */
    protected $commerce;

    /**
     * @var $commission
     */
    protected $commission;


    /**
     * @param $commerce
     * @param $commission
     */
    function __construct($commerce, $commission)
    {
        $this->commerce = $commerce;
        $this->commission = $commission;
    }

    /**
     * @param mixed $commerce
     */
    public function setCommerce($commerce)
    {
        $this->commerce = $commerce;
    }

    /**
     * @return mixed
     */
    public function getCommerce()
    {
        return $this->commerce;
    }

    /**
     * @param mixed $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return mixed
     */
    public function getCommission()
    {
        return $this->commission;
    }




} 