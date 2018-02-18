<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:14 PM
 */

namespace GOF\Structural\Bridge;


class GoodPetOwnerActions extends APetOwnerActions
{
    function walkThePet(string $name): void
    {
        print "I'm walking my pet $name and I treat it carefully.";
    }

    function checkItsHealth(): string
    {
        return 'happy and healthy';
    }
}