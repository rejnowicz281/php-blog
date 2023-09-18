<?php
require_once("../connect.php");

if (isset($_POST["tytul"]) && isset($_POST["tresc"])) {
    $tytul = $_POST["tytul"];
    $tresc = $_POST["tresc"];

    $query = "INSERT INTO posty (tytul, tresc) VALUES ('$tytul', '$tresc')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../");
        exit();
    }
}
?>