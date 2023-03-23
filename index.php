<?php

class Movie{
  public $title;
  public $director;
  public $year;
  public $poster;
  public $genre;

  public function __construct(
    string $_title,
    int $_year,
    string $_poster,
    string $_genre,
    string $_director = "unknown"
  ){
    $this->setTitle($_title);
    $this->setDirector($_director);
    $this->setYear($_year);
    $this->setPoster($_poster);
    $this->setGenre($_genre);
  }

  public function setTitle($title){
    if(!is_string($title)|| $title === "") return false;
    $this->title = $title;
  }

  public function setPoster($poster){
    if(!is_string($poster)|| $poster === "") return false;
    $this->poster = $poster;
  }

  public function setGenre($genre){
    if(!is_string($genre)|| $genre === "") return false;
    $this->genre = $genre;
  }

  public function setYear($year){
    if(!is_numeric($year)|| $year < 1850 || $year > date("Y")) return false;
    $this->year = $year;
  }

  public function setDirector($director){
    if(!is_string($director)|| $director === "") return false;
    $this->director = $director;
  }
}

$movies = [
  new Movie("Star Wars", 1977, "https://www.medieval-shop.co.uk/img/1366_2000.jpeg", "Sci-Fi", "Geaorge Lucas"),
  new Movie("Ritorno al Futuro", 1985, "https://www.radiopico.it/wp-content/uploads/2020/10/ritorno-al-futuro.jpg", "Sci-Fi", "Geaorge Futuro")
];

foreach($movies as $movie){
  var_dump($movie);
}