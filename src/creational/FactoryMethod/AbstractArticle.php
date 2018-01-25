<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 6:51 PM
 */

namespace GOF\Creational\FactoryMethod;


abstract class AbstractArticle
{
    protected $author;
    protected $title;

    function __construct(string $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    abstract function getAuthor();

    abstract function getTitle();
}