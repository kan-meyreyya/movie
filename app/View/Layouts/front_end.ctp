<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $this->fetch('title'); ?></title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
        <?php
            echo $this->Html->meta('icon');
            echo $this->fetch('meta');
            echo $this->Html->css(array(
                '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
                'style',
                'custom',
            ));

            echo $this->Html->script(array(
                '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
                '//content.jwplatform.com/libraries/XeGdlzmk.js',
                'jquery-migrate-1.2.1',
                'jquery.easing.1.3',
                'scroll_to_top',
                'script',
                'jquery.equalheights',
                'superfish',
                'jquery.mobilemenu',
                'touchTouch.jquery',
                'jquery.tools.min',
                'tmStickUp',
                'owl.carousel',
            ));

            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
        <script>
            $(document).ready(function(){
                var owl = $("#owl"); 
                owl.owlCarousel({
                items : 1, //10 items above 1000px browser width
                itemsDesktop : [995,1], //5 items between 1000px and 901px
                itemsDesktopSmall : [767, 1], // betweem 900px and 601px
                itemsTablet: [700, 1], //2 items between 600 and 0
                itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation : false,
                pagination :  true
                });
            }); 
        </script>
        <style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style>
        <!--[if lt IE 9]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="https://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                <img src="https://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
        <![endif]-->
    </head>
    <body>
        <div id="back-top" style="opacity: 1; display: block;"><i class="fa fa-arrow-up"></i></div>
        <div class="main">
            <div class="div-content">

                <!--header-->
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="grid_12">
                                <h1>
                                    <?php
                                        echo $this->Html->link(
                                            $this->Html->image('logo.png', array('alt' => 'logo')),
                                            '/', array(
                                                'escape' => false,
                                            )
                                        );
                                    ?>
                                </h1>
                                <form id="search1" action="search.php" method="GET" accept-charset="utf-8">
                                    <input type="text" name="s" value="" onfocus="myFocus(this);" onblur="myBlur(this);">
                                    <a onclick="document.getElementById('search1').submit()" class="more_btn3"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>

                <!--menu-->
                <?php echo $this->element('Menu/front_end_menu'); ?>

                <!--content-->
                <?php if ($this->request->controller === 'homes') : ?>
                <div class="container">
                    <div class="header-box">
                        <div id="owl" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 6360px; left: 0px; display: block; transition: all 800ms ease; transform: translate3d(-1060px, 0px, 0px);">
                                    <div class="owl-item" style="width: 1060px;">
                                        <div class="item">
                                            <p class="txt1">Watch your favorite movie online</p>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 1060px;">
                                        <div class="item">
                                            <p class="txt1">The best online source of movies</p>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 1060px;">
                                        <div class="item">
                                            <p class="txt1">Don't be bored! Entertain yourself!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                    <div class="owl-page"><span class=""></span></div>
                                    <div class="owl-page active"><span class=""></span>
                                    </div><div class="owl-page"><span class=""></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="container">
                    <?php echo $this->Flash->render(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>

        <!--footer-->
        <footer>
            <div class="footer_priv">
                <div class="container">
                    <div class="row">
                        <div class="grid_3">
                            <h1>
                                <?php
                                    echo $this->Html->link(
                                        $this->Html->image('logo_footer.png', array('alt' => 'logo')),
                                        '/', array(
                                            'escape' => false,
                                        )
                                    );
                                ?>
                            </h1>
                        </div>
                        <div class="grid_6">
                            <ul class="list_footer">
                                <li class="current"><a href="index.html">New releases</a></li>
                                <li><a href="index-1.html">Most popular</a></li>
                                <li><a href="index-2.html">Genres</a></li>
                                <li><a href="index-3.html">Blog</a></li>
                                <li><a href="index-4.html">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="grid_3">
                            <p class="txt_priv"><span class="fw600 color1">OMOVI  </span> © <span id="copyright-year">2017</span> | <a href="index-5.html" class="link1">Privacy Policy</a><br><!--{%FOOTER_LINK} --></p>
                            <ul class="soc_icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
