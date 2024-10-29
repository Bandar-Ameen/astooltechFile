<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers ,Authorization, X-Requested-With");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers ,ref, X-Requested-With");

//$filename="A_RecyDataCustome.json";
//$filename = "activityform.json";
//$filename = "activityformmobile.json";
//$filename = "fileeee.json";
//$filename = "fileeee.json";
//$filename = "windows.json";
// $filename = "filexx.json";
//$filename="CommonViewwwwwwwwwwwwwwwww.json";
//$filename="web_with_search.json";
//$filename = "advancedFragment.json";
//$filename = "dash.json";
//$filename = "wweb.json";
//$filename = "A_Recycle_With_Search.json";
//$filename = "A_Slider_View.json";
//$filename = "car.json";
$filename = "curd.json";
//$filename="v_layout.json";
//$filename="A_TreeView.json";
//$filename="layoutstest.json";
//$filename="select.json";
//$filename = "TopView.json";
//$filename="xzxzxzxxxxx.json";
//$filename = "settingform.json";
$allHeaderss = getallheaders();
$ty=$allHeaderss['curdtype'];
$message=$ty;
if($ty=="2"){
$message="تم التعديل بنجاح";
}
http_response_code(200);
echo  json_encode(msg( 'tammmmmm m','200', $message));

$lines = array();
/*$fp = fopen($filename, "r");

if(filesize($filename) > 0){
    $content = fread($fp, filesize($filename));
http_response_code(400);
echo  json_encode(msg( 'tammmm','500', $content));
   // $lines = explode("\n", $content);
    fclose($fp);
}
*/
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
