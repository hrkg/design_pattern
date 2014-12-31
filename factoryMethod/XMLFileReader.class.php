<?php
require_once("Reader.class.php");

class XMLFileReader implements Reader {
    private $filename;
    private $handler;

    public function __construct($filename){
        if(!is_readable($filename)) {
            throw new Exception('file'.$filename.'is not readable!');
        }
        $this->filename = $filename;
    }

    public function read() {
        $this->handler = simplexml_load_file($this->filename);
    }

    private function convert($str) {
        return mb_convert_encoding($str, mb_internal_encoding(), "auto");
    }

    public function display() {
        print_r($this->handler->artist);
    }
}
