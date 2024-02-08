<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task6</title>
</head>

<body>
    <?php
    // Генеруємо випадкове тризначне число
    $number = mt_rand(100, 999);

    // Знаходимо суму його цифр
    $digit_sum = array_sum(str_split($number));

    // Знаходимо число, отримане виписуванням в зворотному порядку цифр даного тризначного числа
    $reversed_number = strrev($number);

    // Переставляємо цифри так, щоб нове число виявилося найбільшим з можливих
    $sorted_digits = str_split($number);
    rsort($sorted_digits);
    $max_number = implode('', $sorted_digits);

    // Виводимо результати
    echo "1. Сума цифр числа {$number} дорівнює {$digit_sum}.<br>";
    echo "2. Число, отримане в зворотному порядку: {$reversed_number}.<br>";
    echo "3. Найбільше число, яке можна скласти з цифр числа {$number}, дорівнює {$max_number}.";
    ?>

</body>

</html>