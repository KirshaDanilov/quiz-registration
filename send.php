<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $team = htmlspecialchars($_POST["team"]);
    $members = htmlspecialchars($_POST["members"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $to = "kirshadanilov97@gmail.com"; // замените на свою почту
    $subject = "Новая регистрация на квиз";

    $message = "
Новая регистрация

Название команды: $team
Количество участников: $members
Телефон: $phone
";

    $headers = "From: no-reply@yourdomain.ru\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if(mail($to, $subject, $message, $headers)){
        echo "success";
    } else {
        echo "error";
    }
}
?>