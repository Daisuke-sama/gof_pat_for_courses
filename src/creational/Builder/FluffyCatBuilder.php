<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 8:34 PM
 */

namespace GOF\Creational\Builder;


class FluffyCatBuilder extends AbstractCatBuilder
{
    /**
     * @var Cat
     */
    private $_cat;

    function __construct()
    {
        $this->_cat = new Cat();
        $this->_cat->property = 'Fluffy Tail';
    }

    function buildPaws(): void
    {
        $this->_cat->paws = 'Big Paws';
    }

    function buildBody(): void
    {
        $this->_cat->body = 'Fluffy Body';
    }

    function buildHead(): void
    {
        $this->_cat->head = 'Fluffy Head';
    }

    function getCat(): Cat
    {
        return $this->_cat;
    }
}