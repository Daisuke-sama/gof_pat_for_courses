<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 12:29 AM
 */

namespace GOF\Behavioural\Command;


use SplQueue;
use function var_dump;

class ArtistPerformer
{
    /**
     * @var SplQueue
     */
    private $commands;

    public function __construct()
    {
        $this->commands = new SplQueue();
    }

    public function addCommand(AbstractCommand ...$commands)
    {
        foreach ($commands as $command) {
            $this->commands->enqueue($command);
        }
    }

    public function runCommands(): void
    {
        while(!$this->commands->isEmpty()) {
            $this->commands->dequeue()->execute();
        }
    }
}