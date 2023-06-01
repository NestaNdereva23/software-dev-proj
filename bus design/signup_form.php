<?php

    $connection = mysqli_connect('localhost','root','','marcopolo_db');

    if(isset($_POST['send'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $_REQUEST = " insert into action_page(firstname, lastname, email, password) 
        values('$firstname','$lastname','$email','$password')";

        mysqli_query($connection, $_REQUEST);

        header('location:home.php');
    }else{
        echo 'something went wrong try again';
    }

    ?>