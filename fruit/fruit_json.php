<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="javascript:;">水果</a>
            <a href="javascript:;">干果</a>
            <a href="javascript:;">蔬菜</a>
        </p>
        <?php 
            // $arr = array(
            //     array(
            //         "src"=>"img/banana1.jpg",
            //         "text"=>"香蕉"
            //     ),
            //     array(
            //         "src"=>"img/apple1.jpg",
            //         "text"=>"苹果"
            //     )
            // );
            // --------------------------------------------------------
            // 关于json的一些说明
            // 1.json文件中不能有注释
            // 2.json文件的格式有两种  [] 和 {}
            // 3.json文件中保存数据 {}中的键必须是双引号""
            $str = file_get_contents('./data.json');
            // echo $str;
            // json_decode()将满足json格式的字符串转换成数组或对象
            // json_encode()将数组转换json格式的字符串
            $res = json_decode($str,true);
            // echo "<pre>";
            // print_r($arr);
            // 
            // Array ( 
            // [0] => 
            // stdClass Object ( [src] => img/banana1.jpg [text] => 香蕉 ) 
            // [1] => 
            // stdClass Object ( [src] => img/apple1.jpg [text] => 苹果) )
         ?>
        <ul>
        <?php foreach($res as $value): ?>
            <li>
                <img src="<?php echo $value['src'] ?>" alt="">
                <a href="#"><?php echo $value['text'] ?></a>
            </li>
        <?php endforeach; ?> 
        </ul>
    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>
