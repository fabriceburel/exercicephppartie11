<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Une calculatrice en PHP</h1>
        <?php
        if (isset($_POST['number1']) && isset($_POST['number2']) && !empty($_POST['number1']) && !empty(['number2']))
        {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            if (isset($_POST['addition']))
            {
                $result = $_POST['number1'] + $_POST['number2'];
            }
            elseif (isset($_POST['soustraction']))
            {
                $result = $_POST['number1'] - $_POST['number2'];
            }
            elseif (isset($_POST['multiplication']))
            {
                $result = $_POST['number1'] * $_POST['number2'];
            }
            elseif (isset($_POST['division']))
            {
                if ($_POST['number2'] != 0)
                    $result = $_POST['number1'] / $_POST['number2'];
            }elseif (isset($_POST['RAZ']))
            {
                $number1 = 0;
                $number2 = 0;
                $result = 0;
            }
            else
            {
                $result = 'ERREUR';
            }
        }
        elseif (isset($_POST['number1']) && $_POST['number1'] == '' && isset($_POST['number2']) && $_POST['number2'] == '')
        {
            $number1 = 0;
            $number2 = 0;
            $result = 'ERREUR';
        }
        elseif (isset($_POST['number1']) && $_POST['number1'] == '')
        {
            $number1 = 0;
            $number2 = $_POST['number2'];
            $result = 'ERREUR';
        }
        elseif (isset($_POST['number2']) && $_POST['number2'] == '')
        {
            $number1 = $_POST['number1'];
            $number2 = 0;
            $result = 'ERREUR';
        }
        else
        {
            $number1 = 0;
            $number2 = 0;
            $result = 0;
        }
        ?>
        <form action="index.php" method="post">
            <input type="number" name="number1" value="<?php echo isset($_POST['number1']) ? $number1 : 0 ?>"/>
            <input type="number" name="number2" value="<?php echo isset($_POST['number2']) ? $number2 : 0 ?>"/>
            <input type="submit" name="addition" value="+"/>
            <input type="submit" name="soustraction" value="-"/>
            <input type="submit" name="multiplication" value="*"/>
            <input type="submit" name="division" value="/"/>
            <input type="submit" name="RAZ" value="RAZ"/>
        </form>
        <p>Résultat : <?php echo $result ?></p>
    </body>
</html>
