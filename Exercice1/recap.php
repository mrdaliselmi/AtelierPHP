<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>recap</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="flex-direction: column">

<?php
$id = uniqid();
$file_name_cmps = explode('.',$_FILES['CIN']['name']);
$file_extension = strtolower(end($file_name_cmps));
$target_dir = "./Uploads/";
$target_file = $target_dir . $id . '.'.$file_extension;
$tempname = $_FILES['CIN']["tmp_name"];

$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$nbSandwich = intval(htmlspecialchars($_POST['nbSandwich']));

$prix = $nbSandwich * 4;
if ($nbSandwich >= 10)
    $prix = $prix * 0.9;

move_uploaded_file($tempname, $target_file);

?>

<h3>Bonjour <?= $prenom ?> <?= $nom ?></h3>

<h3>Prix totale : </h3>
<b><?= $prix ?> DT</b>

<h1>Votre CIN : </h1>
<img src="Uploads/<?=$id . '.'. $file_extension?>">

</body>
</html>
