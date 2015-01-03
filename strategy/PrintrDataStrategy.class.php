<?php
require_once 'Strategy.class.php';

class PrintrDataStrategy extends Strategy {
    protected function readData($name) {
        $fp = fopen($name,'r');
        $dummy = fgets($fp, 4096);
        print_r($dummy);
    }
}
