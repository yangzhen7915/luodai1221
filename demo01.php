<?php 

// php中的文件读取操作：
// 思考一个问题,js中有学过文件读取吗？js"没有"文件读取  以后会学一个FileReader文件读取器
// 1.读文件 file_get_contents(路径)
  header('content-type:text/html;charset=utf8');
  $str = file_get_contents('./data.txt');
  echo $str;

// 2.写文件 file_put_contents(路径,数据[,是否追加])
  file_put_contents('./data.txt',"我现在喜欢的小姐姐是吴宣仪",FILE_APPEND);






 ?>