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


class Movie
{
    public $name;
    public $director;
    public $actor;
    public $year;
    public $genre;

    function __construct($_name, $_director, $_actor, $_year, Genre $_genre)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->actor = $_actor;
        $this->year = $_year;
        $this->genre = $_genre;
    }
    public function getYear($year)
    {
        if ($year >= 2010) {
            echo "Il film è recente";
        } else {
            echo "Il film non è recente";
        }
    }
}

$inception = new Movie("Inception", "Christopher Nolan", "Leonardo di Caprio", 2010, new Genre("sci-fi", 16));
$inception->getYear(2010);
echo "<pre>";
var_dump($inception);
echo "</pre>";

$thePrestige = new Movie("The prestige", "Christopher Nolan", "Christian Bale", 2006, new Genre("thriller", 16));
$thePrestige->getYear(2006);
echo "<pre>";
var_dump($thePrestige);
echo "</pre>";





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>