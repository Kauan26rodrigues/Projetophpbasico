<html>
<body>

<h1> Edit City </h1>


<?php
    include 'connect.php';
    include 'check.php';

    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $nameCity=$_POST['name'];


        $sql="update city set name_city='{$nameCity}' where Id_city = {$id}";
        mysqli_query($con, $sql);
        header('location:reg_city.php');
    }

    // echo "Id_city = " . $_GET['Id_city'];
    $id = $_GET['Id_city'];
    // $name = $_GET['name_city'];

    $sqlGetcity="select*from city where Id_city={$id}";
    $queryGetcity= mysqli_query($con, $sqlGetcity);
    $resultcity=mysqli_fetch_assoc($queryGetcity);
?>
    
    <form method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                             Id 
                            <input readonly="readonly" type="text"  name="id" value="<?php echo $resultcity['Id_city']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name
                            <input type="text" name="name" value="<?php echo $resultcity['name_city']?>">
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="submit" name="update">
                               
                    </td>
                </tr>
                </table>    
    </form>

</body>
</html>