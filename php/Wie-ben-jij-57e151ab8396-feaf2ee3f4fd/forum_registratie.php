<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Forum registratie</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>Het opgegeven e-mailadres is ongeldig.</p>";
            } else {
                header('Location: registratie_handler.php');
            }
        }
        ?>
        <form method="post" action="registratie_handler.php">
    <input type="text" id="username" name="username" placeholder="Voer hier je username in!" value=""><span>Username</span><br><br>
    <input type="email" id="email" name="email" placeholder="Voer hier je e-mail in!" value=""><span>Email</span><br><br>
    <input type="text" id="age" name="age" placeholder="Voer hier je leeftijd in!" value=""><span>Age</span><br><br>
    <input type="submit" value="Verzenden">
</form>
</form>
</body>
</html>