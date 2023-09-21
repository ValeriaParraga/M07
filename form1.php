<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.1</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php //Open PHP code
        echo "<h2>Exercise 1<h2>";

        echo "Hello, how are you?<br>";

        echo "<br>"; //Space
        
        echo "<table>"; //Open the table
        echo "<tr>"; //Open the row
        $N = 7; 
        for($i=0; $i<$N; $i++) { //Iterate $N times
            echo "<td>$i</td>"; //Cells
        }
        echo " </tr>"; //Close the row
        echo "</table>"; //Close the table
    ?>
    
</body>
</html>
