<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 10:33 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class ChineseCircleSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
class ChineseCircleSpinner extends AbstractCircleSpinner
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
	 * ChineseCircleSpinner constructor.
	 */
    function __construct()
    {
        $this->model = 'Chinese';
        $this->inventor = 'Yan Xuyun';
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