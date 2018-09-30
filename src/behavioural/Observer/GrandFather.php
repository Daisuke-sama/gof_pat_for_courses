<?php
/**
 * Created by Pavel Burylichau
 * Company: EPAM Systems
 * User: paul.burilichev@gmail.com
 * Date: 10/1/18
 * Time: 12:40 AM
 */


namespace GOF\Behavioural\Observer;


class GrandFather extends AWatchdogObserver
{
    /**
     * Returns logs of the GrandFather's observer.
     *
     * @return string Logged records as a multiline string.
     */
    public function GetLogs()
    {
        $recap = "GRANDFATHER's RECORDS:" . PHP_EOL;

        foreach (parent::GetLogs() as $record) {
            $recap .= $record . PHP_EOL;
        }

        return $recap;
    }
}