<a class="pull-right up">
    <i class="far fa-arrow-alt-circle-up fa-3x"></i>
    
</a>


<br><br><br><br>
<br><br><br><br>
<div id="modalblur">
<footer>
    <section id="ultimo">
        <div class="footer-section">
            <div class="container">
                <div class="footer-four-columns">
                    <div class="col-md-3 footer-column">
                        <h4>Sobre </h4>
                        <p>Por mais de 30 anos, grandes personalidades contam com a Fist Gallery para adiquirir que os melhores relógios do mundo com o melhor preço do Brasil. Nós somos um fornecedor de Qualidade Total Assegurada para indústrias em todo o mundo.</p>
                    </div>
                    <div class="col-md-3 footer-column">
                        <h4>Somos os melhores</h4>
                        <ul>
                            <li>Fabricantes do mundo inteiro</li>
                            <li>Relógios de qualidade</li>
                            <li>Comodidade e segurança</li>
                            <li>Interface amigável e intuitiva</li>
                            <li>Coleções em tempo real de lançamento</li>
                            <li>A mais completa gama de relógios</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-column">
                        <h4>Utilidades</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">Sobre a Fist</a></li>
                            <li><a href="services.html">Serviços</a></li>
                            <li><a href="contact.html">Fale Conosco</a></li>
                            <li><a href="codes.html">Coleções</a></li>
                            <li><a href="projects.html">Projetos</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-column">
                        <h4>Contatos</h4>
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; 21 0000 0000</li>
                            <li><i class="fas fa-envelope"></i> &nbsp; <a href="mailto:example@mail.com"> contato@fist.com</a></li>
                            <li><i class="fas fa-map-marker-alt"></i> &nbsp; Fist Gallery LTDA todos os direitos reservados</li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
    </section>
</footer>



<!-- Carrega JS -->
<script type="text/javascript">
    var navbarHeight = $('.navbar').height();

    $(window).scroll(function() {
        var navbarColor = "0,0,0"; //cor do botão de menu mobile em movimento
        var smallLogoHeight = $('.small-logo').height();
        var bigLogoHeight = $('.big-logo').height();


        var smallLogoEndPos = 0;
        var smallSpeed = (smallLogoHeight / bigLogoHeight);

        var ySmall = ($(window).scrollTop() * smallSpeed);

        var smallPadding = navbarHeight - ySmall;
        if (smallPadding > navbarHeight) {
            smallPadding = navbarHeight;
        }
        if (smallPadding < smallLogoEndPos) {
            smallPadding = smallLogoEndPos;
        }
        if (smallPadding < 0) {
            smallPadding = 0;
        }

        $('.small-logo-container ').css({
            "padding-top": smallPadding
        });

        var navOpacity = ySmall / smallLogoHeight;
        if (navOpacity > 1) {
            navOpacity = 1;
        }
        if (navOpacity < 0) {
            navOpacity = 0;
        }
        var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
        $('.navbar').css({
            "background-color": navBackColor
        });
        var shadowOpacity = navOpacity * 0.4;
        if (ySmall > 1) {
            $('.navbar').css({
                "box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"
            });
        } else {
            $('.navbar').css({
                "box-shadow": "none"
            });
        }
    });

    /* botao para subir a pagina  */

    jQuery(document).ready(function() {

        jQuery(".up").hide();

        jQuery('a.up').click(function() {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 500) {
                jQuery('.up').fadeIn();
            } else {
                jQuery('.up').fadeOut();
            }
        });
    });

</script>     
    <!--
<script src="/js/jquery-3.2.1.min.js"></script>  -->
    <!-- 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script type="text/javascript" src="/js/script.js"></script>
<script defer src="js/fontawesome-all.min.js"></script> -->

    <!-- Não apaque -->    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mycart.min.js"></script> 
    <script>
    $(function() {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
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
      currencySymbol: 'R$ ',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: false,
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
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        $.each(products, function(){
            shoppingcart(this.id, this.quantity, this.price * this.quantity);
        });
        console.log("checking out", products, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 0.99;
      }
    });

  });
        function shoppingcart(allid,allquantity,allprice){
            var myorder = "<?php echo $order ?>";
            $.post('order.php',{ui:'1', id:allid, aq:allquantity, ap:allprice, shopping:'shopping', order:myorder});
        }
    </script>
    
<script type="text/javascript">
    window.alert = function() {};
    var defaultCSS = document.getElementById('bootstrap-css');

    function changeCSS(css) {
        if (css) $('head > link').filter(':fist').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
        else $('head > link').filter(':fist').replaceWith(defaultCSS);
    }
    $(document).ready(function() {
        var iframe_height = parseInt($('html').height());
        window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
    });
</script>
    
</div>
