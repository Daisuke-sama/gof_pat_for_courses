<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 8:20 PM
 */

namespace GOF\Creational\FactoryMethod;


class BadPublicArticle extends AbstractArticle
{
    function getAuthor()
    {
        return $this->getErrorText();
    }

    function getTitle()
    {
        return $this->getErrorText();
    }

    private function getErrorText() {
        return 'Broken Article';
    }
}