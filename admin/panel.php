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
    <title>Главная панель</title>
</head>
<body>
    <div class="wrapper">
        <?php
            require_once '../components/header.php';
        ?>
        <div class="content_admin">
            <!-- Придумать название. Это не sidebaradmin -->
            <div class="sidebar_admin">
                <div class="menu_admin_button">
                    <p>Записи</p>
                </div>
                <div class="menu_admin_button">
                    <p>Рубрики</p>
                </div>
                <div class="menu_admin_button">
                    <p>Рекомендации</p>
                </div>
                <div class="menu_admin_button">
                    <p>Настройки</p>
                </div>
            </div>
        </div>
        <?php
            require_once '../components/footer.php';
        ?>
    </div>
</body>
</html>