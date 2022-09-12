<?php
    session_start();

    // $name = htmlspecialchars(validateData("name"),ENT_QUOTES);
    // $mail = htmlspecialchars(validateData("mail"),ENT_QUOTES);
    // $seibetsu = htmlspecialchars(validateData("seibetsu"),ENT_QUOTES);    
    // $textarea = htmlspecialchars(validateData("textarea"),ENT_QUOTES);    
    // $tel = htmlspecialchars(validateData("tel"),ENT_QUOTES);    
    // $yuubin = htmlspecialchars(validateData("yuubin"),ENT_QUOTES);    
    // $region = htmlspecialchars(validateData("region"),ENT_QUOTES);    
    // $locality = htmlspecialchars(validateData("locality"),ENT_QUOTES);    
    // $banti = htmlspecialchars(validateData("banti"),ENT_QUOTES);   

    $name = "";
    $mail = "";
    $seibetsu = "";
    $textarea = "";
    $tel = "";
    $yuubin = "";
    $region = "";
    $locality = "";
    $banti = "";
    // エラー用
    $errorName = "";
    $errorMail = "";
    $errorSeibetsu = "";
    $errorTextarea = "";
    $errorTel = "";
    $errorYuubin = "";
    $errorRegion = "";
    $errorLocality = "";
    $errorBanti = "";

    if(isset($_SESSION['errorName']) && isset($_SESSION['errorMail']) && isset($_SESSION['errorSeibetsu']) 
    && isset($_SESSION['errorTextarea']) && isset($_SESSION['errorTel'] )&& isset($_SESSION['errorYuubin'])
    && isset($_SESSION['errorYuubin'] )&& isset($_SESSION['errorRegion'] )&& isset($_SESSION['errorLocality'] )
    && isset($_SESSION['errorBanti'] )){
        // $name = !is_null($_SESSION['name']) ? $_SESSION['name']縺景f譁?縲: 縺九ｉelse
        $name = !is_null($_SESSION['name']) ? $_SESSION['name'] : "";
        $mail = !is_null($_SESSION['mail']) ? $_SESSION['mail'] : "";
        $seibetsu = !is_null($_SESSION['seibetsu']) ? $_SESSION['seibetsu'] : "";
        $textarea = !is_null($_SESSION['textarea']) ? $_SESSION['textarea'] : "";
        $tel = !is_null($_SESSION['tel']) ? $_SESSION['tel'] : "";
        $yuubin = !is_null($_SESSION['yuubin']) ? $_SESSION['yuubin'] : "";
        $region = !is_null($_SESSION['region']) ? $_SESSION['region'] : "";
        $mail = !is_null($_SESSION['locality']) ? $_SESSION['locality'] : "";
        $mail = !is_null($_SESSION['banti']) ? $_SESSION['banti'] : "";


    }

    if(isset($_SESSION['error_name']) && isset($_SESSION['error_mail']) && isset($_SESSION['error_seibetsu'])
    && isset($_SESSION['error_textarea'])&& isset($_SESSION['error_tel'])&& isset($_SESSION['error_yuubin'])
    && isset($_SESSION['error_region'])&& isset($_SESSION['error_locality'])&& isset($_SESSION['error_banti'])){
        $errorName = $_SESSION['error_name'] ? 1 : 0;
        $errorMail = $_SESSION['error_mail'] ? 1 : 0;
        $errorSeibetsu = $_SESSION['error_seibetsu'] ? 1 : 0;
        $errorTextarea = $_SESSION['error_textarea'] ? 1 : 0;
        $errorTel = $_SESSION['error_tel'] ? 1 : 0;
        $errorYuubin = $_SESSION['error_yuubin'] ? 1 : 0;
        $errorRegion = $_SESSION['error_region'] ? 1 : 0;
        $errorLocality = $_SESSION['error_locality'] ? 1 : 0;
        $errorBanti = $_SESSION['error_banti'] ? 1 : 0;
    }
	?>

<!-- Form.html -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="shift-jis">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <style type="text/css">
        body{
            
	
	font-family:sans-serif;
    
}

@media screen and (max-width:420px) {
    body{
    width:100%;
	text-align:center;
    
	padding:0;
	font-family:sans-serif;
   
}
}

@media screen and (min-width:768px) {
    body{

	margin:0;
	padding:0;
	font-family:sans-serif;
    
}
}
@media screen and (min-width:1024px) {
    body{
        
     margin:0;
	padding:0;
	font-family:sans-serif;
   
}
}

article{
	margin:15px;
}

@media screen and (min-width:768px) {
article{
	margin:15px;
}
}

@media screen and (min-width:1024px) {
    article{
	margin:15px;
} 
}


footer{
    
    
    position: fixed;
    padding: 20px 0;
   font-size: 30px;  
    bottom: 0;
    background-color: darkcyan;
    width: 100%;
   text-align: center;
   color: darkgray;
  
}

