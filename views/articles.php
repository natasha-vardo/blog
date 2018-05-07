<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой Первый Блог</title>
        <link rel='stylesheet' href="style.css">

    </head>
    <body>
        <div class="container">
            <h1>Мой Первый Блог</h1>
            <a href="admin">Панель Администратора</a>
            <div>
                <?php foreach ($articles as $a): ?> 
                <div class="article">
                    <h3>
                        <a href="article.php?id=<?=$a['id']?>"><?=$a['title'] ?></a>
                    </h3>
                    <em>Опубликовано: <?=$a['date'] ?></em>
                    <p><?=articles_intro($a['content'])?></p>
                </div>
                <?php endforeach ?>
            </div>
            <br>
            <footer>
                <p>Мой Первый Блог<br>Copyrite &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>