<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 10:16 PM
 */

namespace GOF\Creational\Singleton;

use Exception;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';


$myMother = MotherSingleton::callMother();
print $myMother->getAge() . ' / ' . $myMother->getName() . ' / ' . $myMother->getTown() . ' /// ';

try {
    $clonedMother = clone $myMother;
} catch (Exception $e) {
    print ' YOU CAN\'T CLONE YOUR MOTHER /// ';
}

print $myMother->getName() . '\'s TOWN => ' . $myMother->getTown() . ' /// ';
$anotherMotherInstance = MotherSingleton::callMother();
$anotherMotherInstance->setTown('Goldtown');
print $myMother->getName() . ' => ' . $myMother->getTown() . ' /// ';
$myMother->setTown('Mothertown');
print $anotherMotherInstance->getName() . ' => ' . $anotherMotherInstance->getTown();