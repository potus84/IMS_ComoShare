<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<html>
<head>
    <title>CommoShare - Register page</title>
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
    <p class="top-product">REGISTRATION</p>

    <form class="form-horizontal" action="register.php" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <input class="col-sm-6" type="text" name="username" value="" maxlength="30" required>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <input class="col-sm-6" type="password" name="password" value="" maxlength="30" required>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="firstname">First name:</label>
            <input class="col-sm-6" type="text" name="firstname" value="" maxlength="30" required>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastname">Last name:</label>
            <input class="col-sm-6" type="text" name="lastname" value="" maxlength="30" required>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <input class="col-sm-6" type="text" name="email" value="" maxlength="50" required>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Phone number:</label>
            <input class="col-sm-6" type="text" name="phone" value="" maxlength="50" required>
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>


</div>

<!--Footer-->
<?php
include('view/footer.php');

?>

<!-- Script -->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-star-rating/js/star-rating.js"></script>
<script src="bootstrap-star-rating/themes/krajee-svg/theme.js"></script>
<script src="bootstrap-star-rating/js/locales/LANG.js"></script>


</body>
</html>
