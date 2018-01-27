<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 27-Jan-18
 * Time: 9:29 PM
 */

namespace GOF\Creational\Prototype;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';


$bigAnt_1 = new BigAnt('BigHome');
$bigAnt_2 = clone $bigAnt_1;
$bigAnt_3 = clone $bigAnt_1;
print $bigAnt_1 . ' => ' . $bigAnt_2 . ' => ' . $bigAnt_3 . ' /////// ';

$redAnt_1 = new RedAnt('RedHome');
$redAnt_2 = clone $redAnt_1;
$redAnt_3 = clone $redAnt_1;
print $redAnt_1 . ' => ' . $redAnt_2 . ' => ' . $redAnt_3 . ' /////// ';