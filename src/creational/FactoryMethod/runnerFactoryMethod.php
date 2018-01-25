<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 7:13 PM
 */

namespace GOF\Creational\FactoryMethod;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';


$fictionFactory = new FictionFactoryMethod();
$novel          = $fictionFactory->writeAnArticle('novel');
print ' +++ ' . $novel->getAuthor() . ' // ' . $novel->getTitle();

$publicFactory = new PublicFactoryMethod();
$magazineArticle = $publicFactory->writeAnArticle('short');
print ' +++ ' . $magazineArticle->getAuthor() . ' // ' . $magazineArticle->getTitle();

$magazineArticle = $publicFactory->writeAnArticle('long');
print ' +++ ' . $magazineArticle->getAuthor() . ' // ' . $magazineArticle->getTitle();

$magazineArticle = $publicFactory->writeAnArticle('geek');
print ' +++ ' . $magazineArticle->getAuthor() . ' // ' . $magazineArticle->getTitle();
