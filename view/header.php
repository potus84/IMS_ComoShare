<link rel="stylesheet" type="text/css" href="css/index.css">

    <div class="site-logo col-sm-12">
        <a href="index.php" class="site-title"><img src="images/logo.png" alt="logo-commoshare"></a>
    </div>
    <div class="header container-fluid">
    

    <?php
        if(isset($_SESSION['name'])) {
            echo "Logged in as " . $_SESSION['name'] . " USERID: " . $_SESSION['user_id'];
            echo "<div class='register-login col-sm-3 col-sm-offset-9'>
                    <span><a href='logout.php' class='sign-in' style='padding:10px'><p class='fa fa-sign-in' aria-hidden='true' >Logout</p></a></span>
                  </div>";
        }
        else {
            echo "<div class='register-login col-sm-3 col-sm-offset-9'>
                    <span><a href='login.php' class='sign-in' aria-hidden='true' style='padding:10px'><p class='fa fa-sign-in'>Sign in</p></a></span>
                    <span><a href='registerForm.php' class='sign-in' aria-hidden='true' style='padding:10px'><p class='fa fa-user-o'>Sign up</p></a></span>
                  </div>";
        }

    ?>
    <?php 
    if(isset($_SESSION['admin']) && $_SESSION['admin']==1) 
        echo '<style>#userTab{display: none} #adminTab{display: inline}</style>';
    else echo '<style>#userTab{display: inline} #adminTab{display: none}</style>';
    ?>

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
            <li href="#" id="userTab"><a href="myReservation.php">My Reservation</a>
            </li>
            <li href="#" id="adminTab"><a href="reservationBackOffice.php">Manage Reservations</a>
            </li>
            <li href="#" id="adminTab"><a href="productBackOffice.php">Manage Accommodations</a>
            </li>
        </ul>
    </nav>
    <a href="#" class="toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <nav class="menu-mobile clearfix">
        <ul class="main-menu clearfix">
            <li href="#"><a href="index.php">Homepage</a></li>
            <li href="#">
                <a href="#">Accommodation Type<span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                    <li> <a href="moreAccom.php?size=1" class="active">Single</a></li>
                    <li> <a href="moreAccom.php?size=2" class="active">Double bed</a></li>
                    <li> <a href="moreAccom.php?size=3" class="active">Triple Single Beds</a></li>

                </ul>
            </li>
            <li href="#">
                <a href="#">Location<span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                    <li> <a href="moreAccom.php?loc=Porto" class="active">Porto</a></li>
                    <li> <a href="moreAccom.php?loc=Lisbon" class="active">Lisbon</a></li>
                    <li> <a href="moreAccom.php?loc=Coimbra" class="active">Coimbra</a></li>
                    <li> <a href="moreAccom.php?loc=Sintra" class="active">Sintra</a></li>

                </ul>
            </li>
            <li href="#">
                <a href="myReservation.php" id="userTab">My reservations</a>
            </li>
            <li href="#">
                <a href="productBackOffice.php" id="adminTab">Manage Accommodations</a>
            </li>
            <li href="#">
                <a href="reservationBackOffice.php" id="adminTab">Manage Reservations</a>
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