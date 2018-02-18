<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 8:39 PM
 */

namespace GOF\Structural\Bridge;


use function strtoupper;

class BadPetOwner extends APetOwner
{
    protected $petName;

    public function __construct(string $petName, string $typeOfOwnerActions)
    {
        parent::__construct($petName, $typeOfOwnerActions);

        $this->ownerName = 'BadMan';
        $this->petName = $petName;
    }

    public function status(): string
    {
        return " My name is $this->ownerName, and I'm glad that my pet $this->petName is " . strtoupper(
                $this->healthcheck()
            ) . '.';
    }
}