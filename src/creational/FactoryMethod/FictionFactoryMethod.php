<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 5:51 PM
 */

namespace GOF\Creational\FactoryMethod;

use Camel\CaseTransformer;
use Camel\Format\CamelCase;
use Camel\Format\SpinalCase;
use ReflectionClass;

class FictionFactoryMethod extends AbstractFactoryMethod
{
    function writeAnArticle(string $type) : AbstractArticle
    {
        $type .= '-article';
        $transformer = new CaseTransformer(new SpinalCase(), new CamelCase());
        $fullArticleClassName = 'GOF\\Creational\\FactoryMethod\\' . $transformer->transform($type);

        try {
            $reflectionOfArticle = new ReflectionClass($fullArticleClassName);
        } catch (\ReflectionException $err) {
            print "Can't create: " . $fullArticleClassName;
            exit(1);
        }

        return $reflectionOfArticle->newInstance();
    }
}