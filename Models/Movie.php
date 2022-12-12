<?php
include_once __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $poster;
    public $year;
    public $duration;


    public $genre;


    function __construct($_title, $_poster, $_year, $_duration, Genre $_genre = null)
    {
        $this->title = $_title;
        $this->poster = $_poster;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;

    }

    public function getFilmData()
    {
        $data = [
            'title' => $this->title,
            'poster' => $this->poster,
            'year' => $this->year,
            'duration' => $this->duration,
            'genre' => $this->genre,
        ];
        foreach ($data as $item) {
            if (!is_object($item)) {
                echo $item . '<br>';
            } else {
                foreach ($item as $genre) {
                    foreach ($genre as $string)
                        echo $string . '<br>';
                }
            }
        }

    }

}