<?php
/**
 *
 */
class cRegister
{

    public function  makeRegistration() {


        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $conn = new mysqli("localhost", "root", "", "ims");


        $sql = "INSERT INTO ims.user (username, password, firstname, lastname, email, phone)
              VALUES ( '". $username . "', '"
            . $password . "', '"
            . $firstname . "', '"
            . $lastname . "', '"
            . $email . "', '"
            . $phone . "')";

        if ($conn->query($sql) === TRUE) {
            echo 'Registration successful, redirecting to login page.';
            header('Refresh: 2; URL = login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }



        //header('Location: '.'login.php');



    }





}

?>