<?php
include "config2.php";
if(isset($_POST['venda'])){
    $idcliente = $_POST['idcliente'];
    $idproduto = $_POST['idproduto'];
    $aq = $_POST['aq'];
    $ap = $_POST['ap'];
    $order = $_POST['order'];
    $stmt = $dbh->prepare("INSERT INTO venda VALUES (?,?,?,?,?)");
    $stmt->bindParam(1, $idcliente);
    $stmt->bindParam(2, $idproduto);
    $stmt->bindParam(3, $aq);
    $stmt->bindParam(4, $ap);
    $stmt->bindParam(5, $order);
    $stmt->execute();
} else{
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $stmt = $dbh->prepare("DELETE FROM venda WHERE idcliente=1");
        $stmt->bindParam(1, $del);
        if($stmt->execute()){
            ?>
            <script>location.href="produto.php"</script>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fist</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <h1>Fist</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Imagem</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $dbh->prepare("SELECT * FROM venda a JOIN produtos b where a.idproduto=b.idprodutos and a.idcli = 1");
                if ($stmt->execute()) {
                  while ($row = $stmt->fetch()) {
                ?>
                <tr>
                    <td width="120"><img src="admin/img/<?php echo $row['img1'] ?>" style="width:100px"/></td>
                    <td><strong><?php echo $row['modelo'] ?></strong></td>
                    <td width="80"><?php echo $row['quantidade'] ?></td>
                    <td width="80"><?php echo $row['valor'] ?></td>
                </tr>
                <?php
                  }
                }
                ?>
            </tbody>
            <tfoot>
                <?php
                $stmt2 = $dbh->prepare("SELECT sum(valor) as ap2 FROM venda where idcliente = 1");
                $stmt2->execute();
                $row2 = $stmt2->fetch();
                ?>
                <tr>
                    <th colspan="2">Total</th>
                    <th colspan="2"><?php echo $row2['ap2'] ?></th>
                </tr>
                <tr>
                    <th colspan="2">Total </th>
                    <th colspan="2"><?php echo $row2['ap2']*1?></th>
                </tr>
            </tfoot>
        </table>
        <p class="text-right"><a href="catalogo.php" class="btn btn-default">Voltar</a> <a href="?del=1" class="btn btn-danger">Cancelar</a></p>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
 }   
?>