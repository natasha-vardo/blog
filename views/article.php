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
            <div>

                <div class="article">
                    <h3>
                <?=$article['title']?>
                    </h3>
                    <em>Опубликовано: <?=$article['date'] ?></em>
                    <p><?=$article['content'] ?></p>
                </div>

            </div>
            <br>
            <footer>
                <p>Мой Первый Блог<br>Copyrite &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>