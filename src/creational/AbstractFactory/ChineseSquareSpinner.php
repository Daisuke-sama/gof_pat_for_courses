<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 10:59 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class ChineseSquareSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
class ChineseSquareSpinner extends AbstractSquareSpinner
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
	 * ChineseSquareSpinner constructor.
	 */
    function __construct()
    {
        $this->model = 'ChineseNew';
        $this->inventor = 'Suu Pei';
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