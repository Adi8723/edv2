<?php
class Seminar
{
    private $id;
    private $titel;
    private $beschreibung;
    private $price;




    function __construct($id, $titel, $beschreibung, $price)
    {
        $this->id = $id;
        $this->titel = $titel;
        $this->beschreibung = ($beschreibung < 0
            || $beschreibung >
            $this->titel
        );
        $this->price = $price;
    }

    function get_id()
    {
        return $this->id;
    }
    function set_id($id)
    {
        $this->id = $id;
    }
    function get_titel()
    {
        return $this->titel;
    }
    function set_titel($titel)
    {
        $this->titel = $titel;
    }
    function set_beschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }
    function get_beschreibung()
    {
        return $this->beschreibung;
    }
    function set_price($price)
    {
        $this->price = $price;
    }
    function get_price()
    {
        return $this->price;
    }


    function select(){
        $this->beschreibung = 1;
    }

    function update(){
        $this->beschreibung = 0;
    }
    function delete(){
        $this->beschreibung = 0;
    }
    function insert(){
        $this->beschreibung = 1;
    }
}
