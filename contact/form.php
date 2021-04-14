<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>testsite</title>
    <link rel="stylesheet" href="../css/stylesheet.css">   
</head>
<body>


<!-- ヘッダー部分 -->
<footer>
<div class="inside">


<header>
    <a href="http://localhost/testsite/"> <img  class="logo" src="http://localhost/testsite/image/logo.jpg"></a>
    <img class="media" src="http://localhost/testsite/image/icon_facebook.gif">
    <img class="media" src="http://localhost/testsite/image/icon_instagram.gif">
</header>

<div class="menu">
<p>
<ul class="nav">
<a href="http://localhost/testsite/about"><li>ABOUT</li></a>
<a href="http://localhost/testsite/screenshot"><li>SCREEN SHOT</li></a>
<a href="http://localhost/testsite/blog"><li>BLOG</li></a>
<a href="http://localhost/testsite/contact"><li>CONTACT</li></a>
</ul>
</p>
</div>

</div>
</footer>
<!-- ヘッダーここまで -->


<!-- コンテンツここから -->
<footer>
<div class="inside">

    <h2>送信内容</h2>

    <div class="send_detail">
        <p>【名前】</p> 
        <?php echo $_POST["name"]; ?>
        <p>【E-mail】</p>
        <?php echo $_POST["email"]; ?>
        <p>【プレイサーバー】</p>
        <?php echo $_POST["server"]; ?>
        <p>【得意ジョブ】</p>
        <?php foreach($_POST["job"] as $job): ?>
            <?php echo $job; ?>
            <br>
        <?php endforeach?>            

        <p>【ログイン時間帯】</p>
        <?php echo $_POST["playtime"]; ?>
        <p>【問い合わせ内容】</p>
        <?php echo $_POST["content"]; ?>
    </div>





</div>   



<!-- フッター -->
<div class="footer">
<p>
<ul class="nav">
<a href="http://localhost/testsite/about"><li>ABOUT</li></a>
<a href="http://localhost/testsite/screenshot"><li>SCREEN SHOT</li></a>
<a href="http://localhost/testsite/blog"><li>BLOG</li></a>
<a href="http://localhost/testsite/contact"><li><font color ="gray">CONTACT</font></li></a>
</ul>
</ul>
</p>
</div>


</div>
</footer>
<!-- フッターここまで -->
<!-- コンテンツここまで -->



</body>
</html>