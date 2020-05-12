
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="assocArray.php" method="post">
     <input type="text" name="student">
    <input type="submit">
    </form>
      <?php
    $grades = array("Sonu" => "A+", "Ajit" => "B","Ankit" => "C+");
    echo $grades["Sonu"];echo "<br/>";
    echo $grades[$_POST["student"]];
      ?>


  </body>
</html>
