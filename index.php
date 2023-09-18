<?php
require_once("connect.php");
$query = "SELECT * FROM posty";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Blog</title>
</head>

<body>
    <div class="container">
        <?php while ($row = mysqli_fetch_array($result)): ?>
            <?php
            $id = $row["id"];
            $tytul = $row["tytul"];
            $tresc = $row["tresc"];
            ?>
            <div class="post">
                <div class="post-id"> <?php echo $id ?> </div>
                <div class="post-tytul"> <?php echo $tytul ?> </div>
                <div class="post-tresc"> <?php echo $tresc ?> </div>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>