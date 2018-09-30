<?php
/**
 * Created by Pavel Burylichau
 * Company:
 * User: paul_burilichev@gmail.com
 * Date: 9/27/18
 * Time: 12:12 AM
 */


namespace GOF\Behavioural\Observer;


/**
 * Class AHuman represents a person who is being observed.
 *
 * @package GOF\Behavioural\Observer
 */
abstract class AHuman
{
    /**
     * @var array
     */
    protected $_observers = [];

    /**
     * The function adds an observer instance to the list of watchdogs, i.e. observers.
     *
     * @param AWatchdogObserver $observer An observer to be attached.
     */
    public function Attach(AWatchdogObserver $observer)
    {
        array_push($this->_observers, $observer);
    }

    /**
     * Notifies attached observers.
     *
     * @param string $msg String to write to the whole group of observers.
     */
    protected function NotifyAll(string $msg) {
        foreach ($this->_observers as $observer) {
            $observer->Update($msg);
        }
    }

    /**
     * An action to be performed by a human.
     *
     * @return mixed
     */
    abstract public function Action();
}