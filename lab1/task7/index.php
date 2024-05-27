<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Task7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    function createTable($rows, $columns)
    {
        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                $rand1 = rand(0, 255);
                $rand2 = rand(0, 255);
                $rand3 = rand(0, 255);
                echo "<td style='background-color: rgb($rand1, $rand2, $rand3);'> </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    function randomPlaceCubes($value)
    {
        for ($i = 0; $i < $value; $i++) {

            $x = rand(500, 1500);
            $y = rand(500, 700);
            $width = rand(50, 100);
            $height = rand(50, 100);
            echo "<div class='square' style='left: $x" . "px" . "; top: $y" . "px" . "; width: $width" . "px" . "; height: $height" . "px" . ";'></div>";
        }
    }
    createTable(2, 2);

    randomPlaceCubes(15);
    ?>
</body>

</html>