<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task4</title>
</head>

<body>
    <?php
    $month_number = 5;

    if ($month_number >= 1 && $month_number <= 12) {
        if ($month_number >= 3 && $month_number <= 5) {
            echo "Весна";
        } elseif ($month_number >= 6 && $month_number <= 8) {
            echo "Літо";
        } elseif ($month_number >= 9 && $month_number <= 11) {
            echo "Осінь";
        } else {
            echo "Зима";
        }
    } else {
        echo "Неправильний номер місяця. Введіть число від 1 до 12.";
    }
    ?>
</body>

</html>