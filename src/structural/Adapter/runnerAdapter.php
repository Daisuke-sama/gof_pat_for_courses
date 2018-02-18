<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 15-Feb-18
 * Time: 2:25 PM
 */

namespace GOF\Structural\Adapter;

require_once __DIR__ . '\..\..\..\vendor\autoload.php';

$adapter = new BigBuddyAdapter();
$client = new BigBuddyClient($adapter);
$client->createBadaBoom();