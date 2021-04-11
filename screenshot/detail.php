<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>testsite</title>
    <link rel="stylesheet" href="../css/stylesheet.css">   
</head>

<?php 
require_once('../data/screenshotdata.php');

?>

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
<a href="http://localhost/testsite/screenshot"><li><font color ="gray">SCREEN SHOT</font></li></a>
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

<h2>SCREEN SHOT</h2>


<!-- 記事内容掲載ループ -->

<?php

// クリックされた画像に付いてきたキーと値から記事を特定
$item = findByName($scs,$_GET["name"]);

?>

<!-- 記事を表示 -->
<div class="screenshot">
<img src="<?php echo $item["url"]; ?>">
</div>

<div class="coment">
    <h3><?php echo $item["title"]; ?></h3>
    <p><?php echo $item["coment01"]; ?></p>
    <p><?php echo $item["coment02"]; ?></p>
</div>



</div>   



<!-- フッター -->
<div class="footer">
<p>
<ul class="nav">
<a href="http://localhost/testsite/about"><li>ABOUT</li></a>
<a href="http://localhost/testsite/screenshot"><li><font color ="gray">SCREEN SHOT</font></li></a>
<a href="http://localhost/testsite/blog"><li>BLOG</li></a>
<a href="http://localhost/testsite/contact"><li>CONTACT</li></a>
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