<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<html>
<head>
    <title>CommoShare - Main page</title>
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
    <!--Swiper-->
    <div class="slider swiper-container">
        <div class="swiper-wrapper">
            <a href="" class="swiper-slide" style="background-image:url(images/room1.jpg)"></a>
            <a href="" class="swiper-slide" style="background-image:url(images/room2.jpg)"></a>
            <a href="" class="swiper-slide" style="background-image:url(images/room1.jpg)"></a>
        </div>
        
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next slider-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        <div class="swiper-button-prev slider-btn"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div>
        <!--New Swiper
        <div id="shuffle" class="slide swiper-container">
            <a href="" class="swiper-slide" style="background-image:url(images/room1.jpg)"></a>
            <a href="" class="swiper-slide" style="background-image:url(images/room2.jpg)"></a>
            <a href="" class="swiper-slide" style="background-image:url(images/room1.jpg)"></a>
        </div> -->

        <!--Content-->
        <div class="content container">
            <p class="top-product">TRENDING ACCOMODATIONS</p>
            <?php 
                $i=0;
                foreach ($houses as $house) {
                $i++;
            ?>
            <div class="product-block col-sm-4 col-xs-12">
                <div class="list-top-product col-sm-12 col-xs-12">
                    <div class='product-item  col-sm-12'>
                        <div class='bg-img col-sm-12'>
                            <div class='ft-img col-sm-12' style='background-image:url(<?php echo $house['img']?>)'></div>
                        </div>
                        <p class='title col-sm-12'><?php echo $house['roomname']?></p>
                        <div class='price col-sm-12'>
                            <p class="price-1"><?php echo $house['price']?>&euro;</p>
                            <p>Available</p>
                        </div>
                        <a href="product-detail.php?id=<?php echo $house['id']?>" class="quick-view">Details</a>
                        <div class="rating">
                             <!-- <input id='input-id6' name='input-4' class='rating rating-loading' data-min='0' data-max='5' data-step='1' data-show-clear='false' data-show-caption='false' data-size='xs'> -->
                        </div>
                    </div>
                </div>


            </div>
            <?php 
                if($i==3){
                    break;
                }

                } 
            ?>
        </div>
        <div class="container-fluid clearfix" id="moreAccom">
            <a href="moreAccom.php">
                <i class="fa fa-angle-down"></i>
            </a>    

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


    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: 2500,
            loop: true,
            autoplayDisableOnInteraction: false
        });
    </script>

</body>
</html>
