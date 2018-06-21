<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 20-Jun-18
 * Time: 1:19 AM
 */

namespace GOF\Behavioural\ResponsibilityChain;

use const PHP_EOL;
use ReflectionClass;


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
    protected $emotion;

    /**
     * @var string
     */
    protected $notFound = 'Emotion was not found.';

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
     * Prints service message if the class is skipped in the chain.
     *
     * @param string $comparison
     *
     * @throws \ReflectionException
     */
    protected function print_service(string $comparison) {
        $reflection = new ReflectionClass($this);
        print 'Trying to activate ' . $reflection->getName() . ', but the ' . $comparison . ' was got.' . PHP_EOL;
    }

    /**
     * The emotion activator.
     *
     * @param string $stimulus The matter to splash the emotion.
     *
     * @return mixed
     */
    abstract public function activate(string $stimulus): string;
}