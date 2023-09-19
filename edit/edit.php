<?php
require_once("../connect.php");

if (isset($_POST["id"]) && isset($_POST["tytul"]) && isset($_POST["tresc"])) {
    $id = $_POST["id"];
    $tytul = $_POST["tytul"]; // new value
    $tresc = $_POST["tresc"]; // new value

    $query = "UPDATE posty SET tytul = '$tytul', tresc = '$tresc' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../");
        exit();
    }
}
?>