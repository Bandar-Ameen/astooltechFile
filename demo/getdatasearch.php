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
$filename = "test2.json";
//$filename="v_layout.json";
//$filename="A_TreeView.json";
//$filename="layoutstest.json";
//$filename="select.json";
//$filename = "TopView.json";
//$filename="xzxzxzxxxxx.json";
//$filename = "settingform.json";



$lines = array();
$fp = fopen($filename, "r");

if(filesize($filename) > 0){
    $content = fread($fp, filesize($filename));

$aa=json_decode($content,true);
$ar=array();
$allHeaderssv = getallheaders();
$ggtsearch=$allHeaderssv["search"];

//$response = file_get_contents($url, false, $context);
/*$file = 'filxxeeesear.json';
$data =json_encode($allHeaderssv);
file_put_contents($file, $data);

*/

$aa=searchte($aa,"drugName_ar",$ggtsearch);
/*if($ggtsearch=="hello"){

array_push($ar,$aa[0]);
}else{
array_push($ar,$aa[1]);
array_push($ar,$aa[2]);
array_push($ar,$aa[3]);
}*/
http_response_code(200);
echo  json_encode(msg( 'tammmm','500',$aa));
   // $lines = explode("\n", $content);
    fclose($fp);
}

function searchInArrayContains($array, $key, $substring) {
    $results = [];
    foreach ($array as $item) {
        if (isset($item[$key]) && stripos($item[$key], $substring) !== false) {
            $results[] = $item;
        }
    }
    return $results;
}
function searchte($arr,$key,$tex){
$searchResults = searchInArrayContains($arr, $key, $tex);

if (!empty($searchResults)) {
    return $searchResults;
} else {
    return [];
}


}

function msg($success, $status, $message, $extra = [])
{
	
	$ar=array();
	array_push($ar,$message);
    return array_merge([
        'success' => array([
        'tt' => 'gggggggg',
        'aa' => $status,
        'ss' =>array_merge([
       'mm' => 'ggggggggkkkkkkkk',
 ])
    ]),
        'status' => $status,
        'message' =>
    array([
        'tt' => 'gggggggg',
        'aa' => $status,
        'ss' =>array_merge([
       'mm' =>  $message])])


    ], $extra);
}
//echo "fff";
//$dm = json_encode($lines, JSON_UNESCAPED_SLASHES);
//echo $dm;

/*$fileContent = file_get_contents("/test2.json");

echo $fileContent;
*/
?>
