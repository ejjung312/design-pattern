<?php
require_once dirname(__FILE__)."/../interface/OutputInterface.php";

class ArrayOutput implements OutputInterface {
    public function load($arrayOfData) {
        return $arrayOfData;
    }
}