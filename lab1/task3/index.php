<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task3</title>
</head>

<body>
    <h2>Конвертер валют</h2>
    <?php
    $amount_in_uah = 1500;
    $exchange_rate = 29.41;
    $amount_in_usd = $amount_in_uah / $exchange_rate;
    echo "<p>{$amount_in_uah} грн. можна обміняти на " . number_format($amount_in_usd, 2) . " доларів</p>";
    ?>
</body>

</html>