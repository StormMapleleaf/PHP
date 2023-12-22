<?php

// 获取静态二维码的内容
$staticQRCodeContent = "./erweima.png"; // 请替换成您实际的二维码内容

// 进行重定向
header("Location: $staticQRCodeContent");
exit;


