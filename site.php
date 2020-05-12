<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<hr>";
      $charecterName = "Sonu";
      $charecterAge = 20;
      $phrase = "Sonu kushwaha";
      echo ("Hello World <hr>  <h1>$charecterName's site</h1>");
      echo "<hr>";
      echo "<p>This is my site<p>";
      echo "There was a man named $charecterName <br>";
      echo "He was $charecterAge years old<br>";
      $charecterName = "Ankit";
      echo "He really liked the name $charecterName <br>";
      echo "But didn't like being $charecterAge <br>";
      echo "$phrase";
      echo "<br>";
      echo strtoupper($phrase);
      echo "<br>";
      echo strtolower($phrase);
      echo "<br>";

      echo 3 + 4;echo "<br>";
      echo 11 % 4;echo "<br>";
      echo 2 * 3;echo "<br>";
      echo "<br>";
      echo substr($phrase,5);
      echo "<br>";
      echo substr($phrase,5,6);
      echo "<br>";
      echo str_replace("Sonu","Sanjeet",$phrase);

      echo "<br>";
      echo str_replace("nu","Sanjeet",$phrase);

      echo "<br>";
      $phrase[0] = "B";
      echo $phrase;

     ?>
  </body>
</html>
