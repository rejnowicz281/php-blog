<?php
require_once("../connect.php");

if (isset($_POST["tytul"]) && isset($_POST["tresc"])) {
    $initial_tytul = $_POST["tytul"];
    $initial_tresc = $_POST["tresc"];
    $tytul  = htmlentities($initial_tytul, ENT_QUOTES, "UTF-8");
    $tresc = htmlentities($initial_tresc, ENT_QUOTES, "UTF-8");

    $query = "INSERT INTO posty (tytul, tresc) VALUES ('$tytul', '$tresc')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../");
        exit();
    }
}
