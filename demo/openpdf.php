<?php

if( isset($_POST["pdf"]) )
{
	$tt= $_POST["pdf"];
$file = 'billresults.pdf';
$filename = 'billresults.pdf';
//$tem=tmpfile();
//file_put_contents($tem . $file, $tt);
//header('Content-type: application/pdf');
echo $tt;  //chunk_split(base64_encode(file_get_contents($tem . $file)));

//echo $tt;
}


?>