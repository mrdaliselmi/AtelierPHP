<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sondage</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; flex-direction: column">
<h1>Que pensez vous du cour PHP, Le vote sera clos dans 2 minutes</h1>
<form action="validateVote.php" method="post">
    <label for="bon">Bon</label>
    <input id="bon" type="radio" name="vote" value="Bon">
    <label for="moyen">Moyen</label>
    <input id="moyen" type="radio" name="vote" value="Moyen">
    <label for="mauvais">Mauvais</label>
    <input id="mauvais" type="radio" name="vote" value="Mauvais">
    <br>
    <input name="submit" type="submit" value="submit">
</form>
</body>
</html>