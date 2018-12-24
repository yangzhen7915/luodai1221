<?php 

$id = $_GET['id'];  //4

$str = file_get_contents('./fruit.txt');
$arr = explode("\n",$str);
foreach($arr as $value){
    $res[] = explode("|",$value);
}

// echo "<pre>";
// print_r($res);
foreach($res as $value){
    if($id == $value[0]){
        $info = $value;
        break;
    }
}

// print_r($info);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container ul > li {
            float: none;
            width: 100%;
            text-align: center;
        }
        .container ul > li img {
            width: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="#">水果</a>
            <a href="#">干果</a>
            <a href="#">蔬菜</a>
        </p>
        <ul>
            <li>
                <img src="<?= $info[1]; ?>" alt="">
                <p>这是 <?= $info[2]; ?> 商品的详情图</p>
            </li>
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>