<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$phone_number = $_POST['phone_number'];
$token = "1085050207:AAEV0BZD6ScY-8mjknyuRkmoi_iqLOGi3fM";
$chat_id = "-461258362";

	$arr = array(
'Номер: ' => $phone_number,
);

foreach($arr as $key => $value) {
  $txt .= $key.$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /good.php');
} else {
  header('Location: /bad.php');
}

?>