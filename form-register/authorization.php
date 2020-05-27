<?php 
    require 'header.php'; 
    require "connect.php"; 
    
?>
<div class="conteiner" style="width: 500px; margin: 50px auto;">
    <div class="row">
        <div class="col">
            <h2>Авторизация</h2>
            <input type="text" name="login" class="form-control" id="login" placeholder="Enter login"><br>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password"><br>
            <a href="reestablish.php" class="list-group-item-action">Забыли пароль?</a></br></br>
            <a href="register.php" class="btn btn-success">Регистрация</a></br></br>
            <button class="btn btn-primary" id="authorization">Авторизация</button>
        </div>
    </div>
</div>