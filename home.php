<?php
include'connect.php';
     $s="select*from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    ?>
<html>
    <head>
        
    </head>
    <body>
<table>
    <tr>
        <td>
            Name
        </td><td>
            
<?php echo $f['name'];?>
            </td>
    </tr>
    <tr>
    <td> Username</td>
    
    <td>
            
<?php
echo $f['username'];?>
        </td></tr>
<tr><td> Password</td>
    <td>
<?php
echo $f['password']."<br>";?>
    </td></tr>
  <tr><td> City </td>   <td>           
 <?php
 echo $f['city']."<br>";?></td></tr>
  <tr>
      <td>Gender</td>
      <td><?php
echo $f['gender']."<br>";?></td>
  </tr>
  <tr><td> Image</td><td>

 <img src="<?php
echo $f['image'];?>" width="100px" height="100px">
</td>

</tr>
</table>
<a href="edit.php">Edit</a>
<a href="delete.php">Delete</a>
    </body>
</html>