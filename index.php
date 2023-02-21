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
                <div class="menu">
                    <img src="img/logo.png" alt="logo" height="100em;">
                </div>
                <?php 
                    $user;

                    $result = $pdo->query('SELECT * FROM `menu` LIMIT 2, 2');
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo $row['name'];
                    }
                ?>
        </div>
        <div class="content">
            <div class="post">
                <div class="post_1">
                    <?php 
                        $post_name;
                        $post_img;
                        $post_text;
                        $post_see_more;
                        $post_date;
                        $post_section;
                    ?>
                    <p class="post_name">
                        <strong>Название поста</strong>
                    </p>
                    <p class="post_img">
                        <img src="/img/tyPweNXXn2M.png" alt="" width="300px">
                    </p>
                    <p class="post_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem rerum placeat amet quia consectetur, deserunt harum numquam obcaecati culpa quae sint fugiat, dolorum, similique unde? Maiores porro molestias est in.
                    Culpa libero sint eligendi quidem nihil. Autem temporibus, in corporis cupiditate sit ipsam iusto asperiores minus consequuntur at, voluptas sequi sapiente obcaecati sed laudantium enim laborum quam, deserunt nam velit.
                    Officiis dolores vitae rerum numquam! Architecto velit maiores eos. Nihil unde quas, pariatur reprehenderit cumque eligendi eos dolores adipisci dolore, eum ducimus, temporibus recusandae illo ullam distinctio esse nostrum aperiam.
                    Ex odio neque, vero saepe quas voluptatem corrupti dolor illum velit magni, suscipit aut sapiente architecto mollitia. Reprehenderit vitae laboriosam, quisquam explicabo dolores exercitationem. Repellendus nostrum mollitia inventore culpa eos.
                    Ipsa laboriosam, quod vel expedita laudantium in ipsum, eligendi deserunt dolores id aut odio consectetur iusto eos doloribus mollitia quos qui quidem blanditiis, cumque non eaque inventore. Consequuntur, ab ipsum!</p>
                    <p class="post_see_more">Читать далее</p>
                    <p class="post_date">Дата публикации поста</p>
                    <p class="post_section">Рубрика</p>
                </div>
                <div class="post_2">
                    <p class="post_name">
                        <strong>Название поста</strong>
                    </p>
                    <p class="post_img">
                        <img src="/img/tyPweNXXn2M.png" alt="" width="300px">
                    </p>
                    <p class="post_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem rerum placeat amet quia consectetur, deserunt harum numquam obcaecati culpa quae sint fugiat, dolorum, similique unde? Maiores porro molestias est in.
                    Culpa libero sint eligendi quidem nihil. Autem temporibus, in corporis cupiditate sit ipsam iusto asperiores minus consequuntur at, voluptas sequi sapiente obcaecati sed laudantium enim laborum quam, deserunt nam velit.
                    Officiis dolores vitae rerum numquam! Architecto velit maiores eos. Nihil unde quas, pariatur reprehenderit cumque eligendi eos dolores adipisci dolore, eum ducimus, temporibus recusandae illo ullam distinctio esse nostrum aperiam.
                    Ex odio neque, vero saepe quas voluptatem corrupti dolor illum velit magni, suscipit aut sapiente architecto mollitia. Reprehenderit vitae laboriosam, quisquam explicabo dolores exercitationem. Repellendus nostrum mollitia inventore culpa eos.
                    Ipsa laboriosam, quod vel expedita laudantium in ipsum, eligendi deserunt dolores id aut odio consectetur iusto eos doloribus mollitia quos qui quidem blanditiis, cumque non eaque inventore. Consequuntur, ab ipsum!</p>
                    <p class="post_see_more">Читать далее</p>
                    <p class="post_date">Дата публикации поста</p>
                    <p class="post_section">Рубрика</p>
                </div>
            </div>
            <div class="see_more">
                <p>Показать больше</p>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar_chapter">
                <div class="login_main">
                    <p class="login">Вход</p>
                </div>
                <div class="sections_main">
                    <h4 class="sections">Рубрики</h4>
                    <p class="sections_text">Рубрика 1</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="multigramen_site">
                <a href="https://multigramen.ru/index.php">
                    <img src="img/IMG_8997.png" alt="Андрей Пчелкин">
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
                            <img src="img/vk.png" alt="ВКонтакте" width="70px">
                        </picture>
                    </a>
                </li>
                <li>
                    <a class="icon_img" href="https://github.com/MultiGramen">
                        <picture>
                            <img src="img/github.png" alt="GitHub" width="70px">
                        </picture>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>