<?php
/**
 * Created by PhpStorm.
 * User: Pavel_Burylichau
 * Date: 24-Jan-18
 * Time: 11:24 PM
 */

namespace GOF\Creational\AbstractFactory;

require_once 'vendor/autoload.php';

function runConcreteFactory(AbstractSpinnerFactory $factoryInstance)
{
    $circleSpinner = $factoryInstance->makeCircleSpinner();
    print $circleSpinner->getModel() . ' / ';
    print $circleSpinner->getInventor() . ' / ';

    $squareSpinner = $factoryInstance->makeSquareSpinner();
    print $squareSpinner->getModel() . ' / ';
    print $squareSpinner->getInventor() . ' +++ ';
}

$spinnerFactory = new ChineseSpinnerFactory();
$spinnerFactory->printContext();
runConcreteFactory($spinnerFactory);

$spinnerFactory = new UsSpinnerFactory();
$spinnerFactory->printContext();
runConcreteFactory($spinnerFactory);