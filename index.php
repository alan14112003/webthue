<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/index.css">
    <script src="https://kit.fontawesome.com/08c104de7d.js" crossorigin="anonymous"></script>
    <title>Bài tập thực hành</title>
</head>

<body>
    <header class="desktop">
        <div class="container">
            <ul class="navbar">
                <li class="navbar_left">Bài tập thực hành</li>
                <li class="navbar_right">
                    <ul class="navbar">
                        <li class="nav_item"><a class="nav_link" href="https://www.google.com.vn">Google</a></li>
                        <li class="nav_item"><a class="nav_link" href="https://dantri.com.vn/">Dân trí</a></li>
                        <li class="nav_item"><a class="nav_link" href="./show_date_time.php">Thời gian hiện tại</a></li>
                        <?php if (isset($_SESSION['user'])) : ?>
                            <li class="nav_item"><a class="nav_link"> <?php echo $_SESSION['user']->name; ?> </a></li>
                            <li class="nav_item"><a class="nav_link" href="./src/php/logout.php">Đăng xuất</a></li>
                        <?php else : ?>
                            <li class="nav_item"><a class="nav_link register_btn">Đăng ký</a></li>
                            <li class="nav_item"><a class="nav_link login_btn">Đăng nhập</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <header class="mobile">
        <div class="container">
            <ul class="navbar">
                <li class="navbar_left">Bài tập thực hành</li>
                <label for="check_menu" class="bar"><i class="fa-solid fa-bars"></i></label>
            </ul>
            <input type="checkbox" class="check_menu" id="check_menu">
            <label for="check_menu" class="menu_box">
                <ul class="navbar_mob">
                    <li class="nav_item close"><label for="check_menu"><i class="fa-solid fa-xmark"></i></label></li>
                    <li class="nav_item"><a class="nav_link" href="https://www.google.com.vn">Google</a></li>
                    <li class="nav_item"><a class="nav_link" href="https://dantri.com.vn/">Dân trí</a></li>
                    <li class="nav_item"><a class="nav_link" href="">Thời gian hiện tại</a></li>
                    <?php if (isset($_SESSION['user'])) : ?>
                            <li class="nav_item"><a class="nav_link"> <?php echo $_SESSION['user']->name; ?> </a></li>
                            <li class="nav_item"><a class="nav_link" href="./src/php/logout.php">Đăng xuất</a></li>
                    <?php else : ?>
                            <li class="nav_item"><a class="nav_link register_btn">Đăng ký</a></li>
                            <li class="nav_item"><a class="nav_link login_btn">Đăng nhập</a></li>
                    <?php endif; ?>
                </ul>
            </label>
        </div>
    </header>
    <main>
        <div class="container">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="message error_message">
                <?php echo $_SESSION['error']; ?>
            </div>
        <?php unset($_SESSION['error']); endif; ?> 

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="message success_message">
                <?php echo $_SESSION['success']; ?>
            </div>
        <?php unset($_SESSION['success']); endif; ?> 
        </div>
        <div class="form login_bg">
            <div class="form_box form_login">
                <span class="form-close"><i class="fa-solid fa-xmark"></i></span>
                <h2 class="title">Đăng nhập</h2>
                <?php require_once './login.php'; ?>
            </div>
        </div>
        <div class="form register_bg">
            <div class="form_box form_register">
                <span class="form-close"><i class="fa-solid fa-xmark"></i></span>
                <h2 class="title">Đăng ký</h2>
                <?php require_once './register.php'; ?>
            </div>
        </div>
    </main>
    <script src="./src/js/script.js"></script>
</body>

</html>