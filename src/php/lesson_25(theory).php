<?php
 $name = $_POST['user_name'];
 $phone = $_POST['user_phone'];

 echo "Приветствую тебя, ";
 echo $name;
 echo "Твой номер телефона:";
 echo $phone;

// Или так...

echo "Приветствую тебя, " . $name . "Твой номер телефона:" . $phone;

?>