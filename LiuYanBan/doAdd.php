<!--//执行留言添加-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
</head>
<body>
<?php include("./menu.php"); ?>
<h4>我要留言</h4>

<?php
//获取留言信息
$data = [];
$data['title'] = $_POST['title'];
$data['author'] = $_POST['author'];
$data['content'] = $_POST['content'];
$data['ip'] = $_SERVER['REMOTE_ADDR'];
$data['addtime'] = date("Y-m-d H:i:s");

//##拼装字段，@@拼装每条信息
$info = implode("##", $data) . "@@";

//将信息添加到ly.db
file_put_contents("ly.db", $info, FILE_APPEND);

echo "留言成功";
?>
</body>
</html>



