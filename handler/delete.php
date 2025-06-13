<?php

// require "dbBroker.php";
// require "model/prijava.php";

if (isset($_POST['submit']) && $_POST['submit'] == 'Obrisi') {
    $p = new Prijava($_POST['id_predmeta']);
    $r = $p->deleteById($_POST['id_predmeta'], $conn);
}
