
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <?php

      function cube($num){
        return $num * $num * $num;
      }
      $cubeResult = cube(4);
      echo $cubeResult;
      echo "<br/>";

      // or like this
      echo cube(10);


       ?>


  </body>
</html>
