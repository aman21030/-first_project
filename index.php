<?php
	require_once dirname(__FILE__) . '/includes/require.php';
	$conn = new DbConn();

	//セミナーINSERT
	if(isset($_POST['newseminar'])){
		$title = $_POST['title'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$place =$_POST['place'];
		$organizer = $_POST['organizer'];
		$price = $_POST['price'];
		$overview = $_POST['overview'];
		$details = $_POST['details'];
		$timetable = $_POST['timetable'];
		$other = $_POST['other'];

		$sql  = ' INSERT INTO seminars ';
		$sql .= ' VALUES ("", "'.$title.'", "'.$date.'", "'.$time.'", "'.$place.'", "'.$organizer.'", "'.$price.'", "'.$overview.'", "'.$details.'", "'.$timetable.'", "'.$other.'", CURRENT_TIMESTAMP) ';
		$conn->fetch($sql);
	}

	// セミナーSELECT
		$sql  = ' SELECT * FROM seminars ';
		$sql .= ' ORDER BY created_at DESC ';
		$sql .= ' LIMIT 5 ';	
		$seminars = $conn->fetch($sql);

	//検索
		if($_GET){
			if(!empty($_GET['search_date'])){
				$search_date = htmlspecialchars($_GET['search_date']);
				$sql .= ' AND date = '.$search_date;
			}
			if(!empty($_GET['search_word'])){
				$search_word = htmlspecialchars($_GET['search_word']);
				$sql .= ' AND (title LIKE "%'.$search_word.'%" OR place LIKE "%'.$search_word.'%" OR organizer LIKE "%'.$search_word.'%" OR overview LIKE "%'.$search_word.'%" )';
			}
		}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" href="./assets/css/app.css">
  <title>imitationcom</title>
</head>
<body>
	<?php
		require_once dirname(__FILE__) . '/includes/header.php';
	?>
<div class="main">
	<div class="main-img">
		<img src="./assets/img/study.jpg" alt="勉強会風景写真">
	</div><!--メイン画像end-->
	<div class="container">
		<div class="row">
			<form method="get" action="./index.php">
				<div class="col-xs-2">
					<select name="search_date" id="" class="form-control input-lg">
						<option value="">日付</option>
						<?php
							foreach($seminars as $seminar){
								echo '<option value="'.$seminar['date'].'"';
								if($search_date == $seminar['date']){
									echo 'selected';
								}
								echo '>';
								echo $seminar['date'];
								echo '</option>';
							}
						?>
					</select>
				</div>
				<div class="col-xs-5">
					<input type="text" name="search_word" placeholder="キーワードで検索" class="form-control input-lg">
				</div>
				<div class="col-xs-2">
					<button type="submit" class="btn btn-success btn-lg">検索</button>
				</div>
			</form>
			<div class="col-xs-3">
				<a href="./newseminar/index.php" class="btn btn-danger btn-lg">イベントを作成する</a>
			</div>
		</div><!--検索フォームとイベント作成へボタンend-->
	</div>
	<div class="container">
		<?php
			foreach($seminars as $seminar){
				echo ' <div class="row"> ';
				echo '   <div class="content col-xs-12"> ';			
				echo '     <div class="content-title"> ';
				echo '	     <a href="./seminar/index.php"><h2>'.$seminar['title'].'</h2></a> ';
				echo '       <p>公開日：'.$seminar['created_at'].'</p> ';
				echo '     </div> ';
				echo '     <div class="overview"> ';
				echo '       <p>日時：'.$seminar['date'].'</p> ';
				echo '       <p>会場：'.$seminar['place'].'</p> ';
				echo '       <p>会費：'.$seminar['price'].'円</p> ';
				echo '       <p>'.$seminar['overview'].'</p> ';
				echo '     </div> ';
				echo '     <div class="content-footer"> ';
				echo '       <p>主催者：'.$seminar['organizer'].'</p> ';
				echo '       <p>参加人数：5/10人</p> ';//また後でやる・・・
				echo '     </div> ';
				echo '	 </div> ';
				echo ' </div> ';//１つの勉強会のくくりend
			}
		?>
	</div>
	<button type="button" class="btn btn-default btn-lg more">↓↓さらに表示する↓↓</button>
</div>
	<?php
		require_once dirname(__FILE__) . '/includes/footer.php';
	?>



	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="./assets/js/app.js"></script>
</body>
</html>