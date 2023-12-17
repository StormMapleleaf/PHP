<?php
//后端服务器重定向，外部重定向
//    header("Location:https://csdn.net");

//web内部重定向
$content = file_get_contents("news.php");
echo $content;