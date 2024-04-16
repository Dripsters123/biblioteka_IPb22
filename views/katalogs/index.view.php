<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Ir pieejama</h1>
<ul>
    <?php foreach ($posts as $post) {
        if ($post["available"] == 1) { ?>
            <li>
                <a href="/show?id=<?= $post['id'] ?>">
                    <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
                </a>
                <form method="POST" action="/remove">
                    <button name="id" value="<?= $post['id'] ?>">Delete</button>
                </form>
            </li>
    <?php }
    } ?>
</ul>

<h1>Nav pieejama</h1>
<ul>
    <?php foreach ($posts as $post) {
        if ($post["available"] != 1) { ?>
            <li>
                <a href="/show?id=<?= $post['id'] ?>">
                    <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
                </a>
                <form method="POST" action="/remove">
                    <button name="id" value="<?= $post['id'] ?>">Delete</button>
                </form>
            </li>
    <?php }
    } ?>
</ul>

<?php require "views/components/footer.php" ?>

