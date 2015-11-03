<?php
require_once 'AbstractStrategy.class.php';

// signがecho後は同じ..
class EchoDataStrategy extends AbstractStrategy {
    protected function readData($name) {
        $fp = fopen($name,'r');
        $dummy = fgets($fp, 4096);
        // sign
        echo($dummy);
    }
}
