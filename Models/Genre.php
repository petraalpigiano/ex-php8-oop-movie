<?php
class Genre
{
    public $name;
    public $minAge;

    function __construct($_name, $_minAge)
    {
        $this->name = $_name;
        $this->minAge = $_minAge;
    }
}
