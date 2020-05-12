
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="input.php" method="get">
      Name: <input type="text" name="name">
      <br/>
      Age: <input type="text" name="age"><br/>
      <input type="submit">
      </form>
    <br/>Your name is  <?php echo  $_GET["name"];?>
    <br/>Your age  is  <?php echo  $_GET["age"];?>


  </body>
</html>
