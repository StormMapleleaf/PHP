<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>我的文本式留言板</title>
</head>
<body>
    <?php include("./menu.php"); ?>
    <h4>删除留言</h4>
    <?php
        //执行留言删除
        //1. 读取留言内容，并去除最后一个多余的@@符
        $info = rtrim(file_get_contents("ly.db"), "@");
        //2. 使用@@拆分每条留言
        $list = explode("@@", $info);
        //3. 删除指定的留言
        $k = $_GET['k'];
        unset($list[$k]);
        //写回去
        if (count($list) > 0) {
            file_put_contents("ly.db", implode("@@", $list) . "@@");
        } else {
            file_put_contents("ly.db", ""); //清空写
        }
        echo "删除成功！";
    ?>
</body>
</html>