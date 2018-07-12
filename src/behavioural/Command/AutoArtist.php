<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 12:04 AM
 */

namespace GOF\Behavioural\Command;


use function array_diff;
use function array_search;
use function array_splice;
use const PHP_EOL;
use SplStack;
use function var_dump;

class AutoArtist
{
    /**
     * @var array
     */
    private $masterpiece = [];

    public function draw(string $aShape): void
    {
        $this->masterpiece[] = $aShape;
    }

    public function erase(string $aShape): void
    {
        $this->masterpiece = array_diff($this->masterpiece, [$aShape]);
    }

    public function display(): void
    {
        foreach ($this->masterpiece as $shape) {
            print $shape . PHP_EOL;
        }
    }
}