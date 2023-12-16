<?php include '../templates/header.php';
?>
<h6 style="margin-bottom: 40px">Trang chủ > Quên mật khẩu </h6>
<div class="create_admin" style="margin-bottom: 300px">
    <h1 class="Title_Admin_create_form">Bạn đã quên mât khẩu</h1>
    <form action="forgot_password.php" id='form-6' method='POST'>
        <div class="form_field">
            <label for="" class="name_form_field">Nhập email tài khoản: </label>
            <input type="text" class="textfile" id="email" name="quenMK" style="width: 400px;">
            <span class="error_message"></span>
        </div>
        <div class="button">
            <input type="submit" value="Đặt lại mật khẩu" class="button_add_admin" style="width: 150px" />
        </div>

    </form>
    <i>*Mật khẩu mới sẽ được gửi vào email của bạn.</i>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-6',
            formGroupSelector: '.form_field',
            errorSelector: '.error_message',
            rules: [
                Validator.isRequired('#email', 'Vui lòng nhập Email!'),
                Validator.isEmail('#email'),
            ],
            onSubmit: function (data) {
                // Call API
                //console.log(data);
            }
        });
    });
</script>
<?php include '../templates/footer.php' ?>