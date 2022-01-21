<?php
function imgBase64Decode($base64_image_content){
    $match = preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image_content, $result);
    if(!$match){
        return false;
    }
    $base64_image = str_replace($result[1], '', $base64_image_content);
    $file_content = base64_decode($base64_image);
 
    return $file_content;
}
$base64code = $_GET['base64code'];
if ($base64code != null) {
    header('content-type: image/png');
    echo imgBase64Decode($base64code);
} else {
    http_response_code (503);
    echo json_encode(
        array(
            "code" => 503,
            "message" => 'No set \'base64code\''
        )
    );
}