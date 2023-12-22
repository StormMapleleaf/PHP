<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>万年历</title></head>
<body>
<?php
//获取年和月
$yy = isset($_GET['y']) ? $_GET['y'] : date("Y");
$mm = isset($_GET['m']) ? $_GET['m'] : date("m");
echo "<h2>{$yy}年{$mm}月日历</h2>";
?>
<table width="700" border="1">
    <tr>
        <th>Sunday</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
    </tr>
    <?php
    $days = date("t", mktime(0, 0, 0, $mm, 1, $yy)); //当前月的天数
    $w = date("w", mktime(0, 0, 0, $mm, 1, $yy));  //当前月的1号星期几
    $w = date("w", strtotime("{$yy}-{$mm}-1"));//当前月的1号星期几
    //输出日历信息
    $d = 1;
    while ($d <= $days) {
        echo "<tr>";
        for ($i = 0; $i < 7; $i++) {
            if ($d > $days || ($i < $w && $d == 1)) {
                echo "<td>&nbsp;</td>";
            } else {
                echo "<td>{$d}</td>";
                $d++;
            }
        }
        echo "</tr>";
    }
    ?>
</table>
<br/><br/>
<?php //上一月和下一月
$ny = $py = $yy; //初始化下一年和上一年
$pm = $mm - 1; //定义上一月
if ($pm < 1) {
    $pm = 12;
    $py--;
}
$nm = $mm + 1;
//定义下一月
if ($nm > 12) {
    $nm = 1;
    $ny++;
}
echo " <a href='index.php?y={$py}&m={$pm}'>上一月</a> ";
echo " <a href='index.php?y={$ny}&m={$nm}'>下一月</a> ";
?>

</body>
</html>
