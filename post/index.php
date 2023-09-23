<?php
require_once("../connect.php");
$id = $_GET["id"];

$post_query = "SELECT * FROM posty WHERE id = $id";
$comments_query = "SELECT * FROM komentarze WHERE post_id = $id";

$post_result = mysqli_query($connection, $post_query);
$comments_result = mysqli_query($connection, $comments_query);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../stylesheets/global.css" rel="stylesheet" type="text/css" />
    <link href="../stylesheets/post.css" rel="stylesheet" type="text/css" />
    <title>Post <?php echo $id ?></title>
</head>

<body>
    <a href=".." class="powrot-link">Powróć</a>
    <a href="../new" class="new-post-link">Nowy</a>
    <div class="post-container">
        <?php
        $post_info = mysqli_fetch_array($post_result);
        $id = $post_info["id"];
        $tytul = $post_info["tytul"];
        $tresc = $post_info["tresc"];
        ?>
        <div class="post">
            <a href="../edit?id=<?php echo $id ?>&tytul=<?php echo $tytul ?>&tresc=<?php echo $tresc ?>"
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
            <form action="../delete/delete.php" method="post" class="post-delete-form">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button class="post-delete-button" type="submit">⨉</button>
            </form>
            <div class="post-tytul"> <?php echo $tytul ?> </div>
            <div class="post-tresc"> <?php echo $tresc ?> </div>
            <?php if (mysqli_num_rows($comments_result)) : ?>
            <div class="post-comments-container">
                <?php while ($row = mysqli_fetch_array($comments_result)) : ?>
                <div class="post-comment">
                    <div class="post-comment-autor">
                        <?php echo $row["autor"] ?>
                    </div>
                    <div class="post-comment-tresc">
                        <?php echo $row["tresc"] ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
</body>

</html>