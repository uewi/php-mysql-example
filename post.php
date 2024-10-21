<?php
require './database.php';
global $dbh;

$id = $_GET['id'] ?? null;

$stmt = $dbh->prepare('SELECT * FROM posts WHERE id =:id');

$stmt->execute(['id' => $id]);

$post = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP</title>
</head>
<body>
<h1>PHP</h1>
<div>
    <h2><?= $post['title'] ?></h2>
    <p><?= $post['content'] ?></p>
</div>
    <h2><a href="index.php">Index</a></h2>
</div>
</body>
</html>