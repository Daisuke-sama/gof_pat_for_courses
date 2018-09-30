<?php
/**
 * Created by Pavel Burylichau
 * Company: EPAM Systems
 * User: paul.burilichev@gmail.com
 * Date: 10/1/18
 * Time: 12:42 AM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';


$mother = new \GOF\Behavioural\Observer\Mother();
$grandpa = new \GOF\Behavioural\Observer\GrandFather();

$child1 = new \GOF\Behavioural\Observer\Child($mother, $grandpa);
sleep(1);
$child2 = new \GOF\Behavioural\Observer\Child($mother);


ActChild($child1, 5);
ActChild($child2, 3);

print $mother->GetLogs();
print PHP_EOL . PHP_EOL;
print $grandpa->GetLogs();


function ActChild($child, $times) {
    do {
        --$times;
        $child->Action();
    } while ($times > 0);
}