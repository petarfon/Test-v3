<?php

class Prijava
{
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id, $predmet = null, $katedra = null, $sala = null, $datum = null)
    {
        $this->id = $id;
        $this->predmet = $predmet;
        $this->katedra = $katedra;
        $this->sala = $sala;
        $this->datum = $datum;
    }

    public static function readAll(mysqli $conn)
    {
        $q = "SELECT * FROM prijave";
        return $conn->query($q);
    }

    public function deleteById(int $id, mysqli $conn)
    {
        $q = "DELETE FROM prijave WHERE id=$id";
        return $conn->query($q);
    }

    public function addPrijava(mysqli $conn, Prijava $p)
    {
        $q = "INSERT INTO prijave (predmet, katedra, sala, datum) VALUES ('$p->predmet', '$p->katedra', '$p->sala', '$p->datum')";
        return $conn->query($q);
    }

    public function readOne(int $id, mysqli $conn)
    {
        $q = "SELECT * FROM prijave WHERE id=$id";
    }
}
