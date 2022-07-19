<?php
require_once dirname(__FILE__)."/../interface/OutputInterface.php";

class SerializedArrayOutput implements OutputInterface {
    public function load($arrayOfData) {
        return serialize($arrayOfData);
    }
}