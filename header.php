<link rel="stylesheet" type="text/css" href="css/index.css">


<div class="header container-fluid">
    <div class="site-logo col-sm-6 col-xs-12">
        <a href="index.php" class="site-title"><img src="images/logo.png" alt="logo-commoshare"></a>
    </div>

    <!-- <div class="register-login col-sm-6">
        <div class="sign-in col-sm-3 col-xs-12">
            Sign in
        </div>
        <div class=" sign-in col-sm-3 col-xs-12">
            Sign up
        </div>
    </div> -->
    <div class="register-login col-xs-12">
        <ul>
            <li>
                <a href="#" class="sign-in">Sign in</a>
            </li>
            <li>
                <a href="#" class="sign-in">Sign up</a>
            </li>
        </ul> 

    </div>   

</div>
<div class="menu-wrap container-fluid">
    <nav class="menu clearfix">
        <ul class="main-menu clearfix">
            <li href="#"><a>Homepage</a></li>
            <li href="#"><a>Accommodation Type</a></li>
            <li href="#"><a>Location</a></li>
            <li href="#"><a>Promotion</a></li>
        </ul>
    </nav>
    <a href="#" class="toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <nav class="menu-mobile clearfix">
        <ul class="main-menu clearfix">
            <li href="#"><a>Homepage</a></li>
            <li href="#">
                <a href="#">Location<span class="arrow">&#9660;</span></a>
            </li>
            <li href="#"><a>Promotion<span class="arrow">&#9660;</span></a>
            </li>
        </ul>
    </nav>
    <script type="text/javascript">
        $(window).on('resize', function() {
            if ($(window).width() > 992) {
                $(".menu-mobile").hide();
            } 
        });

        $(".toggle-menu").click(function(){
            $(".menu-mobile").toggle();
        });
    </script>
</div>