<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 14-May-18
 * Time: 1:02 AM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';


// Testing of random generated cats and their amount in bytes.
$shelter = new \GOF\Structural\Flyweight\OrphanedCatsShelter();
$count = 100;
try {
	$shelter->fillWithNewFlyweightCats($count);
} catch (Exception $e) {
	echo 'Problem with random_int';
}

$memory1 = memory_get_usage();

print 'Generated ' . $count . ' of cats. ' . PHP_EOL;
print 'Memory used ' . $memory1 . ' bytes.' . PHP_EOL;

// Testing addition of another $count of cats and comparing the volume.
try {
	$shelter->fillWithNewFlyweightCats($count);
} catch (Exception $e) {
	echo 'Problem with random_int again';
}

$memory2 = memory_get_usage();

print 'Generated another ' . $count . ' of cats. ' . PHP_EOL;
print 'Memory used ' . $memory2 . ' bytes.' . PHP_EOL;

print 'Cats in the shelter - ' . $shelter->countCats() . '. ';
print $memory1 . ' is less then ' . $memory2 . ' not twice.' . PHP_EOL;


try {
	$shelter->fillWithNewBasicCats(200);
} catch (Exception $e) {
	echo 'Problem with random_int again';
}

$memory3 = memory_get_usage();


print 'Generated ' . $count * 2 . ' of cats without using the Flyweight pattern.' . PHP_EOL;
print 'And the memory usage has increased significantly: ' . $memory3 . ' bytes.' . PHP_EOL;