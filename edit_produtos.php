<html>
<body>

<h1> Editar Produto </h1>


<?php
    include 'connect.php';
    include 'check.php';

    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $nameProduto=$_POST['name'];
        $precoProduto=$_POST['preco'];


        $sql="update produtos set name_produto='{$nameProduto}', preco_produto='{$precoProduto}' where id_produto = {$id}";
        mysqli_query($con, $sql);
        header('location:reg_produtos.php');
    }

    $id = $_GET['id_produto'];


    $sql="select*from produtos where id_produto={$id}";
    $query= mysqli_query($con, $sql);
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
                            Name
                            <input type="text" name="name" value="<?php echo $result['name_produto']?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Preço
                            <input type="text" name="preco" value="<?php echo $result['preco_produto']?>">
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