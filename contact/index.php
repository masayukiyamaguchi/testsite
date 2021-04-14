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

<h2>CONTACT</h2>

<div>
<p>
攻略の質問などありましたら、フォームから気軽にお問い合わせください。<br>
「一緒に遊びたい！」などのお誘いも大歓迎です(*´ω｀*)<br>
</p>
</div>

<!-- お問い合わせフォーム -->
<!-- 送信内容はform.phpへ送られる -->
<div class="form">
    <form action="form.php" method="post">
        <p>【名前】</p>
        <input type="text" name="name">

        <p>【E-mail】</p>
        <input type="text" name="email">

        <p>【プレイサーバー】</p>
        <select name="server">
            <option value="chocobo">chocobo</potion>
            <option value="mandoragora">mandoragora</potion>
            <option value="titan">titan</potion>
            <option value="bahamut">bahamut</potion>
            <option value="pandaemonium">pandaemoniumu</potion>
        </select>

        <p>【得意ジョブ】</p>
            <input type="checkbox" name="job[]" value="ナイト　">ナイト　
            <input type="checkbox" name="job[]" value="暗黒騎士　">暗黒騎士　
            <input type="checkbox" name="job[]" value="ガンブレイカー　">ガンブレイカー　
            <input type="checkbox" name="job[]" value="竜騎士　">竜騎士　
            <br>
            <input type="checkbox" name="job[]" value="モンク　">モンク　
            <input type="checkbox" name="job[]" value="黒魔道士　">黒魔道士　
            <input type="checkbox" name="job[]" value="白魔道士　">白魔道士　
            <input type="checkbox" name="job[]" value="占星術士　">占星術士　
            

        <p>【ログイン時間帯】</p>
            <input type="radio" name="playtime" value="午前中">午前中　
            <input type="radio" name="playtime" value="18:00～20:00">18:00～20:00　
            <input type="radio" name="playtime" value="20:00～22:00">20:00～22:00　
            <input type="radio" name="playtime" value="22:00以降">22:00以降　
            <input type="radio" name="playtime" value="24時間">24時間　


        <p>【問い合わせ内容】</p>
        <textarea name="content"></textarea>

        <br>

        <input class="submit" type="submit" value="送信">



    </form>

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