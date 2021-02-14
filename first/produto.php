<?php
include "config2.php";
$angka = substr(uniqid(rand(), true), 7, 7);
$order = preg_replace("/[^0-9]/", "",$angka);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .badge-notify{
            background:red;
            position:relative;
            top: -10px;
            right: 10px;
        }
        .my-cart-icon-affix {
            position: fixed;
            z-index: 999;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <h2 style="margin-top:0;">Produtos</h2>
          </a>
        </div>
        <p class="navbar-text navbar-right"><i class="fa fa-shopping-cart fa-2x my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></i></p>
        <p class="navbar-text navbar-right"><i class="fa fa-user fa-2x"></i> <a href="#" class="navbar-link">Usuario</a></p>
        <p class="navbar-text navbar-right"><a href="order.php" class="navbar-link"><i class="fa fa-envelope fa-2x"></i></a></p>
      </div>
    </nav>
    
    <div class="container">
        <div class="row">
        <?php
        $stmt = $dbh->prepare("SELECT * FROM produtos");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
        ?>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="thumbnail">
              <img src="imagemproduto/<?php echo $row['imagem'] ?>" alt="<?php echo $row['categoria'] ?>" style="height:150px;width:100%;">
              <div class="caption text-center">
                <h3><?php echo $row['categoria'] ?></h3>
                <p><strong>Preço</strong>: R$<?php echo $row['preco'] ?><br/><?php echo $row['descricao'] ?></p>
                <p>
                    <button type="button" class="btn btn-danger my-cart-btn" data-id="<?php echo $row['idproduto'] ?>" data-name="<?php echo $row['categoria'] ?>" data-summary="<?php echo $row['descricao'] ?>" data-price="<?php echo $row['preco'] ?>" data-quantity="<?php echo $row['quant'] ?>" data-image="imagemproduto/<?php echo $row['imagem'] ?>">Adicionar</button> 
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['idproduto'] ?>">Detalhes</button>
                </p>
              </div>
            </div>
          </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal-<?php echo $row['idproduto'] ?>" tabindex="-<?php echo $row['idproduto'] ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['idproduto'] ?>">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel-<?php echo $row['idproduto'] ?>"><?php echo $row['categoria'] ?></h4>
                  </div>
                  <div class="modal-body">
                    <img src="imagemproduto/<?php echo $row['imagem'] ?>" style="width:100%"/><br/>
                    <strong>Preço</strong>: R$<?php echo $row['preco'] ?><br/>
                    <?php echo $row['descricao'] ?>
                  </div>
                </div>
              </div>
            </div>
        <?php
            }
        }
        ?>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mycart.min.js"></script>
  
    <script>
    $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("imagem") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      /*cartItems: [
        {id: 1, name: 'Juice Blender', summary: 'Bisa blender jus, bumbu masakan', price: 10, quantity: 1, image: 'assets/images/img_1.png'},
        {id: 2, name: 'TV remote', summary: 'Bisa untuk semua tv', price: 20, quantity: 2, image: 'assets/images/img_2.png'},
        {id: 3, name: 'Sony camera', summary: 'Kamera murah', price: 30, quantity: 1, image: 'assets/images/img_3.png'}
      ],*/
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      afterAddOnCart: function(products, totalPrice, totalQuantity) {
        console.log("afterAddOnCart", products, totalPrice, totalQuantity);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("Clique", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Preço: " + totalPrice + "\nTotal Quantidade: " + totalQuantity;
        $.each(products, function(){
            shoppingcart(this.idproduto, this.quant, this.preco * this.quant);
        });
        console.log("checking ou", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("", products, totalPrice, totalQuantity);
        return totalPrice * 1;
      }
    });

  });
        function shoppingcart(allid,allquantity,allprice){
            var myorder = "<?php echo $order ?>";
            $.post('order.php',{idcliente:'1', idproduto:allid, aq:allquantity, ap:allprice, venda:'venda', order:myorder});
        }
    </script>
</body>
</html>