<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $nameCity=$_POST['nameCity'];
   
    $i="insert into city(nameCity) values ('Colatina');";
    mysqli_query($con, $sqlInsertCity);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h1> Cidade </h1>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name cidade
                        <input type="text" name="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="login.php">login</a>
                    </td>
                </tr>
            </table>
         
    <table border='1'>
    <tr>
        <th>
            Name
        </th>
    </tr>
  <?php
   $sq="select * from reg";
   $qu=mysqli_query($con,$sq);
   while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['name']?>
        </td>
        <td>
            <?php echo $f['username']?>
        </td>
    </tr>
  <?php
} 
?>
</table>

    </body>
</html>
