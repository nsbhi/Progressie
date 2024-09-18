<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validatie</title>
</head>

    <body>
    <h1>bit academy - form</h1> 

    <form method="verstuur">
    <input type="text" name="email" placeholder="Voor hier je e-mail in!">
    <input type="accepteer" value="verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-mail is geldig";
        } else {
            echo "E-mail is ongeldig";
        }
    }
    ?>
    </body>

</html>