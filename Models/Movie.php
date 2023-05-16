<?php
class Movie {
    //Attributi
    public $title;
    public $year;
    public $duration;
    public $actor;

    //Costruttore
    function __construct($_title, $_year, $_actor) {
        $this->title = $_title;
        $this->year = $_year;
        $this->actor = $_actor;
    }

    //Metodi
    public function Start() {
        echo "Inizio film";
    }
}
?>