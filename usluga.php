<?php if (isset($_POST["otprav"])) {
$to = "fortuna.2022@internet.ru";
$subject = "Новая заявка";
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
$msg = "Имя: ".$_POST["user_name"]."\n";$msg .= "Телефон: ".$_POST["user_phone"]."\n";$msg .="Комментарий: ".$_POST["user_comment"]."\n";$msg .="Услуга: ".$_POST["user_usl"]."\n";
mail($to, $subject, $msg, $headerss);
header("Location: https://fortuna-service.xyz");
}