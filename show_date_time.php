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
                        <li class="nav_item"><a class="nav_link" href="">Đăng ký</a></li>
                        <li class="nav_item"><a class="nav_link" href="">Đăng nhập</a></li>
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
                    <li class="nav_item"><a class="nav_link" href="">Đăng ký</a></li>
                    <li class="nav_item"><a class="nav_link" href="">Đăng nhập</a></li>
                </ul>
            </label>
        </div>
    </header>
    <main>
        <?php 
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date =  date('d/m/Y - H:i:s');
        ?>
        <h2 style="text-align: center;"><?php  echo $date; ?></h2>
    </main>
</body>

</html>