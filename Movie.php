<?php

  class Movie {

    public $title;
    public $year;
    public $genre;
    private $recommended = "null";
    static $counter = 0;


    // PUBLIC METHODS
    public function __construct($_title, $_year, $_genre = 0)
    {
      $this->title = $_title;
      $this->year = $_year;
      $this->genre = $_genre;
      $this->setRecommended();
      self::$counter++;
    }

    public function getRecommended() {
      return $this->recommended;
    }


    // PRIVATE METHODS
    private function setRecommended()
    {
      if ($this->genre == "Horror/Action") {
        $this->recommended = "yes";
      } else if ($this->genre != "Horror/Action") {
        $this->recommended = "no";
      } 
    }


    // STATIC METHODS
    static function getCounter() 
    {
      return self::$counter;
    }

  }