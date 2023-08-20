<?php
$title = "Tasks List";
$page_title = "Список задач (скрытая страница)";
if (isset($_SESSION['login'])){
$content = "
<form action = 'add_task.php'>
<textarea cols = 50 rows = 10 name = 'task'>
</textarea><br>
<input type='submit' value='Добавить'>
</form>";
}
else{
    $content = "Вы не авторизованы!";
    //либо можно перенаправить на страницу авторизации
    //header("Location: ../login/login/php");
}
include("../components/layout.php");
?>