<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Feb-18
 * Time: 11:46 PM
 */

namespace GOF\Structural\Composition;

use ArrayObject;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';

$megaSirGeek = new Sir('Dorian');
$smallSir1 = new Sir('Mikut');
$smallSir2 = new Sir('Gikut');

$megaSirGeek->enqueue($smallSir1);
$megaSirGeek->enqueue($smallSir2);

$megaSirGeek->sayName();
print 'Sir has ' . $megaSirGeek->count() . ' of units.';

print '||| Trying to add a non-unit: ';
$megaSirGeek->enqueue(new ArrayObject());


$solitary = new Solitary();
$solitary->sayName();
$solitary->push($smallSir2);

$smallSir1->sayName();
$smallSir1->push($solitary);
print ' Sir has ' . $smallSir1->count() . ' of units.';

