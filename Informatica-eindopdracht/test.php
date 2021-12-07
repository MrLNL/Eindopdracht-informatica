<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <form method="post" action="">
        kies een getal tussen de 1 en de 10:
        <input type="radio" name="getallen" value="1" checked="selected" />1
        <input type="radio" name="getallen" value="2" />2
        <input type="radio" name="getallen" value="3" />3
        <input type="radio" name="getallen" value="4" />4
        <input type="radio" name="getallen" value="5" />5
        <input type="radio" name="getallen" value="6" />6
        <input type="radio" name="getallen" value="7" />7
        <input type="radio" name="getallen" value="8" />8
        <input type="radio" name="getallen" value="9" />9
        <input type="radio" name="getallen" value="10" />10
        <br><br>
        <input type="submit" name="kies" value="kies" />
        <br><br>


        <?php


        $random = rand(1, 10);
        $score = $_SESSION['score'] = 0;
        if (isset($_SESSION['score'])) {
            (int)$_SESSION['score'] = (int)[];
        }

        if (isset($_POST['kies'])) {
            session_start();
            $getallen = $_POST['getallen'];
            if ($getallen == "1" && $getallen == $random) {
                echo "goed geraden!";
                echo "<br>";
                (int)$_SESSION['score'] += 1;
                //echo "Score:" . $_SESSION['score'];
            } elseif ($getallen == "2" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "3" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "4" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "5" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "6" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "7" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "8" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "9" && $getallen == $random) {
                echo "goed geraden!";
            } elseif ($getallen == "10" && $getallen == $random) {
                echo "goed geraden!";
            } else {
                echo "jammer probeer het nog een keer";
                echo "<br>";
                //echo "Score:" . $_SESSION['score'];
            }
        } else {
            echo "kies eerst een getal";
        }
        echo "<br>";
        echo "Score:" . $_SESSION['score'];
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        ?>


        <form method="post" action="">
            type een getal tussen de 1 en 10:<input type="text" name="getalveld" value="">
            <br>
            <input type="submit" name="bevestig" id="bevestig" value="bevestig">
        </form>

        <?php
        if (isset($_POST['bevestig'])) {
            session_start();
            if ($_POST['getalveld'] < 1 && $_POST['getalveld'] > 10) {
                echo "dit kan niet";
            }
            if ($_POST['getalveld'] == $random) {
                echo "goed geraden!";
                echo "<br>";
                (int)$_SESSION['score'] += 1;
                echo "score:" . $_SESSION['score'];
            } else {
                echo "probeer het nog een keer";
                echo "<br>";
                echo "score:" . $_SESSION['score'];
            }
        }
        echo "<br>";
        echo "<br>";
        echo "<br>"
        ?>

        <form action="" method="post">
            <input type="submit" value="reset" name="reset">
        </form>
</body>

</html>