footer p{
    margin-top:0;
    margin-bottom:0;
}








/*---------------------------*/

#icon{
   width: 30%; 
   margin-left: 260px;
}

@media screen and (min-width:1025px) {
#icon{
   width: 30%; 
   margin-left: 260px;
}
}

@media screen and (min-width:768px) {
#icon{
   width: 30%; 
   margin-left: 260px;
}
}
@media screen and (min-width:320px) {
#icon{
   width: 30%; 
   margin-left: 260px;
}
}




/*---------------------------*/


.submit{
    width: 100px;
    
}

@media screen and (min-width:768px) {
    .submit{
    width: 100px;
    
}
}

@media screen and (min-width:1025px) {
    .submit{
    width: 100px;
    
}
}

.container{
    margin: 100px auto;
    background-color: skyblue;
    width: 450px;
    height: 800px;
}

@media screen and (min-width:768px) {
    .container{
    
    background-color: skyblue;
    
    width: 700px;
    height: 800px;
}
}

@media screen and (min-width:1025px) {
    .container{
   
    background-color: skyblue;
    
    width: 700px;
    height: 800px;
}
}

p.name{
    margin-left: 37px;
}

p.tel{
    margin-left: 2px;
}

p.mail{
    margin-left: 15px;
}

.container{
    text-align: center;
}

textarea{
	resize: none;
	
}

@media screen and (min-width:768px) {
p.name{
    margin-left: 37px;
}

p.tel{
    margin-left: 2px;
}

p.mail{
    margin-left: 15px;
}

.container{
    text-align: center;
}

textarea{
	resize: none;
	
}
}

@media screen and (min-width:1024px) {
 p.name{
    margin-left: 37px;
}


p.tel{
    margin-left: 2px;
}

p.mail{
    margin-left: 15px;
}

.container{
    text-align: center;
}

textarea{
	resize: none;
	
}
}



.submit{
    margin-bottom: 100px;
}
    </style>
    
</head>

<body>
    <div class="container">
        
    <h1>アンケート</h1>
    <img src="./アンケート.png" id="icon">
   
    <p>アンケートお願い致します。</p>
    <form action="http://localhost/basic/confirm.php" method="post">

        


        
        性別を選択：<input id="male" type="radio" name="seibetsu" value="男性" ><label for="male">男性</label>
                        <input id="female" type="radio" name="seibetsu" value="女性"><label for="female" >女性</label>
                        <?php
                        echo'<font color="red">'; 
                        if($errorSeibetsu) echo "未入力";
                        echo '</font>'; ?>
    <p class="name">
    名前：<input type="text" class="name" name="name"  placeholder="山田　太郎"/>
            <?php 
            echo'<font color="red">'; 
             if($errorName) echo "未入力";
             echo '</font>'; ?>
        </p>

    <p class="tel">
    電話番号：<input type="tel" name="tel" class="tel2"  placeholder="091-1234-5678"/>
            <?php
            echo'<font color="red">';
            if($errorTel) echo "未入力";
            echo '</font>'; ?>
        </p>

        郵便番号：<input type="text" class="p-postal-code" name="yuubin"  maxlength="8"  placeholder="123-4567"><?php  echo'<font color="red">';
         if($errorYuubin) echo "未入力";
         echo '</font>';  ?><br>
         
    
        都道府県：<input type="text" class="p-region"  name="region"  placeholder="東京都/埼玉県"><?php echo'<font color="red">';
         if($errorRegion) echo "未入力";
         echo '</font>'; ?><br>
    
        地区町村：<input type="text" class="p-locality" name="locality"  placeholder="〇区/〇市"><?php echo'<font color="red">';
        if($errorLocality) echo "未入力";
        echo '</font>'; ?><br>
    
        町名番地：<input type="text" class="p-street-address  p-extended-address" name="banti"  placeholder="〇〇町 1-2-3"><?php echo'<font color="red">';
         if($errorBanti) echo "未入力"; 
         echo '</font>'; ?><br>
    
    <p class="mail">
    メール：<input type="email" class="mail2"  name="mail"  placeholder="abcde@dejitak.com">
        <?php echo'<font color="red">';
         if($errorMail) echo "未入力"; 
         echo '</font>';?>
    </p>

    <h2>感想</h2>

    <p id="textarea">
        <textarea rows="8" name="textarea" cols="40"  placeholder="感想を入力してください" maxlength="300"></textarea>
        <?php echo'<font color="red">';
         if($errorTextarea) echo "未入力"; 
         echo '</font>';?>
        </p>
    
        <input class="submit" type="submit" value="確認">

 
 </p>

 

 
</div>


        
    </form>

    <footer>
        <p>&copy;2022 AAA</p>
    </footer>
</body>
</html>
