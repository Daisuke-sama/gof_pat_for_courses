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
 * Class Love
 *
 * @package GOF\Behavioural\ResponsibilityChain
 */
class Love extends EmotionBase
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
        if (strcmp('love', $stimulus) === 0) {
            return Love::class;
        }

        $this->print_service($stimulus);

        return $this->emotion->activate($stimulus) ?? $this->notFound;
    }
}