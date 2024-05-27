<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task5</title>
</head>

<body>
    <?php
    $symbol = "а";
    switch ($symbol) {
        case 'а':
        case 'у':
        case 'ї':
        case 'і':
        case 'о':
        case 'є':
        case 'я':
        case 'и':
        case 'ю':
        case 'е':
            echo "<b>$symbol</b> - це голосна буква";
            break;
        default:
            echo "<b>$symbol</b> - це приголосна буква";
            break;
    }
    ?>
</body>

</html>