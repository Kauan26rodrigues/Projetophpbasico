<?php
include 'connect.php';
if(isset($_POST['sub'])){
    $nameProd=$_POST['nameprod'];
    $precoProd=$_POST['precoprod'];

    $sql="insert into produtos (name_produto, preco_produto) values ('$nameProd','$precoProd' )";
    mysqli_query($con, $sql);
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
                        Produto
                        <input type="text" name="nameprod">
                    </td>
                </tr>
                <td>
                        Preço     
                        <input type="number" name="precoprod">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="cadastrar" name="sub">
                               
                    </td>
                </tr>

            </table>

            <table border='1'>
                <tr>
                    <th>
                        Produto
                    </th>
                    <th>
                        Preço
                    </th>
                    <th>
                        Editar
                    </th> 
                    <th>
                        Delete
                    </th>
                </tr>

            <?php
            $sq="select * from produtos";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){ 
                ?>
                <tr>
                    <td>
                        <?php echo $f['name_produto']?>
                    </td>
                    <td>
                        <?php echo $f['preco_produto']?>
                    </td>
                    <td>
                    <a href="edit_produtos.php?id_produto=<?php echo $f['id_produto']?>">Edit</a>
                    </td>
                    <td>
                    <a href="delete_produtos.php?id_produto=<?php echo $f['id_produto']?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </table>
    </body>
</html>
