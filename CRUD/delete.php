<?php
include("connect.php");
$id=$_GET['id'];
$del="DELETE FROM det WHERE id='$id'";
$data=mysqli_query($con,$del);

if($data){
  ?>
   <script type="text/javascript">
   alert("your data deleted successfully");
   window.open('http://localhost/cwprac/CRUD/display.php','_self');

   </script>
  <?php
}
else {
  ?>
   <script type="text/javascript">
     alert('invalid ,Try again ');
   </script>
  <?php
}
 ?>
