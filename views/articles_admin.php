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
               <a href="index.php?action=add">Добавить статью</a>
                <table class = "admin-table">
   <tr>
       <th align = "left">Дата</th>
       <th align = "left">Заголовок</th>
       <th></th>
       <th></th>
   </tr>
    <?php foreach ($articles as $a): ?> 
<tr>
       <td><?=$a['date']?></td>
       <td><?=$a['title']?></td>
       <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
       <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
   </tr>
   <?php endforeach ?>
</table>      
            </div>
            <br>
            <footer>
                <p>Мой Первый Блог<br>Copyrite &copy; 2018</p>
            </footer>
        </div>
    </body>
</html>