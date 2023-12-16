<?php
include '../templates/header.php';
?>
<div class="login_flex_right_title">
    <h6>Đăng Nhập</h6>
</div>
<form action="login.php" class="create_admin_form" id="form-2" method="POST">
    <div class="form_field">
        <label for="taikhoan" class="name_form_field">Tài khoản : </label>
        <input type="text" required class="textfile" name="tendn" id="taikhoan" value="">
        <span class="error_message"></span>
    </div>
    <div class="form_field">
        <label for="matkhau" class="name_form_field">Mật khẩu : </label>
        <input type="password" required class="textfile" id="matkhau" name="matkhau">
        <span class="error_message">
        </span>
    </div>
    <div class="form_field" style="min-height: 10px">
        <span class="error_message" style="font-weight: bold;">
        </span>
    </div>
    <button type="submit" class="button_add_admin" class="form-submit" style="width: 150px">Đăng nhập</button>
    <!-- <input  value="Đăng Nhập"  style="width: 150px" /> -->
    <a href="forgot_password.php" class="qmk" style="display: block; margin-left: 10px; color: black">Quên
        mật khẩu?</a>
    <a href="register.php" style="text-decoration: none; color:black">
        <input type="button" value="Tạo Tài Khoản" class="button_add_admin" style="width: 150px; margin-bottom: 50px" />
    </a>
</form>
</div>
<script src="<?php echo $rootPath ?>/assets/js/app.js"></script>
<?php include '../templates/footer.php' ?>