<div id="header">
    <div class="logo">
        <a href="https://andreyblog.ru:7890/index.php">
            <picture>
                <img src="img/logo.png" alt="logo" height="100em;">
            </picture>
        </a>
    </div>
    <div class="menu">
        <?php   
            $blog; 
            $about_me; 
            $search;
            $result = $pdo->query('SELECT * FROM `menu` LIMIT 2');
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo $row['name'];
            }
        ?>
        </div>
        <div class="search">
            <form action="#">
                <input type="text" class="input_search" placeholder="Поиск" required oninvalid="this.setCustomValidity('Введите текст для поиска')" oninput="setCustomValidity('')" />
                <input type="submit" value="Найти" />
            </form>
        </div>
    <div class="user">
        <div class="logo_user">
            <picture class="photo_user">
                <img src="img/IMG_8997.png" alt="" style="width: 5em;">
            </picture>
            <p>Андрей Пчелкин</p>
        </div>
    </div>
</div>