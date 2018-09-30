<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 8:43 PM
 */

namespace GOF\Creational\Builder;


class StreetCatBuilder extends AbstractCatBuilder
{
    /**
     * @var Cat
     */
    private $_cat;


    function __construct()
    {
        $this->_cat = new Cat();
        $this->_cat->property = 'none';
    }

    function buildPaws(): void
    {
        $this->_cat->paws = 'Nailed Paws';
    }

    function buildBody(): void
    {
        $this->_cat->body = 'Muscled Body';
    }

    function buildHead(): void
    {
        $this->_cat->head = 'Scared Head';
    }

    function getCat(): Cat
    {
        return $this->_cat;
    }
}