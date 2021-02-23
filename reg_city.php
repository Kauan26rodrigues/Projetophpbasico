<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $nameCity=$_POST['nameCity'];
   
    $sqlInsertCity="insert into city (nameCity) value ('$nameCity');";
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
                        Nome da cidade
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
                        <a href="home.php">login</a>
                    </td>
                </tr>
            </table>
         
    <table border='1'>
    <tr>
        <th>
            Name
        </th>
        <th>
            Id
        </th>
    </tr>
  <?php
   $sq="select * from  city";
   $qu=mysqli_query($con,$sq);
   while($f=  mysqli_fetch_assoc($qu)){
       ?>
    <tr>
        <td>
            <?php echo $f['nameCity']?>
        </td>
        <td>
            <a href="edit_city.php?idCity=<?php echo $f['idCity']?>">Edit</a>
        </td>
    </tr>
     <?php
    } 
       ?>
       </table>
    </body>
</html>
