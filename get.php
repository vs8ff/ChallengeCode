<?php
if (isset($_POST['Search By Zip-code']))
$z=$_POST["ZipCode"];

$file ='http://www.supermarketapi.com/api.asmx/StoresByZip?APIKEY=486d908ef4&ZipCode='.$z;

$xml = simplexml_load_file($file);
$x=$xml->Store->count();
for($i=1; $i <= $x; $i++){
print_r($xml->Store[$i]->Address);
echo "\n", $xml->asXML(), "\n";
}

?>