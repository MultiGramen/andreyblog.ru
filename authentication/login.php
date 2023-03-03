<?php 
    require_once '../components/connection.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://andreyblog.ru:7890/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Вход</title>
</head>
<body>
<div class="wrapper">
    <?php 
        require_once '../components/header.php';
    ?>
    <div id="content" style="display: grid; align-items: center;">
        <div class="authentication">
            <div class="authentication_form">
                <form action="#">
                    <p>
                        <label for="">
                            <input class="authentication_form_label" class="username" name="login" type="text" placeholder="Логин" required oninvalid="this.setCustomValidity('Введите логин')" oninput="setCustomValidity('')" />
                        </label>
                    </p>
                    <p>
                        <label for="">
                            <input class="authentication_form_label" class="pass" name="pass" type="password" placeholder="Пароль" required oninvalid="this.setCustomValidity('Введите пароль')" oninput="setCustomValidity('')" />
                        </label>
                    </p>
                    <p>
                        <label for="">
                            <input type="submit" value="Войти">
                        </label>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php
        require_once '../components/footer.php';
    ?>
</div>
</body>
</html>