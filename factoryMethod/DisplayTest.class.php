<?php
require_once('ReaderFactory.class.php');
$filename = 'PO.csv';
$factory = new ReaderFactory();
$data = $factory->create($filename);
$data->read();
$data->display();
?>
