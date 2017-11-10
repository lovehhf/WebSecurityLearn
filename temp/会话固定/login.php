<?php
session_start();


if (isset($_POST["login"])) {
	$link = mysql_connect("localhost", "root", "root") or die("无法建立数据库连接".mysql_error());
	mysql_select_db("sqlinject") or die("无法连接到数据库");
	
}
if (!get_magic_quotes_gpc()){
	$query = "select * from admin where username='".addslashes($_POST["username"])."'";
}else{
	$query = "select * from admin where username='".$_POST["username"]."'";
}

$result = mysql_query($query) or die("执行MySQL查询语句失败.".mysql_error());

$match_count = mysql_num_rows($result);
if ($match_count){
	$_SESSION["username"] = $_POST["username"];
	$_SESSION["password"] = $_POST["password"];
	$_SESSION["book"] = 1;
	mysql_free_result($result);
	mysql_close($link);
	header("Location http://localhost/test1/index.php?user=".$_POST["username"]);
}

?>

