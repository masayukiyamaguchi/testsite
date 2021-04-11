<?php

// 記事の内容
$scs = array(
    ["id"=>0,
     "name"=>"gunhild",
     "title"=>"グンヒルドディルーブラム零式クリアー記念！",
     "coment01"=>"2月8日に踏破しました！",
     "coment02"=>"mana:3rd World:6th",
     "url"=>"http://localhost/testsite/image/ffxiv_20210207_024900_162.png"],

     ["id"=>1,
     "name"=>"eden04",
     "title"=>"エデン共鳴編3層に突入！",
     "coment01"=>"エデン攻略は3層に到達しました！",
     "coment02"=>"",
     "url"=>"http://localhost/testsite/image/ffxiv_20210111_160054_335.png"],

     ["id"=>2,
     "name"=>"aki",
     "title"=>"秋の木漏れ日の中で",
     "coment01"=>"良い場所を見つけました",
     "coment02"=>"秋ですねー",
     "url"=>"http://localhost/testsite/image/ffxiv_20201108_022722_987.png"],

     ["id"=>3,
     "name"=>"newgear",
     "title"=>"新しい装備をGET!",
     "coment01"=>"新AFをGET!",
     "coment02"=>"後ろ姿がかっこいい！",
     "url"=>"http://localhost/testsite/image/ffxiv_20201023_174746_462.png"],

     ["id"=>4,
     "name"=>"meating",
     "title"=>"作戦会議中！",
     "coment01"=>"IDで作戦会議中。",
     "coment02"=>"なかなか難しい、、",
     "url"=>"http://localhost/testsite/image/ffxiv_20210205_023755_085.png"],

     ["id"=>5,
     "name"=>"rubymount",
     "title"=>"ルビーウェポンマウントGET!",
     "coment01"=>"50周目でようやく手に入りました！",
     "coment02"=>"秋の夜空とともに！",
     "url"=>"http://localhost/testsite/image/ffxiv_20201212_131238_072.png"],
);

// 記事の内容の中から特定のnameを探してリターン
function findByName($scs,$name){
    foreach($scs as $item){
        if($item["name"]==$name){
            return $item;
        };
    };
};

// 最新の記事の順番に並び替え
$scss =  array_reverse($scs);

?>