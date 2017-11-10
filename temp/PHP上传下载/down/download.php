<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Insert title here</title>
</head>
<body>
<?php 
//列出文件名
$dir = "uploads/"; // 文件夹的名称
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			echo "文件名:<a href='doDownload.php?filename=$dir$file'> $file</a> <br>";
		}closedir($dh);}}?> 
</body>
</html>