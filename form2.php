<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.2</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Exercise 2<h2>
    
    <table>
        <?php
            echo "<tr>";
            $N = 14;
            for($i=65; $i < 65 + $N ; $i++) {  
                $letter = chr($i);  
                echo "<td>$letter</td>";
            }
            echo "</tr>";

            echo "<tr>";
            for($i=0; $i < $N; $i++) {
                echo "<td>$i</td>";
            }
            echo "</tr>"
        ?>
    </table>

</body>
</html>