<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой Первый Блог</title>
        <link rel='stylesheet' href="../style.css">

    </head>
    <body>
        <div class="container">
            <h1>Мой Первый Блог</h1>
            <div>
               <form method ="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <br>
                <label>
                    Дата
                     <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label>
                <br>
                <label>
                    Содержимое
                    <textarea class="form-item" name="content" rows="10" cols="100%" required><?=$article['content']?></textarea>
                </label>
                <br>
                <input type="submit" value="Сохранить" class="btn">
                </form> 
            </div>
            <br>
            <footer>
                <p>Мой Первый Блог<br>Copyrite &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>