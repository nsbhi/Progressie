<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schaakbord</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .wit {
            background-color: white;
        }
        .zwart {
            background-color: black;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";

            for ($col = 1; $col <= 8; $col++) {
                $class = ($row + $col) % 2 == 0 ? "wit" : "zwart";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>