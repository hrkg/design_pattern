<?php
require_once 'SingletonSample.class.php';
//$instance1 = new SingletonSample();
$instance2 = SingletonSample::getInstance();
$instance3 = SingletonSample::getInstance();

//echo $instance1->getID().PHP_EOL;
echo PHP_EOL;
echo $instance2->getID().PHP_EOL;
echo $instance3->getID().PHP_EOL;
