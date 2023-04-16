<?php

class Movie{
    public $title;
    public $director;
    public $year;


    Public function __construct($title,$director,$year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function showDetails(){
        echo "Titolo:" . $this->title . "<br>";
        echo "Regista:" . $this->director . "<br>";
        echo "Anno:" . $this->year . "<br><br>";
    }
}

$movie1 = new Movie("Jurassic Park", "Steven Spielberg", 1993);
$movie2 = new Movie("La Haine", "Mathieu Kassovitz",1995);

$movie1->showDetails();
$movie2->showDetails();