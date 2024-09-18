<?php
session_start();

if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 0;
}


$_SESSION['visit_count']++;


$count = $_SESSION['visit_count'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bezoek Teller</title>
</head>
<body>
    <h2>Welkom op onze pagina!</h2>
    <p>Dit is jouw bezoek nummer <?php echo $count; ?>.</p>
</body>
</html>