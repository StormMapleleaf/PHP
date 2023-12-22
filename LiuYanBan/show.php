<!--留言浏览-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>我的文本式留言板</title>
    <script type="text/javascript">
        function doDel($k) {
            if (confirm("确定要删除吗？")) {
                window.location.href = "doDel.php?k=" + $k;
            }
        }
</script>
</head>
<body>
<?php include("./menu.php"); ?> <h4>查看留言</h4>
    <table>
        <tr>
            <th>标题</th>
            <th>作者</th>
            <th>留言内容</th>
            <th>IP</th>
            <th>留言时间</th>
            <th>操作</th>
        </tr>
        <?php //查看留言
        //1. 读取留言内容，并去除最后一个多余的@@符
        $info = rtrim(file_get_contents("ly.db"), "@");
        //2. 使用@@拆分每条留言
        $list = explode("@@", $info);
        //3. 判断，并循环输出留言
        if (!empty($info) && is_array($list) && count($list) > 0)
            foreach ($list as $k => $v) {
                //4. 使用##拆分留言中的每个字段信息
                $ly = explode("##", $v);
                //5. 输出
                echo "<tr>";
                echo "<td>{$ly[0]}</td>";
                echo "<td>{$ly[1]}</td>";
                echo "<td>{$ly[2]}</td>";
                echo "<td>{$ly[3]}</td>";
                echo "<td>{$ly[4]}</td>";
                echo "<td><a href='javascript:doDel({$k})'>删除</a></td>";
                echo "</tr>";
            }
        ?>
        }
    </table>
</body>
</html>
