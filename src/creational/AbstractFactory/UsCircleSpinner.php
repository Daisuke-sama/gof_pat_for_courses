<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 11:15 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class UsCircleSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
class UsCircleSpinner extends AbstractCircleSpinner
{
	/**
	 * @var string
	 */
    private $model;
	/**
	 * @var string
	 */
    private $inventor;

	/**
	 * @var string
	 */
    private static $oddOrEven = 'odd';

	/**
	 * UsCircleSpinner constructor.
	 */
    function __construct()
    {
        $this->model    = 'United States';

        if (strcmp(self::$oddOrEven, 'odd') === 0) {
            $this->inventor = 'Sam';
        } else {
            $this->inventor = 'Gregory';
        }
    }

	/**
	 * @return string
	 */
    function getModel()
    {
        return $this->model;
    }

	/**
	 * @return string
	 */
    function getInventor()
    {
        return $this->inventor;
    }
}