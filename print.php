<?php
$data = json_decode(file_get_contents('http://jiuli.xiaoapi.cn/i/pixiv_img.php?r18=2&key=JiuLiapi'));
header("Location: {$data->imgurl}");
?>