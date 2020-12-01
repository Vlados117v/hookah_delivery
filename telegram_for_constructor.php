<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$egg = $_POST['egg'];
$egg_bowl_num = $_POST['egg_bowl_num'];
$tobacco = $_POST['tobacco'];
$bowl = $_POST['bowl'];
$fruit = $_POST['fruit'];
$fruit_cup = $_POST['fruit_cup'];
$taste = $_POST['taste'];
$color = $_POST['color'];
$bowl_number=$_POST['bowl_number'];
$phone_number = $_POST['phone_number2'];
$tobacco_bowl_1 =$_POST['tobacco_bowl_1'];
$tobacco_bowl_2 =$_POST['tobacco_bowl_2'];
$tobacco_bowl_3 =$_POST['tobacco_bowl_3'];
$tobacco_bowl_4 =$_POST['tobacco_bowl_4'];
$fruit_cup_bowl_1 =$_POST['fruit_cup_bowl_1'];
$fruit_cup_bowl_2 =$_POST['fruit_cup_bowl_2'];
$fruit_cup_bowl_3 =$_POST['fruit_cup_bowl_3'];
$fruit_cup_bowl_4 =$_POST['fruit_cup_bowl_4'];
$taste_bowl_1 =$_POST['taste_bowl_1'];
$taste_bowl_2 =$_POST['taste_bowl_2'];
$taste_bowl_3 =$_POST['taste_bowl_3'];
$taste_bowl_4 =$_POST['taste_bowl_4'];
$color_bowl_1 =$_POST['color_bowl_1'];
$color_bowl_2 =$_POST['color_bowl_2'];
$color_bowl_3 =$_POST['color_bowl_3'];
$color_bowl_4 =$_POST['color_bowl_4'];
$token = "1085050207:AAEV0BZD6ScY-8mjknyuRkmoi_iqLOGi3fM";
$chat_id = "-461258362";



function foo($tobacco)
{
    if ($tobacco == 0) {
      return "легкий";
    } elseif ($tobacco == 150) {
      return "средний";
    } else {
      return "крепкий";
    }
}

