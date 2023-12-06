<?php



$connection = mysqli_connect('localhost:3000','root','','from_db');


if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $permanant_address = $_POST['permanant_address'];
    $id = $_POST['id'];
    $vehicle_number = $_POST['vehicle_number'];
    $chess_no = $_POST['chess_no'];
    $birth = $_POST['birth'];

    $request = " insert into order_form(name,	email,	phone,	address,	permanant_address,	id,	vehicle_number,	chess_no, birth) values
    ('$name', '$email', '$phone', '$address', '$permanant_address', '$id', '$vehicle_number', '$chess_no' , '$birth')";

    mysqli_query($connection, $request);

    mysqli_query($connection, $request);

    header('location:order.php');

     
}else{
    echo 'something went wrong try again';
}


?>