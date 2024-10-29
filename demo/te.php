
<?php

$url = 'http://192.168.1.103:80/api/v2/mobile/get_user_list/';
$headers = array(
    'QISCUS-SDK-TOKEN: b92b4921-5d23-485b-a707-20376276df19a110cb60d289680dfdcff58112f2cae3',
    'type:3',
        'd:3',
    
);

$context = stream_context_create(array(
    'http' => array(
        'method' => 'GET',
        'header' => implode("\r\n", $headers),
    ),
));

$response = file_get_contents($url, false, $context);
$file = 'filxxeee.json';
$data =json_encode(json_decode($response));
file_put_contents($file, $data);
echo $response;




?>
