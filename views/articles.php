<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой Первый Блог</title>
        <link rel='stylesheet' href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <footer>
                <p>Мой Первый Блог<br>Copyrite &copy; 2017</p>
            </footer>
        </div>
    </body>
</html>