<?php
class Actors {
    //Attributi
    public $name;
    public $surname;
    public $age;

    //Costruttore
    function __construct($_name, $_surname) {
        $this->name = $_name;
        $this->surname = $_surname;
    }
}
?>