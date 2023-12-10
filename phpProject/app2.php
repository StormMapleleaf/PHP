<?php
session_start();
if(!isset($_SESSION["count"])){

    $_SESSION["count"]=0;

}
//字符串转数值
$count=intval($_SESSION["count"]);

$n=123;
$title='aaa'.$n;//纯字符串用单引号

//$name=$_GET['name'];
//if($name=='zhangsan') {
//    echo "welcome" . $name;
//}else{
if($count>6) {
    echo "次数>6";
}else{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <h1>shayebushi</h1>
</body>
</html>

<?php
}
$count++;
$_SESSION["count"]=$count;
echo $count;
?>