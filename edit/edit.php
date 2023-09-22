<?php
require_once("../connect.php");

if (isset($_POST["id"]) && isset($_POST["tytul"]) && isset($_POST["tresc"])) {
    $id = $_POST["id"];
    $initial_tytul = $_POST["tytul"];
    $initial_tresc = $_POST["tresc"];
    $tytul  = htmlentities($initial_tytul, ENT_QUOTES, "UTF-8");
    $tresc = htmlentities($initial_tresc, ENT_QUOTES, "UTF-8");

    $query = "UPDATE posty SET tytul = '$tytul', tresc = '$tresc' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../");
        exit();
    }
}
