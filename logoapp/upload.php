<?php
echo '<pre>';
$data = $_POST["data"];
echo $data;

/*
if($file_get_contents = file_get_contents($_POST["data"])){
  file_put_contents('/upload/test.jpg', $file_get_contents);
  echo "<br>uploaded";
  exit();
}else{
  echo "<br>upload error";
}
*/

//$file_get_contents = file_get_contents($data);
//echo $file_get_contents;

$contents_split = explode(',', $data);
$encoded = $contents_split[count($contents_split)-1];
$decoded = "";
for ($i=0; $i < ceil(strlen($encoded)/256); $i++) {
  $decoded = $decoded . base64_decode(substr($encoded,$i*256,256)); 
}

//echo $decoded;

$fp = fopen('upload/imagembaixada.gif', 'w');
fwrite($fp, $decoded);
fclose($fp);
