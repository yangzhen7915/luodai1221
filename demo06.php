<?php 
// echo "<pre>";
// print_r($_FILES);
// Array
// (
//     [file] => Array
//         (
//             [name] => 3.png
//             [type] => image/png
//             [tmp_name] => C:\Users\xiaosa\AppData\Local\Temp\php9C84.tmp
//             [error] => 0
//             [size] => 22043
//         )
// )
$filename = time().mt_rand(1000,9999).strrchr($_FILES['file']['name'],'.');  //1500001234.png

$bool = move_uploaded_file($_FILES['file']['tmp_name'], './upload/'.$filename);

if($bool){
	echo "success";
}



 ?>