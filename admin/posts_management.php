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
    <link rel="stylesheet" href="/css/style.css">
    <title>Главная панель</title>
</head>
<body>
    <div class="wrapper_admin">
        <?php
            require_once '../components/header.php';
        ?>
        <div id="sidebar_admin">
            <div class="menu_admin_button">
                <p>Посты</p>
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
        <div id="content_admin">
            <div class="total_records">
                <p class="total_records_number">
                    <strong>Всего постов: 50</strong>
                </p>
            </div>
            <div class="control_panel">
                <div class="control_panel_sections">
                    <p>ID</p>
                    <p>Название поста</p>
                    <p>Рубрика</p>
                    <p>Дата публикации поста</p>
                    <p>Статус</p>
                    <p>Действие</p>
                </div>
                <div class="control_panel_sections_text">
                    <p>1</p>
                    <p>Пост 1</p>
                    <p>Безопасность</p>
                    <p>2022-02-22</p>
                    <p>Опубликовано</p>
                    <p>Снять с публикации</p>
                </div>
            </div>
        </div>
        <?php
            require_once '../components/footer.php';
        ?>
    </div>
</body>
</html>