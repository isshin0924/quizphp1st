<?php 

$question = $_POST['question'];//ラジオボタンの内容を受け取る
$answer = $_POST['answer'];//hiddenで送られた正解を受け取る

//結果の判定
if ($question == $answer) {
	# code...
	$result = "正解！";
}
else{
	$result = "不正解";
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>result</title>
</head>
<body>
	<?php echo $result; ?>
</body>
</html>