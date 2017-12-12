<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice4</title>
  </head>
  <body>
    <?php
    compareNumber(60,60);
    function compareNumber($number1,$number2){
      if($number1 > $number2){
        echo 'Le premier nombre est plus grand';
      }elseif ($number1 < $number2) {
        echo 'Le premier nombre est plus petit';
      }else{
        echo 'Les deux nombres sont identiques';
      }
    }
    ?>
  </body>
</html>
