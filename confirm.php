<?php
session_start();

//   $toke_byte = openssl_random_pseudo_bytes(16);
//   $csrf_token = bin2hex($toke_byte);
//   $_SESSION['csrf_token'] = $csrf_token;
  
    // $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
    // $mail = htmlspecialchars($_POST['mail'],ENT_QUOTES);
    // $mail = str_replace(array("\r","\n"),'',$mail);
    // $mail = htmlspecialchars(str_replace(array('\r\n', '\r', '\n'), '', $_POST['mail']));
    // $seibetsu = htmlspecialchars($_POST['seibetsu'],ENT_QUOTES);
    // $tel = htmlspecialchars($_POST['tel'],ENT_QUOTES);
    // $textarea = htmlspecialchars($_POST['textarea'],ENT_QUOTES);
    // $yuubin = htmlspecialchars($_POST['yuubin'],ENT_QUOTES);
    // $region = htmlspecialchars($_POST['region'],ENT_QUOTES);
    // $locality = htmlspecialchars($_POST['locality'],ENT_QUOTES);
    // $banti = htmlspecialchars($_POST['banti'],ENT_QUOTES);

    // $name = htmlspecialchars($_GET['name'],ENT_QUOTES);
    // $mail = htmlspecialchars($_GET['mail'],ENT_QUOTES);
    // $seibetsu = htmlspecialchars($_GET['seibetsu'],ENT_QUOTES);
    // $tel = htmlspecialchars($_GET['tel'],ENT_QUOTES);
    // $textarea = htmlspecialchars($_GET['textarea'],ENT_QUOTES);
    // $yuubin = htmlspecialchars($_GET['yuubin'],ENT_QUOTES);
    // $region = htmlspecialchars($_GET['region'],ENT_QUOTES);
    // $locality = htmlspecialchars($_GET['locality'],ENT_QUOTES);
    // $banti = htmlspecialchars($_GET['banti'],ENT_QUOTES);


    $name = htmlspecialchars(validateData("name"),ENT_QUOTES);
    $mail = htmlspecialchars(validateData("mail"),ENT_QUOTES);
    $seibetsu = htmlspecialchars(validateData("seibetsu"),ENT_QUOTES);    
    $textarea = htmlspecialchars(validateData("textarea"),ENT_QUOTES);    
    $tel = htmlspecialchars(validateData("tel"),ENT_QUOTES);    
    $yuubin = htmlspecialchars(validateData("yuubin"),ENT_QUOTES);    
    $region = htmlspecialchars(validateData("region"),ENT_QUOTES);    
    $locality = htmlspecialchars(validateData("locality"),ENT_QUOTES);    
    $banti = htmlspecialchars(validateData("banti"),ENT_QUOTES);    

    $pdo = new PDO('mysql:charset=utf8;dbname=basic;host=localhost', 'ユーザー名', 'パスワード');
    
    $stmt = $pdo->prepare("INSERT INTO form (
        seibetsu,name, tel, yuubin,region,locality,banti,textarea
    ) VALUES (
        
        :seibetsu,:name, :tel, :yuubin,:region,:locality,:banti,:textarea
    )");

$stmt->bindParam( ':seibetsu', $seibetsu, PDO::PARAM_STR);
$stmt->bindParam( ':name', $name, PDO::PARAM_STR);
$stmt->bindParam( ':tel', $tel, PDO::PARAM_STR);
$stmt->bindParam( ':yuubin', $yuubin, PDO::PARAM_STR);
$stmt->bindParam( ':region', $region, PDO::PARAM_STR);
$stmt->bindParam( ':locality', $locality, PDO::PARAM_STR);
$stmt->bindParam( ':banti', $banti, PDO::PARAM_STR);
$stmt->bindParam( ':textarea', $textarea, PDO::PARAM_STR);

$res = $stmt->execute();

$pdo = null;

// メールアドレスをバリデーション
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_mail'] = 1;
    }
     // 入力がどこかミスったらform.phpにとばされる
    if($_SESSION['error_name'] || $_SESSION['error_mail'] 
    || $_SESSION['error_seibetsu'] || $_SESSION['error_textarea'] || $_SESSION['error_tel']
    || $_SESSION['error_yuubin'] || $_SESSION['error_region'] || $_SESSION['error_locality']
    || $_SESSION['error_banti']){
        header("Location: ./form.php");
        exit();
    }
   

    function validateData($key){
        if(is_null($_POST["$key"]) || empty($_POST["$key"]) || !is_string($_POST["$key"])){
            $_SESSION["$key"] = $_POST["$key"];
            $_SESSION["error_" . $key] = 1;
            return "";
        }else{
            $_SESSION["$key"] = $_POST["$key"];
            $_SESSION["error_" . $key] = 0;
            return $_POST["$key"];
        }
    }
    ?>
    
