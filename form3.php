<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.3</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 400px;
        height: 40px;
        text-align: center;
        }
    </style>
</head>
<body>
    <h2>Exercise 3<h2>
    
    <?php
        echo "<table>";
        $M = 5;
        $N = 6;
        for($i=0; $i < $M; $i++) {
            echo "<tr>";
            for($j=$i; $j < $i + $N; $j++) {
                echo "\t\t<td>$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

</body>
</html>