<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobbelspel</title>
</head>
<form action="" method="post">
    <input type="submit" value="speler1" name="speler1">
</form>
<form action="" method="post">
    <input type="submit" value="speler2" name="speler1">
</form>

<body>
    <?php

    $dobbel1 = rand(1, 6);
    if (isset($_POST['speler1'])) {
        if ($dobbel1 == 1) {
            echo "<img src='dobbelsteen1.jpg'/>";
        }
        if ($dobbel1 == 2) {
            echo "<img src='dobbelsteen2.jpg'/>";
        }
        if ($dobbel1 == 3) {
            echo "<img src='dobbelsteen3.jpg'/>";
        }
        if ($dobbel1 == 4) {
            echo "<img src='dobbelsteen4.jpg'/>";
        }
        if ($dobbel1 == 5) {
            echo "<img src='dobbelsteen5.jpg'/>";
        }
        if ($dobbel1 == 6) {
            echo "<img src='dobbelsteen6.jpg'/>";
        }
    }

    $dobbel2 = rand(1, 6);
    if (isset($_POST['speler2'])) {
        if ($dobbel2 == 1) {
            echo "<img src='dobbelsteen1.jpg'/>";
        }
        if ($dobbel2 == 2) {
            echo "<img src='dobbelsteen2.jpg'/>";
        }
        if ($dobbel2 == 3) {
            echo "<img src='dobbelsteen3.jpg'/>";
        }
        if ($dobbel2 == 4) {
            echo "<img src='dobbelsteen4.jpg'/>";
        }
        if ($dobbel2 == 5) {
            echo "<img src='dobbelsteen5.jpg'/>";
        }
        if ($dobbel2 == 6) {
            echo "<img src='dobbelsteen6.jpg'/>";
        }
    }
    ?>



</body>

</html>