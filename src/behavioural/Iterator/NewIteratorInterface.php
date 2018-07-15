<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 15-Jul-18
 * Time: 1:08 AM
 */

namespace GOF\Behavioural\Iterator;


use Traversable;

interface NewIteratorInterface extends Traversable
{
    public function first();
    public function next();
    public function isDone();
    public function current();
}