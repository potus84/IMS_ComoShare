<link rel="stylesheet" type="text/css" href="css/index.css">


<div class="header container-fluid">
    <div class="site-logo col-sm-6">
        <a href="index.php" class="site-title"><img src="images/logo.png" alt="logo-commoshare"></a>
    </div>

    <div class="register-login col-sm-3">
        <span><a href="login.php" class="sign-in fa fa-sign-in" aria-hidden="true">Sign in</a></span>
        <span><a href="register.php" class="sign-in fa fa-user-o" aria-hidden="true">Sign up</a></span>
    </div>
    <!-- <div class="register-login col-sm-3">
        <ul>
            <li>
                <span><a href="" class="sign-in fa fa-sign-in" aria-hidden="true">Sign in</a></span>
            </li>
            <li>
                <span><a href="" class="sign-in fa fa-user-o" aria-hidden="true">Sign up</a></span>
            </li>
        </ul> 

    </div>    -->

</div>
<div class="menu-wrap container-fluid">
    <nav class="menu clearfix">
        <ul class="main-menu clearfix">
            <li><a href="index.php">Homepage</a></li>
            <li href="#"><a>Accommodation Type</a>
                <ul class="sub-menu">
                    <li> <a href="moreAccom.php?size=1" class="active">Single</a></li>
                    <li> <a href="moreAccom.php?size=2" class="active">Double bed</a></li>
                    <li> <a href="moreAccom.php?size=3" class="active">Triple Single Beds</a></li>

                </ul>
            </li>

            <li href="#"><a>Location</a>
                <ul class="sub-menu">
                    <li> <a href="moreAccom.php?loc=Porto" class="active">Porto</a></li>
                    <li> <a href="moreAccom.php?loc=Lisbon" class="active">Lisbon</a></li>
                    <li> <a href="moreAccom.php?loc=Coimbra" class="active">Coimbra</a></li>
                    <li> <a href="moreAccom.php?loc=Sintra" class="active">Sintra</a></li>

                </ul>
                
            </li>
            <li href="#"><a href="myReservation.php">My Reservation</a>
            </li>
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
            <li href="#"><a>My Reservations<span class="arrow">&#9660;</span></a>
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