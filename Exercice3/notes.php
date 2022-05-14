<?php
session_start();

$note = ['title' => $_POST['title'], 'content' => $_POST['content']];
if($note['title'] || $note['content']) {
    $_SESSION['notes'][] = $note;
}
$notes = $_SESSION['notes'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link rel="stylesheet" href="notes.css ">
</head>
<body>
<a href="index.php" style="align-self: flex-start; margin: 36px" >Home page</a>
<div class="notes">
    <?php foreach ($notes as $item) { ?>

        <div class="note">
            <h2><?php echo $item['title']; ?></h2>
            <p>
                <?php echo $item['content']?>
            </p>
        </div>

    <?php } ?>
</div>

</body>
</html>