if ($bowl=='фрукт') {

	$arr = array(
'Табак: ' => foo($tobacco),
'Чаша: ' => $bowl,
'Фрукт: ' =>$fruit,
'Вкус: ' => $taste,
'цвет: ' => $color,
'Номер: ' => $phone_number,
'Заказ на сумму: ' => $egg_bowl_num+$egg,
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


			} elseif ($bowl == 'обычный') {
	$arr = array(
  	'Табак: ' => foo($tobacco),
    'Чаша: ' => $bowl,
    'Вкус: ' => $taste,
    'цвет: ' => $color,
    'Номер: ' => $phone_number,
    'Заказ на сумму: ' => $egg_bowl_num+$egg,
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






				} else {
if ($bowl_number=='0') {

$arr = array(
  'Табак: ' => foo($tobacco),
    'Чаша: ' => $bowl,
      'Фрукт: ' =>$fruit_cup,
          'Вкус: ' => $taste,
            'цвет: ' => $color,
            'Номер: ' => $phone_number,
            'Заказ на сумму: ' => $egg_bowl_num+$egg,

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



} elseif ($bowl_number=='1') {
$arr = array(
  'Табак: ' => foo($tobacco),
    'Чаша: ' => $bowl,
      'Фрукт: ' =>$fruit_cup,
          'Вкус: ' => $taste,
            'цвет: ' => $color,
            'Дополнительных стаканов :' => $bowl_number,
              'Табак для дополнительного стакана 1: ' => foo($tobacco_bowl_1),
              'Фрукт для дополнительного стакана 1: ' =>$fruit_cup_bowl_1,
              'Вкус для дополнительного стакана 1: ' => $taste_bowl_1,
             'цвет для дополнительного стакана 1: ' => $color_bowl_1,
'Номер телефона: ' => $phone_number,
'Заказ на сумму: ' => $egg_bowl_num+$egg,


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



} elseif ($bowl_number=='2') {
$arr = array(
  'Табак: ' => foo($tobacco),
    'Чаша: ' => $bowl,
      'Фрукт: ' =>$fruit_cup,
          'Вкус: ' => $taste,
            'цвет: ' => $color,
            'Дополнительных стаканов :' => $bowl_number,
              'Табак для дополнительного стакана 1: ' => foo($tobacco_bowl_1),
              'Фрукт для дополнительного стакана 1: ' =>$fruit_cup_bowl_1,
              'Вкус для дополнительного стакана 1: ' => $taste_bowl_1,
             'цвет для дополнительного стакана 1: ' => $color_bowl_1,
              'Табак для дополнительного стакана 2: ' => foo($tobacco_bowl_2),
              'Фрукт для дополнительного стакана 2: ' =>$fruit_cup_bowl_2,
              'Вкус для дополнительного стакана 2: ' => $taste_bowl_2,
             'цвет для дополнительного стакана 2: ' => $color_bowl_2,
'Номер телефона: ' => $phone_number,
'Заказ на сумму: ' => $egg_bowl_num+$egg,


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



} elseif ($bowl_number=='3') {
$arr = array(
  'Табак: ' => foo($tobacco),
    'Чаша: ' => $bowl,
      'Фрукт: ' =>$fruit_cup,
          'Вкус: ' => $taste,
            'цвет: ' => $color,
            'Дополнительных стаканов :' => $bowl_number,
              'Табак для дополнительного стакана 1: ' => foo($tobacco_bowl_1),
              'Фрукт для дополнительного стакана 1: ' =>$fruit_cup_bowl_1,
              'Вкус для дополнительного стакана 1: ' => $taste_bowl_1,
             'цвет для дополнительного стакана 1: ' => $color_bowl_1,
              'Табак для дополнительного стакана 2: ' => foo($tobacco_bowl_2),
              'Фрукт для дополнительного стакана 2: ' =>$fruit_cup_bowl_2,
              'Вкус для дополнительного стакана 2: ' => $taste_bowl_2,
             'цвет для дополнительного стакана 2: ' => $color_bowl_2,
              'Табак для дополнительного стакана 3: ' => foo($tobacco_bowl_3),
              'Фрукт для дополнительного стакана 3: ' =>$fruit_cup_bowl_3,
              'Вкус для дополнительного стакана 3: ' => $taste_bowl_3,
             'цвет для дополнительного стакана 3: ' => $color_bowl_3,
'Номер телефона: ' => $phone_number,
'Заказ на сумму: ' => $egg_bowl_num+$egg,


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
}



 elseif ($bowl_number=='4') {
$arr = array(
  'Табак: ' => foo($tobacco),
    'Чаша: ' => $bowl,
      'Фрукт: ' =>$fruit_cup,
          'Вкус: ' => $taste,
            'цвет: ' => $color,
            'Дополнительных стаканов :' => $bowl_number,
              'Табак для дополнительного стакана 1: ' => foo($tobacco_bowl_1),
              'Фрукт для дополнительного стакана 1: ' =>$fruit_cup_bowl_1,
              'Вкус для дополнительного стакана 1: ' => $taste_bowl_1,
             'цвет для дополнительного стакана 1: ' => $color_bowl_1,
              'Табак для дополнительного стакана 2: ' => foo($tobacco_bowl_2),
              'Фрукт для дополнительного стакана 2: ' =>$fruit_cup_bowl_2,
              'Вкус для дополнительного стакана 2: ' => $taste_bowl_2,
             'цвет для дополнительного стакана 2: ' => $color_bowl_2,
              'Табак для дополнительного стакана 3: ' => foo($tobacco_bowl_3),
              'Фрукт для дополнительного стакана 3: ' =>$fruit_cup_bowl_3,
              'Вкус для дополнительного стакана 3: ' => $taste_bowl_3,
             'цвет для дополнительного стакана 3: ' => $color_bowl_3,
                'Табак для дополнительного стакана 4: ' => foo($tobacco_bowl_4),
              'Фрукт для дополнительного стакана 4: ' =>$fruit_cup_bowl_4,
              'Вкус для дополнительного стакана 4: ' => $taste_bowl_4,
             'цвет для дополнительного стакана 4: ' => $color_bowl_4,
'Номер телефона: ' => $phone_number,
'Заказ на сумму: ' => $egg_bowl_num+$egg,
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
}

  };


?>