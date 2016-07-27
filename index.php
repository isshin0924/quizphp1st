<?php 
$title = '最初に選ぶことのできないポケモンはどれ？';

$question = array();//この変数は配列ですよという宣言
//配列の中身を書く
$question = array('ポッチャマ','ヒトカゲ','フシギバナ','イッシン');

// $answer = 'イッシン';
//↑では少しダサいので$question変数の一番最初の配列を正解というルールにしておく
$answer = $question[3];

//shuffle関数を使って配列の中身をシャフルしてみよう
shuffle($question);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>クイズ！</title>
</head>
<body>
	<h2><?php echo $title; ?></h2>

	
	<form method="post" action="answer.php">
		<!-- ↓これだといちいち選択肢を書かなきゃいけないので効率的じゃない -->
			<!-- <input type="radio" name="question" value="<?php echo $question[0]; ?>" > <?php echo $question[0]; ?><br> 
			<input type="radio" name="question" value="<?php echo $question[1]; ?>" > <?php echo $question[1]; ?><br> 
			<input type="radio" name="question" value="<?php echo $question[2]; ?>" > <?php echo $question[2]; ?><br> 
			<input type="radio" name="question" value="<?php echo $question[3]; ?>" > <?php echo $question[3]; ?><br>  -->
		<?php foreach ($question as $value) { ?>
			<input type="radio" name = "question" value = "<?php echo $value;?>" > <?php echo $value; ?>
			<?php } ?>
		
		<input type="hidden" name="answer" value="<?php echo $answer?>">
		<input type="submit" value = "回答する">

	</form>
	


</body>
</html>