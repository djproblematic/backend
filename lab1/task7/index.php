<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task7</title>
</head>

<body>
    <?php
    // Функція для виведення таблиці з комірками різного кольору
    function printColorTable($rows, $cols)
    {
        echo '<table border="1">';
        for ($i = 0; $i < $rows; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $cols; $j++) {
                // Генеруємо випадковий колір в форматі RGB
                $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                echo "<td style='background-color: {$color};'></td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    // Викликаємо функцію для виведення таблиці з комірками різного кольору (наприклад, 5x5)
    printColorTable(50, 50);

    // Функція для виведення квадратів на чорному тлі
    function printRandomSquares($n)
    {
        echo '<div style="position: relative; width: 500px; height: 500px; background-color: black;">';
        for ($i = 0; $i < $n; $i++) {
            // Генеруємо випадкові координати і розмір квадратів
            $size = mt_rand(10, 100);
            $left = mt_rand(0, 400);
            $top = mt_rand(0, 400);
            // Генеруємо випадковий колір для квадрата
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<div style='position: absolute; left: {$left}px; top: {$top}px; width: {$size}px; height: {$size}px; background-color: {$color};'></div>";
        }
        echo '</div>';
    }

    // Викликаємо функцію для виведення квадратів на чорному тлі
    printRandomSquares(5); // Наприклад, 5 червоних квадратів
    ?>

</body>

</html>