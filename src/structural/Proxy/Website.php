<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 19-Jun-18
 * Time: 12:08 AM
 */

namespace GOF\Structural\Proxy;

use Exception;
use function random_int;


/**
 * Class Website represents a page that can be vulnerable due its rank.
 *
 * @package GOF\Structural\Proxy
 */
class Website
{
    /**
     * @var int
     */
    private $rank = 0;

    /**
     * Website constructor.
     */
    public function __construct()
    {
        try {
            $this->setRank(random_int(0, 100));
        } catch (Exception $e) {
            $this->setRank(85);
        }
    }

    /**
     * @param string $rank
     */
    public function setRank(string $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getRank(): string
    {
        return $this->rank;
    }
}