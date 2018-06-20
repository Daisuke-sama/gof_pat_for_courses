<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:20 AM
 */

namespace GOF\Behavioural\ResponsibilityChain;

use function strcmp;


/**
 * Class Anger
 *
 * @package GOF\Behavioural\ResponsibilityChain
 */
class Anger extends EmotionBase
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
        if (strcmp('anger', $stimulus) === 0) {
            return Anger::class;
        }

        $this->print_service($stimulus);

        return $this->emotion->activate($stimulus) ?? $this->notFound;
    }
}