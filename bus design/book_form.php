<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $seats = $_POST['seats'];
        $departure = $_POST['departure'];

        $_REQUEST = " insert into book_form(name, email, phone, address, location, seats, departure) 
        values('$name','$email','$phone','$address','$location','$seats','$departure')";

        mysqli_query($connection, $_REQUEST);

        header('location:book.php');
    }else{
        echo 'something went wrong try again';
    }

    ?>