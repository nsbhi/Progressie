<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-mail validatie<title>
</head>

<body>

    <form action="succes.php" method="POST">
        Voer een e-mail in<br>
        Meld je aan voor de nieuwsbrief
        <input type="text" name="email" placeholder="Voer uw e-mailadres in:">
        <input type="submit" value="verzenden">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-mailadres is geldig!";
        } else {
            echo "E-mailadres is ongeldig!";
        }
    }
    ?>
</body>

</html> 