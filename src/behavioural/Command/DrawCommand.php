<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 12-Jul-18
 * Time: 11:49 PM
 */

namespace GOF\Behavioural\Command;


class DrawCommand extends AbstractCommand
{
    /**
     * @var string
     */
    private $aShape;

    public function __construct(AutoArtist $artist)
    {
        $this->artist = $artist;
    }

    /**
     * @param string $aShape
     */
    public function setAShape(string $aShape): void
    {
        $this->aShape = $aShape;
    }

    public function execute(): void
    {
        $this->artist->draw($this->aShape);
    }
}