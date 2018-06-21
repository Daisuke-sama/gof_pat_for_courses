<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:30 AM
 */

namespace GOF\Behavioural\ResponsibilityChain;

use function strcmp;


/**
 * Class Sadness
 *
 * @package GOF\Behavioural\ResponsibilityChain
 */
class Sadness extends EmotionBase
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
        if (strcmp('Sadness', $stimulus) === 0) {
            return Sadness::class;
        }

        $this->print_service($stimulus);

        return $this->emotion->activate($stimulus) ?? $this->notFound;
    }
}