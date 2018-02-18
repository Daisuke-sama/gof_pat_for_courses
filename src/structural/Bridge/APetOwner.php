<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 18-Feb-18
 * Time: 7:15 PM
 */

namespace GOF\Structural\Bridge;


abstract class APetOwner
{
    /**
     * @var string
     */
    private $petName;

    /**
     * @var string
     */
    protected $ownerName;

    /**
     * @var APetOwnerActions
     */
    private $ownerItself;


    public function __construct(string $petName, string $typeOfOwnerActions)
    {
        $this->petName = $petName;

        switch ($typeOfOwnerActions) {
        case 'good':
            {
                $this->ownerItself = new GoodPetOwnerActions();
                break;
            }
        case 'bad':
            {
                $this->ownerItself = new BadPetOwnerActions();
                break;
            }
        default:
            {
                $this->ownerItself = new NeuturalPetOwnerActions();
            }
        }
    }

    public function walkAPet(): void
    {
        $this->ownerItself->walkThePet($this->petName);
    }

    public function healthcheck(): string
    {
        return $this->ownerItself->checkItsHealth();
    }

    abstract public function status(): string;
}