<?php
$fileName = basename($_SERVER['SCRIPT_FILENAME']);
echo $fileName;
$rootPath = ".";
if ($fileName != "index.php") {
    $rootPath = "..";
}
echo $rootPath;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phụ kiện thú cưng</title>
    <link rel="icon" href=<?php echo $rootPath . "/assets/img/logo/header_logo.png" ?> type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="<?php echo $rootPath . "/assets/css/base.css" ?> ">
    <link rel="stylesheet" href="<?php echo $rootPath . "/assets/css/main2.css" ?>">
    <link rel="stylesheet" href="<?php echo $rootPath . "/assets/css/grid.css" ?>">
    <link rel="stylesheet" href="<?php echo $rootPath . "/assets/css/responsive.css" ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,600;0,700;0,800;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        a {
            text-decoration: none;
        }

        a:link,
        a:visited {
            color: #FFFFFF;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<div class="app">
    <div id="notifacation_all">
        <h6>Thêm sản phẩm thành công</h6>
    </div>
    <div class="gird">
        <div class="header">
            <div class="header_row1">
                <div class="header_row1_left">
                    <div class="logo">
                        <a href="">
                            <img src="<?php echo $rootPath . "/assets/img/logo/logopaddy.png"; ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="header_row_right">
                    <form action="<?php echo $rootPath ?>/pages/search_page.php" class="search" method="GET"
                        enctype="multipart/form-data">
                        <input type="text" placeholder="Tìm kiếm sản phẩm" name="SearchString">
                        <button class="search_icon" style="border: none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <div class="hotline">
                        <h5 class="name_icon">Hotline</h5>
                        <h5 class="hotline_sdt" style="font-weight: 600;">0347693333</h5>
                    </div>

                    <a href="<?php echo $rootPath . "/pages/login.php"; ?>" class="h" id="login_user">
                        <div>
                            <div class="name_icon">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <h5>
                                Đăng nhập
                            </h5>
                        </div>
                    </a>

                    <div class="h" id="cart">
                        <a href="#">
                            <div class="name_icon catalog">
                                <i class="fa-solid fa-cart-shopping"></i>

                            </div>
                            <h5>Giỏ Hàng</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="<?php echo $rootPath; ?>">Trang chủ</a>
                    </li>
                    <li>
                        <a href="<?php echo $rootPath . "/pages/contact_to_shop_page.php"; ?>">Liên hệ</a>
                    </li>
                    <li>
                        <a href="<?php echo $rootPath . "/pages/product_page.php"; ?>">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="<?php echo $rootPath . "/pages/brand.php"; ?>">Thương hiệu</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="body" style="margin-top: 150px; min-width: 700px;">