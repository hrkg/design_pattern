<?php
require_once("Reader.class.php");

class CSVFileReader implements Reader {
    private $filename;
    private $handler;
    
    public function __construct($filename)  {
        if (!is_readable($filename)) {
            throw new Exception('file'.$filename.'is not readable!');
        }
        $this->filename = $filename;
    }

    public function read() {
        $this->handler = fopen($this->filename, "r");
    }

    public function display() {
        $column = 0;
        $tmp = "";
        while($data = fgetcsv($this->handler, 1000, ",")){
            print_r($data);
        }
    }
}
