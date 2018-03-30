<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 30-Mar-18
 * Time: 3:03 PM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

$colt = new \GOF\Structural\Decorator\Colt();
echo $colt->load();
echo $colt->fire();

echo "DECORATED NEXT";

$blastedColt = new \GOF\Structural\Decorator\BlastedBullets($colt);
echo $blastedColt->load();
echo $blastedColt->fire();
