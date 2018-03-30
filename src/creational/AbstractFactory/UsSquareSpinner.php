<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 11:21 PM
 */

namespace GOF\Creational\AbstractFactory;


/**
 * Class UsSquareSpinner
 *
 * @package GOF\Creational\AbstractFactory
 */
class UsSquareSpinner extends AbstractSquareSpinner
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
	 * UsSquareSpinner constructor.
	 */
    function __construct()
    {
        $this->model = 'NewUS';
        $this->inventor = 'Sam';
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