<?php
require_once 'autoload.php';
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="carrots">Введите количество моркови (кг):</label>
    <input name="carrots" id="carrots">
    <label for="potatoes">Введите количество картофеля (кг):</label>
    <input name="potatoes" id="potatoes">
    <label for="aubergines">Введите количество баклажан (кг):</label>
    <input name="aubergines" id="aubergines">
    <button type="submit">Посчитать цены</button>
</form>
<b>На морковь скидка при объеме больше 10 кг! На картофель и баклажаны - при любом объеме.</b><br>
<?php
$carrots = new Carrots('Морковь', '100');
if (!empty($_POST['carrots'])) {
    $carrots->showPriceAsList($_POST['carrots']);
}
$potatoes = new Potatoes('Картофель', '50');
if (!empty($_POST['potatoes'])) {
    $potatoes->showPriceAsList($_POST['potatoes']);
}
$aubergines = new Aubergines('Баклажаны', '200');
if (!empty($_POST['aubergines'])) {
    $aubergines->showPriceAsList($_POST['aubergines']);
}
?>
</body>
</html>

