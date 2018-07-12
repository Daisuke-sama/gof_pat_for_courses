<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 12:01 AM
 */

namespace GOF\Behavioural\Command;


class EraseCommand extends AbstractCommand
{
    /**
     * @var string
     */
    private $AShape;

    public function __construct(AutoArtist $artist)
    {
        $this->artist = $artist;
    }

    /**
     * @param string $AShape
     */
    public function setAShape(string $AShape): void
    {
        $this->AShape = $AShape;
    }

    public function execute(): void
    {
        $this->artist->erase($this->AShape);
    }
}