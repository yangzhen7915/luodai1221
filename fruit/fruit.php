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
            $arr = array(
                array(
                    "src"=>"img/banana1.jpg",
                    "text"=>"香蕉"
                ),
                array(
                    "src"=>"img/apple1.jpg",
                    "text"=>"苹果"
                )
            );
            
         ?>
        <ul>
        <?php foreach($arr as $value): ?>
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
