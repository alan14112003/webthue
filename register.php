<style>
    form {
        max-width: 300px;
    }
    .form-input {
        margin: 8px;
    }
    input {
        width: 300px;
        outline: none;
        border: 1px solid #333;
        padding: 12px 12px;    
        border-radius: 5px;
    }
    button {
        padding: 8px 12px;
        display: block;
        margin: auto; 
        border-radius: 3px;
    }
</style>
<form action="./src/php/registering.php" method="POST">
    
    <label for="name">Tên</label>
    <div class="form-input">
        <input type="text" name="name" id="name" require>
    </div>
    <label for="email">Email</label>
    <div class="form-input">
        <input type="email" name="email" id="email" require>
    </div>
    <label for="phone">Số điện thoại</label>
    <div class="form-input">
        <input type="tel" name="phone" id="phone" require>
    </div>
    <label for="password">Mật khẩu</label>
    <div class="form-input">
        <input type="password" id="password" name="password" require>
    </div>
    <label for="address">Địa chỉ</label>
    <div class="form-input">
        <input type="text" name="address" id="address" require>
    </div>
    <div class="form-input">
        <button>Đăng nhập</button>
    </div>
</form>