<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $nameCity=$_POST['nameCity'];

    $sqlinsertCity="insert into city (name_city) values ('$nameCity')";
    mysqli_query($con, $sqlinsertCity);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome da Cidade
                        <input type="text" name="nameCity">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="home.php">Home</a>
                    </td>
                </tr>

            </table>

            <table border='1'>
                <tr>
                    <th>
                        Name City
                    </th>
                    <th>
                        Editar
                    </th> 
                    <th>
                        Delete
                    </th>
                </tr>

            <?php
            $sq="select * from city";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){ 
                ?>
                <tr>
                    <td>
                        <?php echo $f['name_city']?>
                    </td>
                    <td>
                    <a href="edit_city.php?Id_city=<?php echo $f['Id_city']?>">Edit</a>
                    <!-- <a href="reg_city.php">Editar</a> -->
                    </td>
                    <td>
                    <a href="delete_city.php?Id_city=<?php echo $f['Id_city']?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </table>
    </body>
</html>
