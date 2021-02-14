<?php
include 'includes/header.php'; 
include "config2.php";
$angka = substr(uniqid(rand(), true), 7, 7);
$order = preg_replace("/[^0-9]/", "",$angka);
$verifica = (isset($_SESSION['cliente'])?"":"data-target='#myModal' data-toggle='modal'");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>
        Fist Gallery
    </title>
   
  
	 <!-- /botao de ir ao topo -->
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
		
		.window{
    display:none;
    width:300px;
    height:300px;
    position:absolute;
    left:0;
    top:0;
    background:#FFF;
    z-index:9900;
    padding:10px;
    border-radius:10px;
}
  #mascara{
    display:none;
    position:absolute;
    left:0;
    top:0;
    z-index:9000;
    background-color:#000;
}
 
  body{color: black;}

.fechar{display:block; text-align:right;}  
</style>
    
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



   
</head>

        <?php
        $stmt = $dbh->prepare("SELECT * FROM produtos");
        if ($stmt->execute()) {
            while ($row = $stmt->fetch()) {
				
        ?>
		
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="thumbnail">
              <img src="admin/img/<?php echo $row['img1'] ?>" alt="<?php echo $row['nome'] ?>" style="height:150px;width:100%;">
			  
              <div class="caption text-center">
                <h3><?php echo $row['nome'] ?></h3>
                <p><strong>Preço</strong>: R$<?php echo $row['valor'] ?><br/><?php echo $row['detalhes'] ?></p>
                <p>
                    <button type="button" class="btn btn-success my-cart-btn" data-id="<?php echo $row['idprodutos'] ?>" data-name="<?php echo $row['nome'] ?>" data-summary="<?php echo $row['detalhes'] ?>" data-price="<?php echo $row['valor'] ?>" data-quantity="<?php echo $row['quantidade'] ?>" data-image="admin/img/<?php echo $row['img1'] ?>" <?php echo $verifica ?>>Adicionar</button> 
					
                    <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#Modal<?php echo $row['idprodutos'] ?>" >Detalhes</button>
                </p>
              </div>
            </div>
          </div>
		 
            <!-- Modal -->
            <div class="modal fade" id="Modal<?php echo $row['idprodutos'] ?>" tabindex="<?php echo $row['idprodutos'] ?>" role="dialog" aria-labelledby="myModalLabel<?php echo $row['idprodutos'] ?>">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style='color:black;'id="myModalLabel<?php echo $row['idprodutos'] ?>"><?php echo $row['nome'] ?></h4>
                  </div>
                  <div class="modal-body" style="color: black;">
                    <img class='img-thumbnail rounded' style='max-width: 50%;' src="admin/img/<?php echo $row['img1'] ?>" />
                    <strong>Preço</strong>: R$<?php echo $row['valor'] ?>
					<p>Detalhes: 
                    <?php echo $row['detalhes'] ?></p>
                  </div>
                </div>
              </div>
            </div>
			
        <?php
            }
        }
        ?>

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mycart.min.js"></script> 
    <script>

   
    
    $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".fa-shopping-cart");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
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
      classCartIcon: 'fa-shopping-cart',
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
</html>

<?php include 'includes/footer.php'; ?>
