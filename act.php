<?php
 
//Данные для подключения к серверу MySQL
$servername = "localhost";
$username = "root";
$password = "";
// Вводим название базы данных
$dbname = "register_forms";
//Созданиие подключения
$conn = mysqli_connect($servername, $username, $password,
$dbname);
mysql_select_db('register_forms');
//Проверка кодировки utf8 
mysql_query('SET NAMES utf8') or die ("не удалось установить
кодировку");
//Проверка соединения с БД
if (!$conn) {
 die("Подключение не выполнено: " . mysqli_connect_error());
}
//Строка с текстом sql запроса для таблицы
$sql = "INSERT INTO register_info (fio, telNumber, mail,
login, password, address, birthday, team, faq, nameOfInstitute)
VALUES ('".$_POST['fio']."','".$_POST['telNumber']."',
'".$_POST['mail']."','".$_POST['login']."',
'".$_POST['password']."','".$_POST['address']."',
'".$_POST['birthday']."','".$_POST['team']."',
'".$_POST['faq']."','".$_POST['nameOfInstitute']."');";
// mysqli_query($conn, $sql) - выполнение sql запроса
//Проверка статуса выполнения sql запроса
if (mysqli_query($conn, $sql)) {
 echo "Entry added successfully</br>";
echo "<a href='registerform.html'>Home page</a>";
} else {
 echo "Ошибка добавления записи: " . $sql . "<br>" .
mysqli_error($conn);
}
//Закрытие соединения
mysqli_close($conn);
?>