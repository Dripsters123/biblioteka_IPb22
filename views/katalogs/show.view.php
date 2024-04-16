<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1><?= htmlspecialchars($post["nosaukums"] ." ". $post["autors"] ." ". $post["izdosana"] . " " . $post["available"]) ?></h1>


<a href="/edit?id=<?= $post["id"] ?>">Edit</a>


<?php require "views/components/footer.php" ?>