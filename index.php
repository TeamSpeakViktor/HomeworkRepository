<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$host='localhost';
$db = 'DB';
$username = 'postgres';
$password = 'postgres';

# Создаем соединение с базой PostgreSQL с указанными выше параметрами
$dbconn = pg_connect("host=localhost port=5432 dbname=DB user=postgres password=postgres");

$gparam = $_GET["getparam"];
$title = ( $_POST["title"]);
$content = ( $_POST["content"]);
$date = ( $_POST["date"]);

if (!empty ($title) && !empty($content)) {

    $query = pg_query($dbconn, "INSERT INTO posts (title,content,date) VALUES ('$title','$content','$date')");

} else{
    echo "Заполните поля";
}

    echo "<br>";

if (!empty($gparam)) {
    $res = pg_query($dbconn, "SELECT content,title,date from posts where id=('$gparam')");
    while ($row = pg_fetch_row($res)) {
        echo "<table border = 1><tr><td>Title</td><td>Content</td><td>Date</td><td>Id</td></tr>";
        echo "<tr><td>$row[0]</td>" ." <td>$row[1]</td>.<td>$row[2]</td>.<td>$gparam</td></tr>";
        echo "<br />\n";
    }
} else
    echo "Get параметр пуст";
?>
<br><br><br>
         <form action = "" method = "POST">
            Title: <input type = "text" name = "title" /> <br>
            Content: <input type = "text" name = "content" /> <br>
            Date: <input type = "date" name = "date" /><br>
            <input type = "submit" /><br><br>
         </form>

         <form action = "" method = "GET">
                 Get parameter: <input type = "text" name = "getparam" /> <br>
                 <input type = "submit" /><br><br>
         </form>



</body>
</html>