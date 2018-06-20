<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:27 AM
 */

namespace GOF\Behavioural\ResponsibilityChain;

use function strcmp;
use function trim;


/**
 * Class Kindness
 *
 * @package GOF\Behavioural\ResponsibilityChain
 */
class Happiness extends EmotionBase
{
    /**
     * The emotion activator.
     *
     * @param string $stimulus
     *
     * @return mixed
     */
    public function activate(string $stimulus): string
    {
        if (strcmp('happiness', $stimulus) === 0) {
            return Happiness::class;
        }

        $this->print_service($stimulus);
        
        return $this->emotion->activate($stimulus) ?? $this->notFound;
    }
}