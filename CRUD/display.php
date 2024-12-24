<?php
include("connect.php");
 ?>
 <table border="1",border="colaps">
   <tr >
        <th>id</th>
     <th>FirstNAme</th>
     <th>LastName</th>
     <th>Age</th>
     <th colspan="2">action</th>
   </tr>
   <?php
   $query="SELECT *FROM det ";
   $data=mysqli_query($con,$query);


     while ($rows=mysqli_fetch_array($data)) {
       ?>
       <tr>
          <td><?php echo $rows['id']; ?></td>
           <td><?php echo $rows['fname']; ?></td>
           <td><?php echo $rows['lname']; ?></td>
         <td><?php echo $rows['age']; ?></td>
         <td><a href="update.php?id=<?php echo $rows['id']; ?>">edit</a></td>
          <td><a onclick="return confirm ('are you sure want to delete?')" href="delete.php?id=<?php echo $rows['id']; ?>">delete</a></td>

       </tr>
       <?php
     }


    ?>
 </table>
 <br>
 <br>
 <a href="index.php">Return</a>
