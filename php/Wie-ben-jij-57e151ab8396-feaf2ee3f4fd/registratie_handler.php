<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Succes</title>
    </head>
    <body>
        <center>
            <h1>Je bent nu aangemeld voor onze nieuwsbrief</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $email = $_POST["email"];
                $age = $_POST["age"];
                echo "<p>Jouw username: $username</p>";
                echo "<p>Jouw email: $email</p>";
                echo "<p>Jouw leeftijd: $age</p>";
            }
            ?>
        </center>
    </body>
    </html>