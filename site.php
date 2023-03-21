<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="site.php" method="get">
        How many dice rolls? <input type="number" name="rolls" value="1">
        <br>
Pick Dice   <select name="dice" id="dice">
                <option value="4">d4</option>
                <option value="6">d6</option>
                <option value="8">d8</option>
                <option value="10">d10</option>
                <option value="12">d12</option>
                <option value="20">d20</option>
            </select>
        <br>
        <input value="Roll Dice" type="submit">
    </form>

    <?php

        $output = 0;

        $test = 0;

        for ($x = 0;  $x < $_GET["rolls"]; $x++) {

            $test = rand(1, $_GET["dice"]);

            $output = $output + $test;

            
          };



        echo "Rolled d";
        echo $_GET["dice"];
        echo " ";
        echo $_GET["rolls"];
        echo " Times ";

        echo "total is  $output"

    ?>

</body>
</html>