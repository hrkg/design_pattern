<?php
require_once 'Strategy.class.php';

class EchoDataStrategy extends Strategy {
    protected function readData($name) {
        $fp = fopen($name,'r');
        $dummy = fgets($fp, 4096);
        echo($dummy);
    }
}
