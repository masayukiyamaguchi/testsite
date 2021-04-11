<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>testsite</title>
    <link rel="stylesheet" href="./css/stylesheet.css">   
</head>

<?php 
require_once('./data/screenshotdata.php');

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
<a href="http://localhost/testsite/screenshot"><li>SCREEN SHOT</li></a>
<a href="http://localhost/testsite/blog"><li>BLOG</li></a>
<a href="http://localhost/testsite/contact"><li>CONTACT</li></a>
</ul>
</p>
</div>

</div>
</footer>
<!-- ヘッダーここまで -->


<!-- メインビジュアル -->
<div class="main">
<img src="http://localhost/testsite/image/top_main.jpg">
</div>
<!-- メインビジュアルここまで -->

<!-- コンテンツここから -->
<footer>
<div class="inside">

<div>
<h1>PLAY JOB</h1>
</div>

<div class="contents">

    <div class="contents-item">
        <h2>ナイト</h2>
        <p>Paladin</p>
        <img class="jobicon" src="http://localhost/testsite/image/PLD.png">
        <p>ウルダハの近衛兵団「銀冑団」の騎士たちは、忠誠を誓う王家を守るため、長い歴史の中で技を磨き上げてきた。白銀の甲冑で身を固め、大盾と騎士剣を手に戦いに身を投じる彼らは、剣術だけではなく護衛術にも長け、主君の命を断固として守り抜く。</p>
    </div>

    <div class="contents-item">
        <h2>竜騎士</h2>
        <p>Dragoon</p>
        <img class="jobicon" src="http://localhost/testsite/image/DRG.png">
        <p>竜を屠る者……「竜騎士」。建国以来、ドラゴン族との果て無き戦いを続ける宗教都市「イシュガルド」において、その言葉が持つ意味は限りなく重い。ドラゴン族を倒す。その目的のためだけに発展した槍術は、硬き鱗に隠されたドラゴン族の急所を狙うため、独特の跳躍攻撃を生み出した。</p>
    </div>

    <div class="contents-item">
        <h2>白魔道士</h2>
        <p>White Mage</p>
        <img class="jobicon" src="http://localhost/testsite/image/WHM.png">
        <p>癒やしと浄化の力として編み出されながらも、人々の尽きぬ欲望のために乱用され、大災厄を引き起こした歴史を持つ「白魔法」。一度は、禁忌として封じられたが、後世、「グリダニア」の「角尊」たちの手で復元され、密かに継承されてきた。</p>
    </div>

</div>

<p></p>

<div>
<h1>SCREEN SHOT</h1>
</div>

<!-- ループ記事を表示 -->
<div class="contents_blog">
    
    <?php foreach($scss as $item): ?>
    <div class="contents_blog_item">        
        <a href="./screenshot/detail.php?name=<?php echo $item["name"]?>">　<!-- リンクにクエリ情報を付与 -->
        <img class="blog" src="<?php echo $item["url"]; ?>"></a>    

    </div>
    <?php endforeach ?>    

</div>   



<div>
<h1>BLOG</h1>
</div>

<div class="contents_strategy">

    <div class="contents_strategy_item">
        <img class="strategy" src="http://localhost/testsite/image/samneil20210410.jpg">
    </div>

    <div class="contents_strategy_item">
        <img class="strategy" src="http://localhost/testsite/image/20201212samneil.jpg">
    </div>

    <div class="contents_strategy_item">
        <img class="strategy" src="http://localhost/testsite/image/20201228samneil.jpg">
    </div>

    <div class="contents_strategy_item">
        <img class="strategy" src="http://localhost/testsite/image/20210111samneil.jpg">
    </div>

    <div class="contents_strategy_item">
        <img class="strategy" src="http://localhost/testsite/image/20210301024.jpg">
    </div>

    <div class="contents_strategy_item">
        <img class="strategy" src="http://localhost/testsite/image/samneil20210221.jpg">
    </div>

</div>   



<!-- フッター -->
<div class="footer">
<p>
<ul class="nav">
<a href="http://localhost/testsite/about"><li>ABOUT</li></a>
<a href="http://localhost/testsite/screenshot"><li>SCREEN SHOT</li></a>
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