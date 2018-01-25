<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 7:28 PM
 */

namespace GOF\Creational\FactoryMethod;


class PublicLongArticle extends AbstractArticle
{
    function __construct(string $author = 'Unnamed', string $title = 'Untitled Long')
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