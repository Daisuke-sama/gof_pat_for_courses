<?php
/**
 * Created by Pavel Burylichau
 * Company: EPAM Systems
 * User: paul.burilichev@gmail.com
 * Date: 10/1/18
 * Time: 12:34 AM
 */


namespace GOF\Behavioural\Observer;


class Mother extends AWatchdogObserver
{
    /**
     * Returns logs of the Mother observer.
     *
     * @return string Logged records as a multiline string.
     */
    public function GetLogs()
    {
        $recap = "MOTHER's RECORDS:" . PHP_EOL;

        foreach (parent::GetLogs() as $record) {
            $recap .= $record . PHP_EOL;
        }

        return $recap;
    }
}