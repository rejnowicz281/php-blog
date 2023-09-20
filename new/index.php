<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../stylesheets/global.css" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/post_form.css" rel="stylesheet" type="text/css" />
    <title>Nowy Post</title>
</head>

<body>
    <a href=".." class="powrot-link">Powróć</a>
    <div class="post-form-container">
        <form class="post-form" action="create.php" method="POST">
            <input class="post-tytul-input" type="text" name="tytul" placeholder="Tytuł...">
            <textarea class="post-tresc-input" name="tresc" placeholder="Treść..." cols="30" rows="10"
                spellcheck="false"></textarea>
            <input class="post-submit" type="submit" value="Dodaj Post">
        </form>
    </div>
</body>

</html>