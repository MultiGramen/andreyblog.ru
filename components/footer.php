<footer>
    <div class="author">
        <a href="https://multigramen.ru/index.php">
            <img src="/img/IMG_8997.png" alt="Андрей Пчелкин">
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
                    <img src="/img/vk.png" alt="ВКонтакте" width="70px">
                </picture>
            </a>
        </li>
        <li>
            <a class="icon_img" href="https://github.com/MultiGramen">
                <picture>
                    <img src="/img/github.png" alt="GitHub" width="70px">
                </picture>
            </a>
        </li>
    </ul>
</footer>