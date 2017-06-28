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
        <title>CommoShare - Manage Reservation</title>
        <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
        <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="Swiper-3.3.1/dist/css/swiper.min.css">
        <link rel="stylesheet" href="bootstrap-star-rating/css/star-rating.css">
        <link rel="stylesheet" href="bootstrap-star-rating/themes/krajee-svg/theme.css">
        <link rel="stylesheet" href="css/index.css">
        
    </head>

    <body>
        <!--     Header -->
        <?php
            include('view/header.php');
        ?>
        
        <!--Content-->
        <div class="content container">
            <p class="top-product">ALL THE RESERVATIONS</p>
            <?php 
                
                if(is_array($reserves) || is_object(reserves)){
                    foreach ($reserves as $reserve) {
                    $extra_db = new Accommodation();
                    $house = $extra_db->getAccommodation($reserve['accommodation_id']);
            ?>
            <div class="product-block col-sm-4 col-xs-12">
                <div class="list-top-product col-sm-12 col-xs-12">
                    <div class='product-item  col-sm-12'>
                        <div class='bg-img col-sm-12'>
                            <div class='ft-img col-sm-12' style='background-image:url(<?php echo $house['img']?>)'></div>
                        </div>
                        <p class='title col-sm-12'><?php echo $house['roomname']?></p>
                        <div>
                            Check-in: 
                            <p><?php echo $reserve['check_in']?></p>
                        </div>
                        <div>
                            Check-out: 
                            <p><?php echo $reserve['check_out']?></p>
                        </div>
                        <div>
                            Status: 
                            <p>
                            <?php 
                                if($reserve['status']==NULL){
                                    echo 'Waiting for approve';
                                }else if($reserve['status']==1){
                                    echo 'Approved';
                                }else if($reserve['status']==-1){
                                    echo 'Cancelling';
                                }

                            ?>
                                
                            </p>
                        </div>
                        <?php 
                                if($reserve['status']==NULL){ ?>
                        <div>
                            <a href="reservationBackOffice.php?op=approve&id=<?php echo $reserve['id']?>" >Approve</a>
                        </div>
                        <?php }else if($reserve['status']==-1){ ?>
                            <a href="reservationBackOffice.php?op=delete&id=<?php echo $reserve['id']?>" class="quick-view">Delete</a>
                        <?php }?>
                        
                    </div>
                </div>


            </div>
            <?php 
                
                } 
            }
            ?>

     
        </div>
        <?php
            include('view/footer.php');
        ?>
        
        <!-- Script -->
        <script src="js/jquery-3.1.0.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="Swiper-3.3.1/dist/js/swiper.min.js"></script>
        <script src="bootstrap-star-rating/js/star-rating.js"></script>
        <script src="bootstrap-star-rating/themes/krajee-svg/theme.js"></script>
        <script src="bootstrap-star-rating/js/locales/LANG.js"></script>


        <script>
            $(window).on('resize', function() {
                if ($(window).width() > 992) {
                    $(".menu-mobile").hide();
                } 
            });

            $(".toggle-menu").click(function(){
                $(".menu-mobile").toggle();
            });

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


        <script type="text/javascript">
            $(function() 
              {
                //----- OPEN
                $('[data-popup-open]').on('click', function(e)  {
                    var targeted_popup_class = jQuery(this).attr('data-popup-open');
                    $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

                    e.preventDefault();
                });

                //----- CLOSE
                $('[data-popup-close]').on('click', function(e)  
                                           {
                    var targeted_popup_class = jQuery(this).attr('data-popup-close');
                    $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

                    e.preventDefault();
                });
            });
            $(document).mouseup(function (e) 
                                {
                if ($('.popup').is(e.target))
                {
                    $(".popup").fadeOut(350);
                }
            });


            $("a[href='#top']").click(function() {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#go-top').fadeIn();
                } else {
                    $('#go-top').fadeOut();
                }
            });

            $("#input-id").rating({starCaptions:{}});

        </script>


    </body>
</html>
