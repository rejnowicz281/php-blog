<?php
require_once("../connect.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $query = "DELETE FROM posty WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: ../");
        exit();
    }
}
?>