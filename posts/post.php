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
        <?php
            require_once '../components/header.php';
        ?>
        <div class="content">
            <div class="properties">
                <div class="information_post">
                    <p>Дата публикации поста</p>
                    <p>Название поста</p>
                    <p>Рубрика</p>
                </div>
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
                <div class="recommended_posts_definite">
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
                        <label for="">
                            <input class="name" type="text" placeholder="Ваше имя" required oninvalid="this.setCustomValidity('Введите Ваше имя')" oninput="setCustomValidity('')" style="text-align: center; border-radius: 10px;" />
                        </label>
                    </p>
                    <p>
                        <label for="">
                            <input class="comment" type="text" placeholder="Комментарий" required oninvalid="this.setCustomValidity('Заполните это поле')" oninput="setCustomValidity('')" style="width: 500px; height: 150px; border-radius: 20px;" />
                        </label>
                    </p>
                    <p>
                        <input type="submit" value="Добавить комментарий" />
                    </p>
                </form>
            </div>
        </div>
        <?php
            require_once '../components/footer.php';
        ?>
    </div>
</body>
</html>