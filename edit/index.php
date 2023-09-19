<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <title>Edytuj Post</title>
</head>

<body>
    <a href=".." class="powrot-link">Powróć</a>
    <div class="post-form-container">
        <?php
        if (isset($_GET["id"]) && isset($_GET["tytul"]) && isset($_GET["tresc"])) {
            $id = $_GET["id"];
            $tytul = $_GET["tytul"];
            $tresc = $_GET["tresc"];
        }
        ?>
        <form class="post-form" action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input class="post-tytul-input" type="text" name="tytul" placeholder="Tytuł..."
                value="<?php echo $tytul ?>">
            <textarea class="post-tresc-input" name="tresc" placeholder="Treść..." cols="30" rows="10"
                spellcheck="false"><?php echo $tresc ?></textarea>
            <input class="post-submit" type="submit" value="Edytuj Post">
        </form>
    </div>
</body>

</html>