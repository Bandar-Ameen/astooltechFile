<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers ,Authorization, X-Requested-With");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers ,ref, X-Requested-With");

//$filename="A_RecyDataCustome.json";
//$filename = "activityform.json";
//$filename = "activityformmobile.json";
$filename = "mymy.json";
$lines = array();
$fp = fopen($filename, "r");

if(filesize($filename) > 0){
    $content = fread($fp, filesize($filename));
http_response_code(200);
echo $content; //json_encode(msg( 'tammmm','500', $content));
   // $lines = explode("\n", $content);
    fclose($fp);
}

function msg($success, $status, $message, $extra = [])
{
    return array_merge([
        'success' => array([
        'tt' => 'gggggggg',
        'aa' => $status,
        'ss' =>array_merge([
       'mm' => 'ggggggggkkkkkkkk',
 ])
    ]),
        'status' => $status,
        'message' => $message
    ], $extra);
}
//echo "fff";
//$dm = json_encode($lines, JSON_UNESCAPED_SLASHES);
//echo $dm;

/*$fileContent = file_get_contents("/test2.json");

echo $fileContent;
*/
?>
