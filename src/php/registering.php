<?php 
require_once "./connect.php";

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');

session_start();

if (empty($name) ||empty($email) || empty($phone) || empty($password) || empty($address)) {
    $error = 'Bạn phải nhập đẩy đủ tất cả các trường';
    $_SESSION['error'] = $error;
    session_write_close();

    header('location: /index.php');
} else {

    $findUserByEmail = "Select * from users where email = '$email'";
    $user = mysqli_fetch_row(query($findUserByEmail));
    if (isset($user)) {
        $error = 'Email đã tồn tại';
        $_SESSION['error'] = $error;
        session_write_close();
    
        header('location: /index.php');
    } else {
        
        $createUser = "Insert into users (name, email, phone, password, address) 
        values('$name', '$email', '$phone', '$password', '$address')";
        execute($createUser);
        
        $success = 'Đã đăng ký thành công';
        $_SESSION['success'] = $success;
        $findNewUser = "Select * from users where email = '$email'";
        $newUser = mysqli_fetch_object(query($findNewUser));
        $_SESSION['user'] = $newUser;
        
        session_write_close();
        
        header('location: /index.php');
        
    }
}
