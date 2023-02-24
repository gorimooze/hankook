<?php


$name = $_POST['name'];
$family = $_POST['family'];
$phone = $_POST['phone'];
$email = $_POST['e-mail'];
$token = "5688148847:AAGzfBa45C0nfVeB-gSlnMVkcHIzd2okSHs";
$chat_id = "-627683803";
$arr = array(
  'Name' => $name,
  'Family' => $family,
  'Phone' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



if ($sendToTelegram) {
  header('Location: https://pneuexpert.md/catalog/acumulatoare/');
} else {
  echo "Error";
}
?>