<?php
include('connect.php');
$id=$_GET['id'];

$select="SELECT *FROM det WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);


 ?>
 <form class="" action="" method="post">
   <br>
   name:<input type="text" name="firstname" value="<?php echo $row['fname'] ?>" placeholder="name"><br><br>
   L-name: <input type="text" name="lastname" value="<?php echo $row['lname'] ?>" placeholder="lastname"><br><br>
   age:<input type="text" name="age" value="<?php echo $row['age'] ?>"><br><br>
   <input type="submit" name="updatedb"  value="update">
   <a href="display.php">back</a>
 </form>
 <?php
 if(isset($_POST["updatedb"])){
   $f_name=$_POST["firstname"];
   $l_name=$_POST["lastname"];
   $_age=$_POST["age"];

   $update="UPDATE  det SET fname='$f_name',lname='$l_name',age='$_age' WHERE id='$id'";

   $data=mysqli_query($con,$update);
   if($data){
    ?>
    <script type="text/javascript">
      alert("Update successfully!");
      window.open('http://localhost/cwprac/CRUD/display.php','_self');
    </script>
    <?php
   }
   else{
     ?>
     <script type="text/javascript">
       alert("oops!There is some error");
     </script>
     <?php
   }
 }
  ?>
