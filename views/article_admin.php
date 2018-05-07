<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой Первый Блог</title>
        <link rel='stylesheet' href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <footer>
                <p>Мой Первый Блог<br>Copyrite &copy; 2017</p>
            </footer>
        </div>
    </body>
</html>