<?php
require_once 'AbstractStrategy.class.php';

// signがvar_dump()後は同じ
class VardumpDataStrategy extends AbstractStrategy {
    protected function readData($name) {
        $fp = fopen($name,'r');
        $dummy = fgets($fp, 4096);
        // sign
        var_dump($dummy);
    }
}
