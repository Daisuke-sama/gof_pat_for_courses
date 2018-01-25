<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 25-Jan-18
 * Time: 8:18 PM
 */

namespace GOF\Creational\FactoryMethod;


class PublicFactoryMethod extends AbstractFactoryMethod
{
    function writeAnArticle(string $type): AbstractArticle
    {
        switch ($type) {
        case 'short':
            {
                return new PublicShortArticle();
            }
        case 'long':
            {
                return new PublicLongArticle();
            }
        }

        return new BadPublicArticle('', '');
    }
}