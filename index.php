<?php
require './database.php';
global $dbh;

$stmt = $dbh->prepare('SELECT * FROM posts');

$stmt->execute();

$posts = $stmt->fetchAll();
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
<?php foreach ($posts as $post): ?>
    <div>
        <h2><a href="post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
        <p><?= $post['content'] ?></p>
    </div>
<?php endforeach; ?>
<div>
    <a href="new.php">New Post</a>
</div>
</body>
</html>