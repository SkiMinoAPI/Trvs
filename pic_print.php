<?php
/**
 * Pic Print
 */

$url = 'https://drive.datas.gq'.$_GET['path'];
switch ($_GET['type']) {
    case 'png':
        header("Content-type: image/png");
        $im = imagecreatefrompng($url);
        imagepng($im);
        imagedestroy($im);
    break;
    case 'jpeg':
        header("Content-type: image/jpeg");
        $im = imagecreatefromjpeg($url);
        imagejpeg($im);
        imagedestroy($im);
    break;
    case 'webp':
        header("Content-type: image/webp");
        $im = imagecreatefromwebp($url);
        imagewebp($im);
        imagedestroy($im);
    break;
    case 'gif':
        header('Content-type: image/gif');
        $im = imagecreatefromgif($url);
        imagegif($im);
        imagedestroy($im);
    break;
    case 'wbmp':
        header('Content-type: image/wbmp');
        $im = imagecreatefromwbmp($url);
        imagewebp($im);
        imagedestroy($im);
    break;
    case 'svg':
        header('Content-type: image/svg+xml');
        echo file_get_contents($url);
    break;
    default:
        http_response_code (503);
        echo json_encode(
            array(
                "code" => 503,
                "message" => 'No set \'type\' or \'type\' can\'t identify'
            )
        );
    break;
}
?>