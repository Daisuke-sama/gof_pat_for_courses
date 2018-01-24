<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 24-Jan-18
 * Time: 1:22 AM
 */

namespace GOF\Creational\AbstractFactory;


abstract class AbstractCircleSpinner
{
    abstract function getModel();

    abstract function getAuthor();
}