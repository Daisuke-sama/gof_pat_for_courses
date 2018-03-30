<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:30 PM
 */

namespace GOF\Structural\Bridge;


class NeuturalPetOwnerActions extends APetOwnerActions
{
    function walkAPet(string $name): void
    {
        print "I'm walking the $name.";
    }

    function checkItsHealth(): string
    {
        return 'fine';
    }
}