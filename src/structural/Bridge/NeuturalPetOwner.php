<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:48 PM
 */

namespace GOF\Structural\Bridge;


use function strtoupper;

class NeuturalPetOwner extends APetOwner
{
    public function __construct(string $petName, string $typeOfOwnerActions)
    {
        parent::__construct($petName, $typeOfOwnerActions);

        $this->ownerName = 'NeuturalMan';
    }

    public function status(): string
    {
        return "I'm OK that my pet is " . strtoupper($this->healthcheck()) . '. My name is ' . $this->ownerName . '.';
    }
}