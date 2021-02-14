<script src="/js/bootstrap.min.js"></script>
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
<script type="text/javascript">
    var navbar Height = $('.navbar').height();

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