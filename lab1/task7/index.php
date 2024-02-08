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
    function foo($rows, $columns)
    {
        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                $Rand = [rand(0, 255), rand(0, 255), rand(0, 255)];
                echo "<td style='background-color: rgb($Rand[0], $Rand[1], $Rand[2]);'> </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    function cubes($count)
    {
        for ($i = 0; $i < $count; $i++) {

            $Rand = [rand(0, 100), rand(0, 100), rand(0, 1000), rand(0, 500)];
            echo "<div class='kvadrat' style='left: $Rand[2]px; top: $Rand[3]px; width: $Rand[0]px; height: $Rand[1]px;'></div>";
        }
    }
    foo(2, 4);

    cubes(5);
    ?>
</body>

</html>