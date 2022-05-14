<?php
        session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link href="stylesheet.css" rel="stylesheet">
</head>
<body>
<div class="form">
    <form action="notes.php" method="post">
        <label for="title"></label>
        <input type="text" name="title" id="title" placeholder="Title">
        <label for="content"></label>
        <textarea type="text" id="content" name="content" placeholder="Note"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
<div class="links">
    <a href="notes.php">View submitted notes</a>
</div>

</body>
</html>
