<?php include '../templates/header.php';
?>

<h4>Tất cả sản phẩm</h4>
<form class="product_search">
    <button class="icon_search" type="submit" style="width: 40px; height: 40px;">
        <i class="fa-solid fa-filter"></i>
    </button>
    <div class="product_search_item search_search">
        <h3>LOẠI SẢN PHẨM </h3>
        <div>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="product_search_item_list">
            <ul>
                <li>
                    <input type='checkbox'>Thức ăn cho chó
                </li>
                <li>
                    <input type='checkbox'>Thức ăn cho Mèo
                </li>
                <li>
                    <input type='checkbox'>Sữa tắm
                </li>
                <li>
                    <input type='checkbox'>Pate
                </li>
            </ul>
        </div>
    </div>
    <div class="product_search_item search_search">
        <h3>GIÁ</h3>
        <div>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="product_search_item_list search_search_search" style="height: 150px;">
            <div class="input_saerch" style="display: flex;  justify-content: space-around; align-items: center">
                <input type="text" class="textfile" style="width: 70px;" name='giaDau'>
                <h5 style="margin:0"> đến </h5>
                <input type="text" class="textfile" style="width: 70px;" name='giaCuoi'>
            </div>
        </div>
    </div>
    <div class="product_search_item search_search">
        <h3>THƯƠNG HIỆU</h3>
        <div>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="product_search_item_list">
            <ul>
                <li>
                    <input type='checkbox'>Whiskas
                </li>
                <li>
                    <input type='checkbox'>Nexgard
                </li>
                <li>
                    <input type='checkbox'>ANF
                </li>
                <li>
                    <input type='checkbox'>Nutrience
                </li>
                <li>
                    <input type='checkbox'>Pedigree
                </li>
            </ul>
        </div>
    </div>
</form>
<div class="divider">

</div>
<div class="product_list">
    <div class="grid">
        <div class="row">
            <div class='product_item'>
                <img src='../assets/img/sanpham/hat-cho-anf-6free.png'>
                <div class='product_thuonghieu'>
                    <h5>Nutrience</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/1.php'>
                        <h5 style='color:black;'>Hạt Chó Trên 6 Tháng ANF 6Free Hữu Cơ</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 80.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>

            </div>


            <div class='product_item'>
                <img src='../assets/img/sanpham/hat-nutrience-infusion-small-adult-cho-lon-giong-nho-paddy-1_1066x.png'>
                <div class='product_thuonghieu'>
                    <h5>Pedigree</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/2.php'>
                        <h5 style='color:black;'>Hạt Cho Chó Nutrience Subzero Fraser Valley Dog</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 150.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>

            </div>

            <div class='product_item'>
                <img src='../assets/img/sanpham/pate-lon-whiskas-cho-meo-truong-thanh-400g-paddy-1.png'>
                <div class='product_thuonghieu'>
                    <h5>ANF</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/4.php'>
                        <h5 style='color:black;'>Pate Lon Whiskas Cho Mèo Trưởng Thành 400g</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 38.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>
            </div>
            <div class='product_item'>
                <img src='../assets/img/sanpham/pate_cho_meo_con_dang_kem_nekko_kitten_mousse_70g.png'>
                <div class='product_thuonghieu'>
                    <h5>Whiskas</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/3.php'>
                        <h5 style='color:black;'>Pate Cho Mèo Con Dạng Kem Nekko Kitten Mousse 70g</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 140.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>

            </div>



            <div class='product_item'>
                <img src='../assets/img/sanpham/thit_tuoi_hi_raw_cat_food_cho_meo_an_song.png'>
                <div class='product_thuonghieu'>
                    <h5>Monge</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/5.php'>
                        <h5 style='color:black;'>Thịt Tươi Hi Raw CAT Food Cho MÈO Ăn Sống</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 75.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>
            </div>

            <div class='product_item'>
                <img src='../assets/img/sanpham/hat-pedigree-cho-truong-thanh-vi-bo-rau-cu-paddy-1.png'>
                <div class='product_thuonghieu'>
                    <h5>Whiskas</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/6.php'>
                        <h5 style='color:black;'>Pate Kit Cat Sữa Dê Bổ Sung Canxi Cho Mèo (Lon 85g)</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 25.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>
            </div>



            <div class='product_item'>
                <img src='../assets/img/sanpham/pate-meo-ciao-60g.png'>
                <div class='product_thuonghieu'>
                    <h5>Monge</h5>
                </div>
                <div class='product_name'>
                    <a href='../product/7.php'>
                        <h5 style='color:black;'>Pate Mèo Ciao 6 Vị Thơm Ngon 60g</h5>
                    </a>
                </div>
                <div class='product_price' style='display: flex'>

                    <h5 style='color: red;'> 15.000đ
                    </h5>
                </div>

                <button class='button_product' onclick='addToCart(this)'>Thêm vào giỏ
                    hàng
                </button>
            </div>
        </div>
    </div>


</div>

</div>
<?php include '../templates/footer.php' ?>