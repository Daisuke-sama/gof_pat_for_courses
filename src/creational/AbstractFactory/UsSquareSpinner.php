<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 11:21 PM
 */

namespace GOF\Creational\AbstractFactory;


class UsSquareSpinner extends AbstractSquareSpinner
{
    private $model;
    private $inventor;

    function __construct()
    {
        $this->model = 'NewUS';
        $this->inventor = 'Sam';
    }

    function getModel()
    {
        return $this->model;
    }

    function getInventor()
    {
        return $this->inventor;
    }
}