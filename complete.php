<?php
session_start();
// $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
// $mail = htmlspecialchars($_POST['mail'],ENT_QUOTES);
// $seibetsu = htmlspecialchars($_POST['seibetsu'],ENT_QUOTES);
// $tel = htmlspecialchars($_POST['tel'],ENT_QUOTES);
// $textarea = htmlspecialchars($_POST['textarea'],ENT_QUOTES);
// $yuubin = htmlspecialchars($_POST['yuubin'],ENT_QUOTES);
// $region = htmlspecialchars($_POST['region'],ENT_QUOTES);
// $locality = htmlspecialchars($_POST['locality'],ENT_QUOTES);
// $banti = htmlspecialchars($_POST['banti'],ENT_QUOTES);

// $name = htmlspecialchars($_SESSION['name'],ENT_QUOTES);
// $mail = htmlspecialchars($_SESSION['mail'],ENT_QUOTES);
// $seibetsu = htmlspecialchars($_SESSION['seibetsu'],ENT_QUOTES);
// $tel = htmlspecialchars($_SESSION['tel'],ENT_QUOTES);
// $textarea = htmlspecialchars($_SESSION['textarea'],ENT_QUOTES);
// $yuubin = htmlspecialchars($_SESSION['yuubin'],ENT_QUOTES);
// $region = htmlspecialchars($_SESSION['region'],ENT_QUOTES);
// $locality = htmlspecialchars($_SESSION['locality'],ENT_QUOTES);
// $banti = htmlspecialchars($_SESSION['banti'],ENT_QUOTES);

$name = $_SESSION['name'];
$mail = $_SESSION['mail'];
$seibetsu = $_SESSION['seibetsu'];
$tel = $_SESSION['tel'];
$textarea = $_SESSION['textarea'];
$yuubin = $_SESSION['yuubin'];
$region = $_SESSION['region'];
$locality = $_SESSION['locality'];
$banti = $_SESSION['banti'];

// $name=$_POST['name'];
// $seibetsu=$_POST['seibetsu'];
// $tel=$_POST['tel'];
// $textarea=$_POST['textarea'];
// $yuubin=$_POST['yuubin'];
// $region=$_POST['region'];
// $locality=$_POST['locality'];
// $banti=$_POST['banti'];
// $mail=$_POST['mail'];

// $name=$_GET['name'];
// $seibetsu=$_GET['seibetsu'];
// $tel=$_GET['tel'];
// $textarea=$_GET['textarea'];
// $yuubin=$_GET['yuubin'];
// $region=$_GET['region'];
// $locality=$_GET['locality'];
// $banti=$_GET['banti'];
// $mail=$_GET['mail'];



$mailTO = $mail;
$mailHeader = "k013c5009@it-neec.jp";

$mailSubject = "お問い合わせありがとうございます";
$mailBody = $name . "様 お問い合わせありがとうございます"."\r\n"
. "以下の内容で送信いたしました。"."\r\n"
. "＝＝お問い合わせ内容＝＝"."\r\n"
."氏名：" . $name."\r\n"
. "性別：" . $seibetsu."\r\n"
."電話番号：" . $tel."\r\n"
."郵便番号：" . $yuubin."\r\n"
."都道府県：" . $region."\r\n"
. "地区町村：" . $locality."\r\n"
."町名番地：" . $banti."\r\n"
. "メール：" . $mail."\r\n"
. "感想："."\r\n" . $textarea."\r\n"
."なにかご不明点がございましたらこちらまでお願いします！"."\r\n"
."k013c5009@it-neec.jp";


mail($mailTO, $mailSubject, $mailBody, $mailHeader);
$_SESSION = array();
    session_destroy();
?>
<style type="text/css">
*{
    margin:0;
    padding:0;
}
#check{
    margin: 0 auto;
}

p{
    text-align:center;
    font-size:30px;
    font-weight:bold;
}

@media screen and (min-width:768px) {
    p{
    text-align:center;
    font-size:30px;
    font-weight:bold;
}

}

@media screen and (min-width:1025px) {
    p{
    text-align:center;
    font-size:30px;
    font-weight:bold;
}
}

div{
    text-align:center;
}

@media screen and (min-width:768px) {
div{
    text-align:center;
}
}

@media screen and (min-width:1025px) {
    div{
    text-align:center;
}
}
</style>

<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>送信完了</title>
</head>
<body>
<div>
<img src="./チェックマーク.png" id="check">
<p>お問い合わせありがとうございます。</p>
<p>送信完了致しました。</p>
</div>
</body>
</html>


