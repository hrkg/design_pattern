<?php
require_once('Reader.class.php');
require_once('CSVFileReader.class.php');
require_once('XMLFileReader.class.php');

class ReaderFactory {
    public function create($filename){
        $reader = $this->createReader($filename);
        return $reader;
    }

    private function createReader($filename) {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if($poscsv !== false) {
            $csvReader = new CSVFileReader($filename);
            return $csvReader;
        }
        if($posxml !== false) {
            $xmlReader = new XMLFileReader($filename);
            return $xmlReader;
        }
        die('this filename is not supported:'.$filename);
    }
}
