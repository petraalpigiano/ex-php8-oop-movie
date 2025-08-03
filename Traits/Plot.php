<?php
trait Plot
{
    public $description;

    public function getDescription($_description)
    {
        echo "Questa è la trama: " . $_description;
        $this->description = $_description;
    }
}
