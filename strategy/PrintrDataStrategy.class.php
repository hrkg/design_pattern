<?php
require_once 'AbstractStrategy.class.php';

// signがprint_r()後は同じ..
class PrintrDataStrategy extends AbstractStrategy {
    protected function readData($name) {
        $fp = fopen($name,'r');
        $dummy = fgets($fp, 4096);
        // sign
        print_r($dummy);
    }
}
