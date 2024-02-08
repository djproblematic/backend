<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task5</title>
</head>

<body>
    <?php
    $char = 'a';
    // Перевіряємо, чи є символ літерою за допомогою функції ctype_alpha()
    if (ctype_alpha($char)) {
        // Введений символ в нижній регістр для порівняння з голосними
        $char = strtolower($char);

        // Конструкцію switch для визначення голосних і приголосних
        switch ($char) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                echo "{$char} - це голосна буква.";
                break;
            default:
                echo "{$char} - це приголосна буква.";
                break;
        }
    } else {
        echo "Введено не літеру.";
    }
    ?>

</body>

</html>