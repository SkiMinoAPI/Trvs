<?php
$data = json_decode(file_get_contents('http://jiuli.xiaoapi.cn/i/pixiv_img.php?r18=2&key=JiuLiapi'));
if (isset($_GET['imgurl'])) {
	echo $data->imgurl;
} else {
	header("Location: {$data->imgurl}");
}
?>