<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8366873045:AAHmrSMZZpnOIlt67LtQvaBlaJF8QeaupWk";
$chat_id = "-4926877919";

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);

$text = "";
foreach($formData as $key => $value){
    $text .= $key  . "<b>" . $value . "</b>" . "\n" ;
}

$text = urlencode($text);

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
    echo "Success";
} else {
    echo "Error";
}

echo "Привет, " . $user_name . "<br>";
echo "Ваш телефон: <b>" . $user_phone . "</b>";