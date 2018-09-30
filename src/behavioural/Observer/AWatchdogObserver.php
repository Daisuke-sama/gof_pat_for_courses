<?php
/**
 * Created by Pavel Burylichau
 * Company: EPAM Systems
 * User: paul.burilichev@gmail.com
 * Date: 9/27/18
 * Time: 12:02 AM
 */


namespace GOF\Behavioural\Observer;


/**
 * Class AWatchdogObserver represents a base of observer.
 *
 * @package GOF\Behavioural\Observer
 */
abstract class AWatchdogObserver
{
    /**
     * @var array Array of logs of an observer.
     */
    protected $_logs = [];

    /**
     * Updates log of the observer.
     *
     * @param string $message Data to be logged in a string representation.
     */
    public function Update(string $message) {
        $resultMessage = (new \DateTime())->format('H:i:s \$ ') . $message;

        array_push($this->_logs, $resultMessage);
    }

    /**
     * Returns logs from the observer.
     *
     * @return array Logs of the observer.
     */
    public function GetLogs() {
        return $this->_logs;
    }
}