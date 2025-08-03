<?php
class Movie
{
    public $name;
    public $director;
    public $actor;
    public $year;

    function __constructor($_name, $_director, $_actor, $_year)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->actor = $_actor;
        $this->year = $_year;
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