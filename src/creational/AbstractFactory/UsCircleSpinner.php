<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 11:15 PM
 */

namespace GOF\Creational\AbstractFactory;


use function strcmp;

class UsCircleSpinner extends AbstractCircleSpinner
{
    private $model;
    private $inventor;

    private static $oddOrEven = 'odd';

    function __construct()
    {
        $this->model    = 'United States';

        if (strcmp(self::$oddOrEven, 'odd') === 0) {
            $this->inventor = 'Sam';
        } else {
            $this->inventor = 'Gregory';
        }
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