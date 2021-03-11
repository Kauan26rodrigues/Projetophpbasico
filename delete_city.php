<html>
<body>

<h1> Delete City </h1>


<?php
    include 'connect.php';
    include 'check.php';

    if(isset($_POST['delete'])){
        $id=$_POST['id'];


        $sql="delete from city where Id_city = {$id}";
        mysqli_query($con, $sql);
        header('location:reg_city.php');
    }


    if(isset($_POST['notdelete'])){
        header('location:reg_city.php');
    }


    $id = $_GET['Id_city'];
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
                            Deseja excluir a cidade <?php echo $resultcity['name_city']?> ?
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="Delete" name="delete">              
                    </td>
                    <td>
                        <input type="submit" value="not Delete" name="notdelete">   
                    </td>
                </tr>
                </table>    
    </form>

</body>
</html>