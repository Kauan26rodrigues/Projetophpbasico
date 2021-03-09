<html>
<body>

<h1> Delete Produto </h1>


<?php
    include 'connect.php';
    include 'check.php';

    if(isset($_POST['delete'])){
        $id=$_POST['id'];


        $sql="delete from produtos where id_produto = {$id}";
        mysqli_query($con, $sql);
        header('location:reg_produtos.php');
    }


    if(isset($_POST['notdelete'])){
        header('location:reg_produtos.php');
    }


    $id = $_GET['id_produto'];
    $sqlproduto= "select*from produtos where id_produto={$id}";
    $query= mysqli_query($con, $sqlproduto);
    $result=mysqli_fetch_assoc($query);
?>
    
    <form method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                             Id 
                            <input readonly="readonly" type="text"  name="id" value="<?php echo $result['id_produto']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Deseja excluir o produto <?php echo $result['name_produto']?> ?
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" value="not Delete" name="notdelete">   
                    </td>
                    <td>
                        <input type="submit" value="Delete" name="delete">              
                    </td>
                </tr>
                </table>    
    </form>

</body>
</html>