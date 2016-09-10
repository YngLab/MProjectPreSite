<?php
require('set_db.php');
$id = "NuLl";

echo '<pre>';
print_r($_POST);

$image = $_POST["image"];
echo "image: " .$image;
echo '<br>';
$data = $_POST["data"];
echo "data: " .$data;
echo '<br><br>';
$type = $_POST["type"];
echo "type: ".$type;
echo '<br><br>';

if(isset($data)){//imageにデータが入っていることを確認
  //データベースにデータを登録
  if(mysqli_query($link, "INSERT INTO `test` (`ID`, `date`, `imgData`) VALUES (NULL, CURRENT_TIMESTAMP, '$data')") == TRUE){
    //最新idを取得
    $id = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM `test` ORDER BY `ID` DESC"))['ID'];
    echo "id: $id";
  }else{
    echo "database error";
  }
}else{
  echo "file select error";
}

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

$contents_split = explode(',', $image);
$encoded = $contents_split[count($contents_split)-1];
$decoded = "";
$fileName= $id;

for ($i=0; $i < ceil(strlen($encoded)/256); $i++) {
  $decoded = $decoded . base64_decode(substr($encoded,$i*256,256));
}

//echo $decoded;
//chmod("upload/", 0777);
$fp = fopen("upload/".$type."/".$fileName.".gif", 'w');
fwrite($fp, $decoded);
fclose($fp);
