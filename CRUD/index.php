<?php
include("connect.php");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <br>
      name:<input type="text" name="firstname" value="" placeholder="name"><br><br>
      L-name: <input type="text" name="lastname" value="" placeholder="lastname"><br><br>
      age:<input type="text" name="age" value=""><br><br>
      <input type="submit" name="saved"  value="submit">
      <button  type="button" name="button"><a href="display.php" target="_blank">display</a> </button>
    </form>
    <?php
    if(isset($_POST["saved"])){
      $f_name=$_POST["firstname"];
      $l_name=$_POST["lastname"];
      $_age=$_POST["age"];

      $query="INSERT INTO det(fname,lname,age) VALUES('$f_name','$l_name','$_age')";

      $data=mysqli_query($con,$query);
      if($data){
        echo "data saved";
      }
      else{
        echo "there is some error";
      }
    }
     ?>
  </body>
</html>
