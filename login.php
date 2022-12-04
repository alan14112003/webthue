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
<form action="./src/php/logining.php" method="POST">

    <label for="email_lg">Email</label>
    <div class="form-input">
        <input type="email" name="email" id="email_lg" require>
    </div>

    <label for="password_lg">Mật khẩu</label>
    <div class="form-input">
        <input type="password" id="password_lg" name="password" require>
    </div>
    <div class="form-input">
        <button>Đăng nhập</button>
    </div>
</form>