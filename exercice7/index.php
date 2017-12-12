<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice7</title>
  </head>
  <body>
    <?php
      identity(80,'homme');
      function identity($age,$genre){
        if ($age<18 && $genre == 'homme') {
          echo 'Vous êtes un homme et vous êtes mineur';
        }elseif ($age<18 && $genre == 'femme') {
          echo 'Vous êtes une femme et vous êtes mineur';
        }elseif ($age>=18 && $genre == 'femme') {
          echo 'Vous êtes une femme et vous êtes majeur';
        }else {
          echo 'Vous êtes un homme et vous êtes majeur';
        }
      }
    ?>
  </body>
</html>
