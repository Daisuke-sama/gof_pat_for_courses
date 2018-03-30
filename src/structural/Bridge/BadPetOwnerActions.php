<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:27 PM
 */

namespace GOF\Structural\Bridge;


class BadPetOwnerActions extends APetOwnerActions
{
    function walkAPet(string $name): void
    {
        print "Because I'm walking with my pet $name and beating it heavily.";
    }

    function checkItsHealth(): string
    {
        return "almost dead";
    }
}