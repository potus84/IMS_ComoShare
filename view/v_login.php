<?php
session_start();
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

    <style>

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
        }

        h2{
            text-align: center;
            color: #017572;
        }
    </style>

</head>

<body>

<?php
$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM ims.user WHERE username = '" . $_POST['username'] .
        "' AND password = '" . $_POST['password'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = mysqli_fetch_row($result);
        echo '<pre>'; print_r($row); echo '</pre>';

        $name = $row[3] . " " . $row[4];

        $_SESSION['name'] = $name;
        $_SESSION['user_id'] = $row[0];

        header("Location: welcome.php");
        exit();

    } else {
        echo "Incorrect username or password";
    }


}
?>


<?php
include('view/header.php');
?>

<div class="content container">

    <h2>Enter Username and Password</h2>

    <div class = "container">

        <form class = "form-signin" role = "form"
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
              ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
                   name = "username" placeholder = "username"
                   required autofocus></br>
            <input type = "password" class = "form-control"
                   name = "password" placeholder = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                    name = "login">Login</button>
        </form>

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
