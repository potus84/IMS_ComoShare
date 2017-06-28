<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    if (isset($_SESSION['user_id']))
    {
    }
    else {
        header("Location: login.php");
    }
?>

<html>
<head>
    <title>CommoShare - Login page</title>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="Swiper-3.3.1/dist/css/swiper.min.css">
    <link rel="stylesheet" href="bootstrap-star-rating/css/star-rating.css">
    <link rel="stylesheet" href="bootstrap-star-rating/themes/krajee-svg/theme.css">
    <link rel="stylesheet" href="css/index.css">
    <!--Script-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

<body>
<?php
include('view/header.php');
?>

<div class="content container">

        <?php
         echo "<p class='top-product'>Welcome " .  $_SESSION["name"] . "! </p>";
         echo "<p class='top-product'>As the admin role " .  $_SESSION["admin"] . "! </p>";
        ?>

    </div>




</div>

<!--Footer-->
<?php
include('view/footer.php');

?>

<!-- Script -->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="Swiper-3.3.1/dist/js/swiper.min.js"></script>
<script src="bootstrap-star-rating/js/star-rating.js"></script>
<script src="bootstrap-star-rating/themes/krajee-svg/theme.js"></script>
<script src="bootstrap-star-rating/js/locales/LANG.js"></script>




</body>
</html>
