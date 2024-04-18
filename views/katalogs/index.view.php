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
      <form method="POST" action="/borrow">
        <button name="id" value="<?= $post['id'] ?>">Borrow</button>
      </form>
    </li>
<?php }
} ?>

<h1>Nav pieejama</h1>
<ul>
   <?php foreach ($posts as $post) {
  if ($post["available"] == 0) { ?>
    <li>
      <a href="/show?id=<?= $post['id'] ?>">
        <?= $post["nosaukums"] . " / " . $post["autors"] . " / " . $post["izdosana"] ?>
      </a>
      <form method="POST" action="/remove">
        <button name="id" value="<?= $post['id'] ?>">Delete</button>
      </form>
      <form method="POST" action="/return">
        <button name="id" value="<?= $post['id'] ?>">Return</button>
      </form>
    </li>
<?php }
} ?>

<?php require "views/components/footer.php" ?>