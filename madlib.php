
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="madlib.php" method="get">
      Color: <input type="text" name="color">
      <br/>
      Plural Noun: <input type="text" name="PluralNoun"><br/>
      <br/>
      Celebrity: <input type="text" name="celebrity"><br/>
      <input type="submit">
      </form>
      <?php
      $color = $_GET["color"];
      $pluralNoun = $_GET["PluralNoun"];
      $celebrity = $_GET["celebrity"];
       echo  "Roses are $color <br/>";
       echo  "$pluralNoun are blue <br/>";
       echo  "I love $celebrity <br/>";
       ?>


  </body>
</html>
