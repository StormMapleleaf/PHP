<?php
    $title = "莫妮卡";
?>
<html>
    <head>
        <title>
            <?php
            echo $title;  //动态内容
            ?>
        </title>
    </head>

    <body>
        <meta charset="UTF-8"
        <h1>balala</h1>
        <ul>
            <?php
            for($i=0;$i<100;$i++){         //for循环
            ?>
            <li>
                <?php
                echo $i;
                ?>
            </li>

            <?php
            }
            ?>
        </ul>
    </body>
</html>


