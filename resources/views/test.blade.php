<?php
//Первая компонента ключа
$comp1 = 'C50E41160302E0F5D6D59F1AA3925C45';
//Вторая компонента ключа
$comp2 = '00000000000000000000000000000000';
//Данные для отправки на ПШ
$data = [
'amount' => number_format($_POST['AMOUNT'],2,'.',''),
'currency' => 'RUB',
'order' => preg_replace('~\D+~', '', ($_POST['ORDER'])),
'desc' => 'www.zdravkurort.ru  '. $_POST['ORDER'],
'terminal' => '79036777',
'trtype' => '1',
'merch_name' => 'TEST_MERCH',
'merchant' => '790367686219999',
'email' => $_POST['EMAIL'],
'timestamp' => gmdate("YmdHis"),
'nonce' => bin2hex(random_bytes(16)),
'backref' => 'https://' . 'zdravkurort.ru/chek_card',
'notify_url' =>  'https://pay.zdravkurort.ru/back',
'cardholder_notify' => 'EMAIL',
'merchant_notify' => 'EMAIL',
'merchant_notify_email' => 'da@zdravkurort.ru'
];
//Расчет P_SIGN
$vars = ["amount","currency","order","merch_name","merchant","terminal","email","trtype","timestamp","nonce","backref"];
$string = '';
foreach ($vars as $param){
if(isset($data[$param]) && strlen($data[$param]) != 0){
$string .= strlen($data[$param]) . $data[$param];
} else {
$string .= "-";
}
}
$key = strtoupper(implode(unpack("H32",pack("H32",$comp1) ^ pack("H32",$comp2))));
$data['p_sign'] = strtoupper(hash_hmac('sha1', $string, pack('H*', $key)));
//Вывод формы для передачи запроса на ПШ
echo "<form id='payment_form' action='https://test.3ds.payment.ru/cgi-bin/cgi_link' method = 'POST'>";
foreach ($data as $param => $value) {
echo "<input type='hidden' name='" . strtoupper($param) . "' value='" . $value . "'/>";
}
echo "<input type='submit' name='SUBMIT' value='Перейти к оплате' />";
echo "</form>";
echo "Если не произошло автоматического перенаправления, нажмите на кнопку 'Перейти к оплате'";
echo "<script type='text/javascript'>document.getElementById('payment_form').submit();</script>";
?>