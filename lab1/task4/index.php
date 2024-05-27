<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task4</title>
</head>

<body>
    <?php
    $month = 3;
    if ($month == 1 || $month == 2 || $month == 12) {
        echo "Зима";
    } else if ($month >= 3 && $month <= 5) {
        echo "Весна";
    } else if ($month >= 6 && $month <= 8) {
        echo "Літо";
    } else if ($month >= 9 && $month <= 11) {
        echo "Осінь";
    }
    ?>
</body>

</html>