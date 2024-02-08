<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task6</title>
</head>

<body>
    <?php
    $numbers = rand(100, 999);
    $number1 = floor($numbers / 100);
    $number2 = floor(($numbers % 100) / 10);
    $number3 = ($numbers % 10);

    $list = [$number1, $number2, $number3];
    rsort($list);
    echo "$list[0]$list[1]$list[2]<br>";

    echo "$numbers <br>";
    $sum = $number1 + $number2 + $number3;
    echo "$sum <br>";

    $revnumbers = $number3 * 100 + $number2 * 10 + $number1;

    echo $revnumbers;
    ?>
</body>

</html>