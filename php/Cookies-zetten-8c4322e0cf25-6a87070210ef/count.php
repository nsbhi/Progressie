<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Je hebt deze pagina
        <?php
        if (isset($_COOKIE['bezoeken'])) {
            $aantalbezoeken = $_COOKIE['bezoeken'] + 1;
        } else {
            $aantalbezoeken = 1;
        }

        echo $aantalbezoeken;
        setcookie('bezoeken', $aantalbezoeken, time() + 86400 * 30);

        ?>
        keer bezocht
    </h1>
</body>

</html>