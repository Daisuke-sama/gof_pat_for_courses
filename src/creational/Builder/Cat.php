<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 8:32 PM
 */

namespace GOF\Creational\Builder;


class Cat
{
    public $paws;
    public $body;
    public $head;
    public $property;

    public function __toString()
    {
        return "Cat: " . $this->paws . ' + '
            . $this->body . ' + '
            . $this->head . '. Has property: '
            . $this->property . '.';
    }
}