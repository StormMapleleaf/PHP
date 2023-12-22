<!--添加留言表单-->


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文本留言板</title>
</head>
<body>
<?php include("./menu.php"); ?>

<form action="doAdd.php" method="post">
    <table style="  width=320px; border=0;">
        <h4>留言</h4>
        <tr>
            <td>标题</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>作者</td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td>内容</td>
            <td><textarea name="content" id="" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="添加">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>


</body>
</html>

