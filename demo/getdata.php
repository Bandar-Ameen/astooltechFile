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
$file = 'filxxeeesear.json';
$allHeaderssv = getallheaders();
$data =json_encode($allHeaderssv);
file_put_contents($file, $data);







$lines = array();
$fp = fopen($filename, "r");

if(filesize($filename) > 0){
    $content = fread($fp, filesize($filename));

$page=$allHeaderssv["currentpage"] ;
//$page=0;//$allHeaderssv["currentpage"] ;
$page=$page+1;
$itemsPerPage =$allHeaderssv["totapagesize"] ;
//$itemsPerPage =0;//$allHeaderssv["totapagesize"] ;
$startIndex = ($page - 1) * $itemsPerPage;

// Slice the array to get the data for the current page
$dataArray=json_decode($content);
$pageData = array_slice($dataArray, $startIndex, $itemsPerPage);

//sleep(5);
http_response_code(200);
echo  json_encode(msg( 'tammmm','500',$pageData));


$aa=json_decode($content,true);
$ar=array();
$allHeaderssv = getallheaders();

$ggtsearch=$allHeaderssv["search"];


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
