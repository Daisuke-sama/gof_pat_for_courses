<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:29 AM
 */

namespace GOF\Behavioural\ResponsibilityChain;

use function strcmp;


/**
 * Class Joy
 *
 * @package GOF\Behavioural\ResponsibilityChain
 */
class Joy extends EmotionBase
{
    /**
     * The emotion activator.
     *
     * @param string $stimulus The matter to splash the emotion.
     *
     * @return mixed
     */
    public function activate(string $stimulus): string
    {
        if (strcmp('joy', $stimulus) === 0) {
            return Joy::class;
        }

        $this->print_service($stimulus);

        return $this->emotion->activate($stimulus) ?? $this->notFound;
    }
}