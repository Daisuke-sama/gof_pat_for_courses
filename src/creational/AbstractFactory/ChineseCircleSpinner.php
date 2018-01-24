<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 10:33 PM
 */

namespace GOF\Creational\AbstractFactory;


class ChineseCircleSpinner extends AbstractCircleSpinner
{
    private $model;
    private $inventor;

    function __construct()
    {
        $this->model = 'Chinese';
        $this->inventor = 'Yan Xuyun';
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