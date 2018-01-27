<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 8:47 PM
 */

namespace GOF\Creational\Builder;


class CatDirector
{
    private $_builder;


    function __construct(AbstractCatBuilder $catBuilder)
    {
        $this->_builder = $catBuilder;
    }

    function makeCat() : Cat
    {
        $this->_builder->buildBody();
        $this->_builder->buildPaws();
        $this->_builder->buildHead();

        return $this->_builder->getCat();
    }
}