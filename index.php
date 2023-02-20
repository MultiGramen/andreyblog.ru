<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://andreyblog.ru/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title><?php $namepage; ?></title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
                    <?php   
                        $blog; 
                        $about_me; 
                        $search;
                    ?>
                    Блог Обо мне
                <div class="menu">
                    <img src="img/logo.png" alt="logo" height="100em;">
                </div>
                <?php $user; ?>
                Поиск Гость
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
                    <p>Название поста</p>
                    <p>
                        <img src="/img/tyPweNXXn2M.png" alt="">
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem rerum placeat amet quia consectetur, deserunt harum numquam obcaecati culpa quae sint fugiat, dolorum, similique unde? Maiores porro molestias est in.
                    Culpa libero sint eligendi quidem nihil. Autem temporibus, in corporis cupiditate sit ipsam iusto asperiores minus consequuntur at, voluptas sequi sapiente obcaecati sed laudantium enim laborum quam, deserunt nam velit.
                    Officiis dolores vitae rerum numquam! Architecto velit maiores eos. Nihil unde quas, pariatur reprehenderit cumque eligendi eos dolores adipisci dolore, eum ducimus, temporibus recusandae illo ullam distinctio esse nostrum aperiam.
                    Ex odio neque, vero saepe quas voluptatem corrupti dolor illum velit magni, suscipit aut sapiente architecto mollitia. Reprehenderit vitae laboriosam, quisquam explicabo dolores exercitationem. Repellendus nostrum mollitia inventore culpa eos.
                    Ipsa laboriosam, quod vel expedita laudantium in ipsum, eligendi deserunt dolores id aut odio consectetur iusto eos doloribus mollitia quos qui quidem blanditiis, cumque non eaque inventore.</p>
                    <p>Читать далее</p>
                    <p>Дата публикации поста</p>
                    <p>Рубрика</p>
                </div>
                <div class="post_2">
                    <p>Название поста</p>
                    <p>
                        <img src="/img/tyPweNXXn2M.png" alt="">
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem rerum placeat amet quia consectetur, deserunt harum numquam obcaecati culpa quae sint fugiat, dolorum, similique unde? Maiores porro molestias est in.
                    Culpa libero sint eligendi quidem nihil. Autem temporibus, in corporis cupiditate sit ipsam iusto asperiores minus consequuntur at, voluptas sequi sapiente obcaecati sed laudantium enim laborum quam, deserunt nam velit.
                    Officiis dolores vitae rerum numquam! Architecto velit maiores eos. Nihil unde quas, pariatur reprehenderit cumque eligendi eos dolores adipisci dolore, eum ducimus, temporibus recusandae illo ullam distinctio esse nostrum aperiam.
                    Ex odio neque, vero saepe quas voluptatem corrupti dolor illum velit magni, suscipit aut sapiente architecto mollitia. Reprehenderit vitae laboriosam, quisquam explicabo dolores exercitationem. Repellendus nostrum mollitia inventore culpa eos.
                    Ipsa laboriosam, quod vel expedita laudantium in ipsum, eligendi deserunt dolores id aut odio consectetur iusto eos doloribus mollitia quos qui quidem blanditiis, cumque non eaque inventore. Consequuntur, ab ipsum!
                    Sit et inventore tempora explicabo assumenda. Expedita aut ea explicabo suscipit odit ducimus saepe vitae! Aut cumque expedita minus quas libero repellendus ea excepturi atque, quo sapiente dicta maiores ullam.
                    Illo quia rem dolore doloribus hic iste iure assumenda quod officiis reiciendis mollitia odit ea vel atque, quisquam eos eveniet necessitatibus, ipsa fuga aspernatur libero architecto nulla. Est, facere assumenda?
                    Aliquam at voluptate ab animi necessitatibus expedita quasi dicta ad obcaecati reiciendis labore ducimus, recusandae consequuntur. Eum, perspiciatis temporibus sapiente cupiditate molestias voluptatum ad numquam sint iusto consequatur ipsam quod.
                    Nulla eum corrupti rem ipsum reiciendis nihil ipsa, ut, libero commodi consectetur odio molestias perferendis repellendus voluptas iusto itaque soluta praesentium ab quaerat. Possimus, magni velit voluptate corporis repudiandae quia.
                    Obcaecati facere harum laborum fuga. Alias porro quia odio eos possimus incidunt consectetur magni atque eius. Ipsam ipsa cum illum incidunt eaque nostrum repudiandae repellat cumque officiis, enim culpa saepe.</p>
                    <p>Читать далее</p>
                    <p>Дата публикации поста</p>
                    <p>Рубрика</p>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar_chapter">
                <p class="login">Вход</p>
                <p class="sections">Рубрики</p>
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
                <a class="icon_img" href="">
                    <picture>
                        <img src="img/vk.png" alt="ВКонтакте" width="70px">
                    </picture>
                </a>
            </li>
            <li>
                <a class="icon_img" href="">
                    <picture>
                        <img src="img/github.png" alt="GitHub" width="70px">
                    </picture>
                </a>
            </li>
        </div>
    </div>
</body>
</html>