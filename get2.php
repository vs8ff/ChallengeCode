<?php
if (isset($_POST['buttongrocery']))
$g=$_POST["grocery"];

$file ='http://www.SupermarketAPI.com/api.asmx/GetGroceries?APIKEY=486d908ef4&SearchText='.$g;
$xml = simplexml_load_file($file);

foreach($xml->string as $string)
{
print_r($string);
echo "\n", $xml->asXML(), "\n","\n";
}
?>