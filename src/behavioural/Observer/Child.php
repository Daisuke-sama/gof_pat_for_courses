<?php
/**
 * Created by Pavel Burylichau
 * Company: EPAM Systems
 * User: paul.burilichev@gmail.com
 * Date: 10/1/18
 * Time: 12:17 AM
 */


namespace GOF\Behavioural\Observer;


class Child extends AHuman
{
    /**
     * @var string
     */
    protected $_name;

    /**
     * Child constructor.
     *
     * @param mixed ...$observers Attached observers
     */
    public function __construct(...$observers)
    {
        foreach ($observers as $observer) {
            if ($observer instanceof AWatchdogObserver) {
                $this->attach($observer);
            }
        }

        $this->_name = 'Child_' . time();
    }

    /**
     * An action to be perfomed by a human.
     *
     * @return mixed
     */
    public function Action()
    {
        $msg = $this->_name . ': cry';
        $this->NotifyAll($msg);

        return $msg;
    }
}