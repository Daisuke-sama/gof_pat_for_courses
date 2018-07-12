<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 12-Jul-18
 * Time: 11:47 PM
 */

namespace GOF\Behavioural\Command;


abstract class AbstractCommand
{
    /**
     * @var AutoArtist
     */
    protected $artist;

    abstract public function execute(): void;
}