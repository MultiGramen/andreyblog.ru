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
    <title>Имя поста</title>
</head>
<body>
    <div class="wrapper_post">
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
        <div class="content">
            <div class="properties">
                <div class="post_date_a">Дата публикации поста</div>
                <div class="post_name_a">Название поста</div>
                <div class="post_section_a">Рубрика</div>
            </div>
            <div class="post_image">
                <picture>
                    <img src="../img/tyPweNXXn2M.png" alt="">
                </picture>
            </div>
            <div class="post_text">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum minima alias, laborum reiciendis sit iusto. Doloribus, quod nihil! Quae fugiat voluptas, debitis explicabo ipsum vel dolore cumque optio eos eius.
                Vel perspiciatis fugiat deleniti, eum tempore quidem, doloremque corrupti ab temporibus praesentium consectetur officia similique dicta alias ducimus error! Accusantium aspernatur inventore provident exercitationem illo! Vel eligendi ab ipsa nesciunt!
                Maiores commodi minus ratione ad ipsa, blanditiis dolor pariatur laudantium accusamus ducimus, nisi atque architecto suscipit optio, ex quasi provident eius corrupti! Molestias praesentium nulla obcaecati ipsa officia beatae atque.
                A minus tempora rem animi vitae deleniti sit placeat doloribus debitis voluptas corporis at quasi porro minima voluptatibus accusamus temporibus id ipsa quae, inventore, aliquid provident quas voluptatem doloremque! Dicta.
                Sunt, ipsa error quia quibusdam quasi culpa praesentium natus illum mollitia asperiores minima exercitationem necessitatibus, harum neque deserunt labore ex fugit totam consectetur laborum doloribus quis. Odit error fugiat vero.</p>    
            </div>
            <div class="recommended_posts">
                <h3 class="title">Рекомендуемые посты</h3>
                <div class="recommended_posts_a">
                    <div class="recommended_posts_1">Пост 1</div>
                    <div class="recommended_posts_2">Пост 2</div>
                    <div class="recommended_posts_3">Пост 3</div>
                </div>
            </div>
            <div class="comments">
                <div class="comment">
                    <div class="comment_date">
                        <p>Дата комментария</p>
                    </div>
                    <div class="comment_post">
                        <p>Комментарий</p>
                    </div>
                </div>
                <form action="#">
                    <p>
                        <input type="text" placeholder="Ваше имя">
                    </p>
                    <p>
                        <input type="text" placeholder="Комментарий">
                    </p>
                    <p>
                        <input type="submit" value="Добавить комментарий">
                    </p>
                </form>
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