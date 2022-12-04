<?php
require_once "./connect.php";

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

session_start();

if (empty($email) || empty($password)) {
    $error = 'Bạn phải nhập đẩy đủ tất cả các trường';
    $_SESSION['error'] = $error;
    session_write_close();

    header('location: /index.php');
} else {

    $findUserByEmail = "Select * from users where email = '$email'";

    $user = mysqli_fetch_object(query($findUserByEmail));
    if (is_null($user)) {
        $error = 'Email bạn nhập không tồn tại';
        $_SESSION['error'] = $error;
        session_write_close();

        header('location: /index.php');
    } else {
        
        if ($password !== $user->password) {
            $error = 'Nhập sai mật khẩu';
            $_SESSION['error'] = $error;
            session_write_close();

            header('location: /index.php');
        } else {

            $_SESSION['user'] = $user;
            session_write_close();

            header('location: /index.php');
        }
    }
}
