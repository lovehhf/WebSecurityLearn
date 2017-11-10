<?php

session_start();
echo "访客sessionid是:".session_id();
echo "<br /><br />";
echo "访客:".htmlspecialchars($_GET["username"], ENT_QUOTES); 
echo "<br /><br />";
echo "BOOK商品的数量".htmlspecialchars($_SESSION["book"], ENT_QUOTES);
echo "<br /><br />";

$_SESSION["username"];
$_SESSION["password"];
$_SESSION["book"];
?>