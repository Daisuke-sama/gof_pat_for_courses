<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:19 AM
 */

namespace GOF\Behavioural\ResponsibilityChain;


/**
 * Class EmotionBase
 *
 * @package GOF\Behavioural\ResponsibilityChain
 */
abstract class EmotionBase
{
    /**
     * @var EmotionBase
     */
    private $emotion;

    /**
     * Sets up another emotion to proceed after execution of itself.
     *
     * @param EmotionBase $emotion The next emotion.
     */
    public function chainWith(EmotionBase $emotion)
    {
        $this->emotion = $emotion;
    }

    /**
     * The emotion activator.
     *
     * @param string $stimulus The matter to splash the emotion.
     *
     * @return mixed
     */
    abstract public function activate(string $stimulus);
}