<?php
// 共通処理
abstract class AbstractStrategy {

    private $name;
    
    public function  __construct($name) {
        $this->name = $name;
    }
    
    public function displayData() {
        if(!is_readable($this->getName())) {
            throw new Exception('name' . $this->getName() . 'is not readabel!');
        }
        $this->readData($this->getName());
    }

    public function getName() {
        return $this->name;
    }

    protected abstract function readData($name) {
    }
}
