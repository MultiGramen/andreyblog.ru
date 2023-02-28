<?php 
    require_once 'components/connection.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://andreyblog.ru:7890/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>
    <?php 
    $namepage = 'Андрей Пчелкин';
    echo $namepage; ?></title>
</head>
<body>
    <div class="wrapper">
        <?php 
            require_once 'components/header.php';
            require_once 'components/content.php';
            require_once 'components/sidebar.php';
            require_once 'components/footer.php';
        ?>
    </div>
</body>
</html>