<!--  -->


<!DOCTYPE HTML>
<html>
<head>
<meta charset='UTF-8'>
<title>確認画面</title>

<style type="text/css">
    
    *{
    padding: 0;
    margin: 0;
    }

    .icon2{
   /* margin-top:200px; */
    width: 200px; 
   
   margin-left: 100px;
    }

    @media screen and (min-width:420px) {
    .icon2{
   /* margin-top:200px; */
    width: 200px; 
   
   margin-left: 200px;
    }
}

@media screen and (min-width:768px) {
    .icon2{
   /* margin-top:200px; */
    width: 200px; 
   
   margin-left: 400px;
    }
}

@media screen and (min-width:1024px) {
    .icon2{
   /* margin-top:200px; */
    width: 200px; 
   
   margin-left: 400px;
    }
}

    .contents_box{
  width: 400px;
  height: 150px;
  background-color: aquamarine;
  overflow: scroll;
}
    .kakunin{
        text-align:center;
        
        
    }
    
    .hensuu{
        border: double 5px;
        font-size:20px;
        font-weight:bold;
        width: 450px;
        height: 800px;
        background-color:#f5deb3;
        
        margin:0 auto;
      
       
        
    }



    @media screen and (min-width:768px) {
        .hensuu{
        border: double 5px;
        font-size:20px;
        font-weight:bold;
        width: 600px;
        height: 800px;
        background-color:#f5deb3;
     
        
    }
    }

    @media screen and (min-width:1024px) {
        .hensuu{
        border: double 5px;
        font-size:20px;
        font-weight:bold;
        width: 700px;
        height: 800px;
        background-color:#f5deb3;
        
        margin:0 auto;
        
    }
    }

    .btn{
        text-align: center;
        margin-top:50px;
        
    }
    
    


    .sousin{
        width:100px;
    }

    @media screen and (min-width:420px) {
        .sousin{
            font-size:20px;
            margin-top:200px;
        width:100px;
    }
    }

    @media screen and (min-width:768px) {
        .sousin{
            font-size:20px;
            margin-top:100px;
            
        width:100px;
    }
    }

    @media screen and (min-width:1025px) {
        .sousin{
            font-size:20px;
            margin-top:100px;
            
        width:100px;
    }
    }

    .modoru{
        width:100px;
        font-size:20px;
        margin-bottom:100px;
    }
    

    @media screen and (min-width:768px) {
        .modoru{
            font-size:20px;
            margin-top:100px;
            
        width:100px;
    }
    }

    @media screen and (min-width:1025px) {
        .modoru{
            font-size:20px;
            margin-top:100px;
            
        width:100px;
    }
    }
  
    .hyouji{
        
        margin-top:0;
        margin-left:200px;
        /* overflow: scroll; */
    }

    @media screen and (min-width:420px) {
        .hyouji{
        margin-left:0px;
        font-size:20px;
        font-weight:bold;
        }
        
    }

    @media screen and (min-width:768px) {
        .hyouji{
        margin-left:100px;
        font-size:30px;
        font-weight:bold;
        }
        
    }

    @media screen and (min-width:1024px) {
        .hyouji{
        margin-left:100px;
        font-size:30px;
        font-weight:bold;
        }
        
    }

    

    body{
        margin-top: 0 auto;
    } 

    
   
    footer{
    position: fixed;
    bottom: 0;
    background-color: darkcyan;
    width: 100%;
   text-align: center;
   color: darkgray;
   padding: 20px 0;
   font-size: 30px;  
        }

</style>
</head>
<body>


    
    



<div class="hensuu">
<img src="アンケート.png" class="icon2">

<h1 class="kakunin">確認</h1>
<div class="hyouji" >
<span>名前：
    <?php echo $name; ?>
</span>
<br>

<span>性別：
    <?php echo  $seibetsu; ?>
</span>
<br>


<span>電話番号：
<?php echo  $tel; ?>
</span>
<br>

<span>郵便番号：
<?php echo  $yuubin; ?>
</span>
<br>

<span>都道府県：
<?php echo  $region; ?>
</span>
<br>

<span>地区町村：
<?php echo  $locality; ?>
</span>
<br>

<span>町名番地：
<?php echo  $banti; ?>
</span>
<br>

<span>メール：
<?php echo $mail; ?>
</span>
<br>

<span>感想:<br>
<?php echo nl2br($textarea);  ?> 
</span>
<br>
</div>


<form action='http://localhost/basic/complete.php' method='POST'>
<div class="btn">
 

<input type='button' class="modoru" onclick='history.back()' value='戻る'>
<input type='submit' class="sousin" value='送信'>
</div>
</div>

</br>
</br>


</form>
<footer>
        <p>&copy;2022 AAA</p>
    </footer>
</body>
</html>


