<?php
$file_path = "test.txt";
if(file_exists($file_path)){
$fp = fopen($file_path,"r");
$str = "";
$buffer = 1024;//每次读取 1024 字节
while(!feof($fp)){//循环读取，直至读取完整个文件
$str .= fread($fp,$buffer);
} 
$str = str_replace("\r\n","<br />",$str);
echo $str;
}
?>