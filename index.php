<?php
require_once("connect.php");
$query = "SELECT * FROM posty";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheets/global.css" rel="stylesheet" type="text/css" />
    <link href="stylesheets/posts.css" rel="stylesheet" type="text/css" />
    <title>Blog</title>
</head>

<body>
    <a href="new" class="new-post-link">Nowy</a>
    <div class="posts-container">
        <?php while ($row = mysqli_fetch_array($result)): ?>
            <?php
            $id = $row["id"];
            $tytul = $row["tytul"];
            $tresc = $row["tresc"];
            ?>
            <div class="post-wrapper">
                <a href="edit?id=<?php echo $id ?>&tytul=<?php echo $tytul ?>&tresc=<?php echo $tresc ?>"
                    class="edit-post-link">
                    <svg viewBox="0 0 24 24" width="30" height="30" xmlns=" http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.56078 20.2501L20.5608 8.25011L15.7501 3.43945L3.75012 15.4395V20.2501H8.56078ZM15.7501 5.56077L18.4395 8.25011L16.5001 10.1895L13.8108 7.50013L15.7501 5.56077ZM12.7501 8.56079L15.4395 11.2501L7.93946 18.7501H5.25012L5.25012 16.0608L12.7501 8.56079Z"
                                fill="white"></path>
                        </g>
                    </svg>
                </a>
                <form action="delete/delete.php" method="post" class="post-delete-form">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button class="post-delete-button" type="submit">⨉</button>
                </form>
                <a href="post?id=<?php echo $id ?>" class="post">
                    <div class="post-id"> <?php echo $id ?> </div>
                    <div class="post-tytul"> <?php echo $tytul ?> </div>
                    <div class="post-tresc"> <?php echo $tresc ?> </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>