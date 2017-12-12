<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice6</title>
  </head>
  <body>
    <?php
    concatChar('Noel','Mickael',110);
    function concatChar($name,$firstname,$old){
      echo 'Bonjour ' . $name . ' ' . $firstname . ', tu as ' . $old . ' ans.';
    }
    ?>
  </body>
</html>
