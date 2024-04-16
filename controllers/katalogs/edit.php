<?php
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST["nosaukums"], min: 1, max: 255)) {
        $errors["nosaukums"] = "Title cannot be empty or too long";
    }

    if (empty($errors)) {
        $query = "UPDATE katalogs SET nosaukums = :nosaukums,autors = :autors,izdosana = :izdosana,available = :available
                  WHERE id = :id;";

        $params = [
            ":nosaukums" => $_POST["nosaukums"],
            ":autors" => $_POST["autors"],
            ":izdosana" => $_POST["izdosana"],
            ":available" => $_POST["available"],
            ":id" => $_POST["id"]
        ];
        $db->execute($query, $params);

        header("Location: /");
        die();
    }
}

$query = "SELECT * FROM katalogs WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Edit";

require "views/katalogs/edit.view.php";