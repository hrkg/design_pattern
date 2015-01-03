<?php
require_once 'Strategy.class.php';

class VardumpDataStrategy extends Strategy {
    protected function readData($name) {
        $fp = fopen($name,'r');
        $dummy = fgets($fp, 4096);
        var_dump($dummy);
    }
}
