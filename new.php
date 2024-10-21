<?php
require './database.php';
global $dbh;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $title = $_POST['title'];

    $content = $_POST['content'];

    $stmt = $dbh->prepare('INSERT INTO posts (title, content) VALUES (:title, :content)');

    $stmt->execute(['title' => $title, 'content' => $content]);

    header('Location: index.php');
    
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PHP</title>
</head>
<body>
<h1>New Post</h1>
<div>
    <form method="post">
        <div>
            <label for="title">title</label>
            <input id="title" name="title" type="text">
        </div>
        <div>
            <label for="content">content</label>
            <textarea id="content" name="content"></textarea>
        </div>
        <button name="submit" type="submit">Send</button>
    </form>
</div>
<div>
    <h2><a href="index.php">Index</a></h2>
</div>
</body>
</html>