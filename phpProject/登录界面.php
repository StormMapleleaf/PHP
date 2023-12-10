<?php
session_start();
//判断name是否存在
if(!isset($_POST["name"])){
    $_POST["name"]='a';
}


$name=$_POST["name"];
if($name == "storm"){//name符合要求进入新页面
    echo "welcome storm!";

    //计数部分
    if(!isset($_SESSION["count"])){
        $_SESSION["count"]=0;
    }
    $count=intval($_SESSION["count"]);
    if($count>6) {
        echo "次数>6";
    }else{$count++;
        $_SESSION["count"]=$count;
    }



}else{

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <input type="text" name="name">
        <input type="submit" value="提交">
    </form>
</body>
</html>
<?php
}
?>