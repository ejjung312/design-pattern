<?php
require_once dirname(__FILE__)."/../interface/OutputInterface.php";

class JsonStringOutput implements OutputInterface {
    public function load($arrayOfData) {
        return json_encode($arrayOfData);
    }
}