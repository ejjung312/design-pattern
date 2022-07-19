<?php
class SomeClient
{
    private $output;

    public function setOutput(OutputInterface $outputType) {
        $this->output = $outputType;
    }

    public function loadOutput($arrayOfData)
    {
        return $this->output->load($arrayOfData);
    }
}