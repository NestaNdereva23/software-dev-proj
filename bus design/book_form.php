<?php

    $connection = mysqli_connect('localhost','root','','marcopolo_db');

    if(isset($_POST['send'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $from_location = $_POST['from_location'];
        $to_location = $_POST['to_location'];
        $seats = $_POST['seats'];
        $departure = $_POST['departure'];
        $payment_mode = $_POST['payment_mode'];

        $_REQUEST = " insert into book_form(firstname, lastname, email, phone, from_location, to_location, seats, departure, payment_mode) 
        values('$firstname','$lastname','$email','$phone','$from_location','$to_location','$seats','$departure','$payment_mode')";

        mysqli_query($connection, $_REQUEST);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }

    ?>