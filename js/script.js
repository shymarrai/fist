(function ($) {

    //Function to animate slider captions 
    function doAnimations(elems) {
        //Cache the animationend event in a variable
        var animEndEv = 'webkitAnimationEnd animationend';

        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }

    //Variables on page load 
    var $myCarousel = $('#carousel-example-generic'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

    //Initialize carousel 
    $myCarousel.carousel();

    //Animate captions in first slide on page load 
    doAnimations($firstAnimatingElems);

    //Pause carousel  
    $myCarousel.carousel('pause');


    //Other slides to be animated on carousel slide event 
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
    $('#carousel-example-generic').carousel({
        interval: 3000,
        pause: "false"
    });

})(jQuery);

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
    $(function () {

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
        if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
        else $('head > link').filter(':first').replaceWith(defaultCSS);
    }
    $(document).ready(function() {
        var iframe_height = parseInt($('html').height());
        window.parent.postMessage(iframe_height, 'https://bootsnipp.com');
    });
</script>

