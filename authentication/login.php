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
<div class="wrapper_login">
    <div class="header">
        <?php   
            $blog; 
            $about_me; 
            $search;
            $result = $pdo->query('SELECT * FROM `menu` LIMIT 2');
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo $row['name'];
            }
        ?>
        <div class="logo">
            <a href="https://andreyblog.ru:7890/index.php">
                <picture>
                    <img src="../img/logo.png" alt="logo" height="100em;">
                </picture>
            </a>
        </div>
        <?php 
            $user;

            $result = $pdo->query('SELECT * FROM `menu` LIMIT 2, 2');
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo $row['name'];
            }
        ?>
    </div>
    <div class="content" style="display: grid; align-items: center;">
        <div class="authentication">
            <div class="authentication_form">
                <form action="#">
                    <p>
                        <label for="">
                            <input name="login" type="text" placeholder="Логин">
                        </label>
                    </p>
                    <p>
                        <label for="">
                            <input name="pass" type="password" placeholder="Пароль">
                        </label>
                    </p>
                    <p>
                        <input type="submit" value="Вход">
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
            <div class="multigramen_site">
                <a href="https://multigramen.ru/index.php">
                    <img src="../img/IMG_8997.png" alt="Андрей Пчелкин">
                </a>
            </div>
            <div class="copyright">
                <p>
                    <?php
                    if (date("Y") == 2023) {
                        echo '© А. Н. Пчелкин,';
                        echo " 2023";
                    } else {
                        echo '© Пчелкин А. Н., ';
                        echo " 2023-";
                        echo date("Y");
                    }
                    ?>
                </p>
            </div>
            <ul class="social-icons">
                <li>
                    <a class="icon_img" href="https://vk.com/id57045147">
                        <picture>
                            <img src="../img/vk.png" alt="ВКонтакте" width="70px">
                        </picture>
                    </a>
                </li>
                <li>
                    <a class="icon_img" href="https://github.com/MultiGramen">
                        <picture>
                            <img src="../img/github.png" alt="GitHub" width="70px">
                        </picture>
                    </a>
                </li>
            </ul>
        </div>
</div>
</body>
</html>