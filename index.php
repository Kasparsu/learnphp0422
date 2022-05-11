<?php
$age = $_GET['age'] ?? 'Unknown';
$name = $_GET['name'] ?? 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="name" placeholder="Sisesta nimi">
        <input type="number" name="age" placeholder="Sisesta vanus">
        <input type="submit" value="Saada">
    </form>
    <h1>Tere minu nimi on <?=$name?> ja ma olen <?=$age?> aastat vana</h1>
</body>
</html>