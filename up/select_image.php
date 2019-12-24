<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=yamakawa;host:localhost;","root","mysql");
//下記はテーブル(img_upload)の中からカラム(image)をselectする。
$result = $pdo ->query("select image from img_upload;");


foreach($result as $row){
	$upload_img = $row['image'];
}
//以下は「画像フォルダimage」とselectしてきた「アップロードした画像のファイル名」を繋げて（文字列として）
//$image_pathに格納している。
$image_path ="./image/".$upload_img;
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>画像アップロード</title>
	</head>
	<body>
		<img src="<?php echo $image_path; ?>">
	</body>
	
</html>