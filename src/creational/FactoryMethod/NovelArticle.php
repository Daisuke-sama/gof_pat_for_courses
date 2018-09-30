<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 7:05 PM
 */

namespace GOF\Creational\FactoryMethod;


class NovelArticle extends AbstractArticle
{
    function __construct(string $author = 'Unnamed', string $title = 'Untitled Novel')
    {
        parent::__construct($author, $title);
    }

    function getAuthor() : string
    {
        return $this->author;
    }

    function getTitle() : string
    {
        return $this->title;
    }
}