<?php
class Context {
                
    private $strategy;

    public function __construct(Strategy $strategy) {
        $this->strategy = $strategy;
    } 

    public function getDisplayData() {
        return $this->strategy->getData();
    }
