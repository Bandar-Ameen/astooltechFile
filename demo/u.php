<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers ,Authorization, X-Requested-With");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers ,ref, X-Requested-With");

$filename = "test2.json";
//$filename = "datatree.json";
//$filename = "activitychat.json";
//$filename = "activityform.json";
//$filename = "activitychat.json";
$lines = array();
$content=null;
$fp = fopen($filename, "r");

if(filesize($filename) > 0){
    $content = fread($fp, filesize($filename));
http_response_code(200);
//echo $content;
   // $lines = explode("\n", $content);
    fclose($fp);
}

$returnData = [
                        'success' => 1,
                        'message' =>"hhh",
                        'data'=>json_decode($content,JSON_UNESCAPED_SLASHES)
                    ];	


function msggv($success, $status, $message, $extra = [])
{
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message,
        'data'=>$extra
    ]);
}
$returnData = msggv(0, 200,'nau',json_decode($content));
					echo json_encode($returnData);
//return json_encode($returnData,false);
//

//echo "fff";
//$dm = json_encode($lines, JSON_UNESCAPED_SLASHES);
//echo $dm;

/*$fileContent = file_get_contents("/test2.json");

echo $fileContent;
*/
?>
