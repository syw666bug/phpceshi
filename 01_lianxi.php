<?php
//01_lianxi.php

//1. 加载底图
$dst_im = imagecreatefromjpeg('images/reba.jpg');
//2. 加载源图
$src_im = imagecreatefromjpeg('images/water.jpg');
$x = imagesx($dst_im) - 84;
$y = imagesy($dst_im) - 84;
//3. 合并: 在源图上截取一部分  贴到 底图上
imagecopy($dst_im, $src_im, $x, $y, 517, 423, 84, 84);
//4.导出
header('content-type: image/png');
imagepng($dst_im);

imagedestroy($dst_im);
imagedestroy($src_im);