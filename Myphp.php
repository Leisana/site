<?php

$host = 'localhost';
$database = 'flower';
$user = 'leisana';
$password = '123456';
$con = mysqli_connect('localhost','leisana','123456','flower');
if(!$con)
{echo 'Подключение невозможно';}
if(!mysqli_select_db($con,'shopshoes'))
{echo 'Ошибка';}

$email = @$_POST['email'];
'.(($name == null) ? "<p>E-mail: ".$email."</p>" : "<p>E-mail: ".@$_POST['email']."</p>").'
<p>Имя: '.@$_POST['name'].'</p>
<p>Телефон: '.@$_POST['phone'].'</p>
<p>Адрес доставки: '.@$_POST['name'].'</p>

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adress = $_POST['adress'];

$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO Pclient (name, phone, email, adress) VALUES (:first_name, :phone, :email, :adress)");
$my_Insert_Statement->bindParam(:name, $name);
$my_Insert_Statement->bindParam(:phone, $phone);
$my_Insert_Statement->bindParam(:email, $email);
$my_Insert_Statement->bindParam(:adress, $adress);

if ($my_Insert_Statement->execute()) {
echo "SUCCESS";
} else {
echo "LOSE";
}
$my_Insert_Statement->execute();
?>

