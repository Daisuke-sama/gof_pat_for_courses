<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 8:22 PM
 */

namespace GOF\Creational\FactoryMethod;


class PublicShortArticle extends AbstractArticle
{
    function __construct(string $author = 'Unnamed', string $title = 'Untitled Short Article')
    {
        parent::__construct($author, $title);
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}