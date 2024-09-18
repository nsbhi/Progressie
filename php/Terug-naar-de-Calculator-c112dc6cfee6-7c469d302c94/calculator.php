<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenmachine</title>
</head>
<body>
    <h2>Rekenmachine</h2>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Voer eerste getal in" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="num2" placeholder="Voer tweede getal in" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">
        <button type="submit" name="bereken">Berekenen</button>
    </form>
    <?php
    if (isset($_POST['bereken'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "Voer de waarde in voor allebei de getallen.";
        } else {
            switch ($operator) {
                case '+':
                    $resultaat = $num1 + $num2;
                    echo "Resultaat: $num1 + $num2 = $resultaat";
                    break;
                case '-':
                    $resultaat = $num1 - $num2;
                    echo "Resultaat: $num1 - $num2 = $resultaat";
                    break;
                case '*':
                    $resultaat = $num1 * $num2;
                    echo "Resultaat: $num1 * $num2 = $resultaat";
                    break;
                case '/':
                    if ($num2 == 0) {
                        echo "het is niet mogelijk om door 0 te berekenen.";
                    } else {
                        $resultaat = $num1 / $num2;
                        echo "Resultaat: $num1 / $num2 = $resultaat";
                    }
                    break;
                case '%':
                    if ($num2 == 0) {
                        echo "het is niet mogelijk om door 0 te berekenen voor de modulo-operatie.";
                    } else {
                        $resultaat = $num1 % $num2;
                        echo "Resultaat: $num1 % $num2 = $resultaat";
                    }
                    break;
                default:
                    echo "niet de correcte operator.";
            }
        }
    }
    ?>
</body>
</html>