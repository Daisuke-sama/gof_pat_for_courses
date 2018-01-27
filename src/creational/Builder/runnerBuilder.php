<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 8:53 PM
 */

namespace GOF\Creational\AbstractFactory;

use GOF\Creational\Builder\CatDirector;
use GOF\Creational\Builder\FluffyCatBuilder;
use GOF\Creational\Builder\StreetCatBuilder;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';

$catBuilder = new FluffyCatBuilder();
$catMaker = new CatDirector($catBuilder);
$newFluffyCat = $catMaker->makeCat();

$catBuilder = new StreetCatBuilder();
$catMaker = new CatDirector($catBuilder);
$newStreetCat = $catMaker->makeCat();

print ' /// ' . $newStreetCat;
print '/// ' . $newFluffyCat;
