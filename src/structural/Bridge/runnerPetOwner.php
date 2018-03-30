<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:16 PM
 */

namespace GOF\Structural\Bridge;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';


print 'Testing for a GOOD pet owner. ====>>>> ';
$owner = new GoodPetOwner('Chicky', 'good');
print $owner->status();

print ' |||||||||| Testing for a GOOD pet owner with a BAD MANNER. ====>>>> ';
$owner = new GoodPetOwner('Gicky', 'bad');
print $owner->status();

print ' |||||||||| Testing for a GOOD pet owner with a NEUTURAL MANNER. ====>>>> ';
$owner = new GoodPetOwner('Shmiky', '');
print $owner->status();


print ' |||||||||| Testing for a BAD pet owner. ====>>>> ';
$owner = new BadPetOwner('Sticky', 'bad');
print $owner->status() . ' ';
$owner->walkThePet();


print ' |||||||||| Testing for a NEUTURAL pet owner. ====>>>> ';
$owner = new NeuturalPetOwner('Neucky', '');
$owner->walkThePet();
print ' ' . $owner->status();