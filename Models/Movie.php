<?php
class Movie implements IteratorAggregate
{
    public $name;
    public $director;
    public $actor;
    public $year;
    public $genres = [];

    use Plot;


    function __construct($_name, $_director, $_actor, $_year)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->actor = $_actor;
        $this->year = $_year;
    }
    public function getYear($_year)
    {
        if ($_year >= 2010) {
            echo "Il film è recente";
        } else {
            echo "Il film non è recente";
        }
    }

    public function setGenre(Genre $_genre)
    {
        $this->genres[] = $_genre;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            'name' => $this->name,
            'director' => $this->director,
            'actor' => $this->actor,
            'year' => $this->year,
            'genres' => $this->genres,
            'description' => $this->description,
        ]);
    }
}
