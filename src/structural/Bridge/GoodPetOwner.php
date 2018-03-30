<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:08 PM
 */

namespace GOF\Structural\Bridge;


use function strtoupper;

class GoodPetOwner extends APetOwner
{
    public function __construct(string $petName, string $typeOfOwnerActions)
    {
        parent::__construct($petName, $typeOfOwnerActions);

        $this->ownerName = 'GoodMan';
    }

    public function status(): string
    {
        $this->walkThePet();

        return " I'm a $this->ownerName, and I'm glad that my pet is " . strtoupper($this->healthcheck()) . ".";
    }
}