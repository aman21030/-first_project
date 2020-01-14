<?php
	require_once dirname(__FILE__) . '/includes/require.php';
	$conn = new DbConn();

	//セミナーINSERT
	if(isset($_POST['newseminar'])){
		$title = htmlspecialchars($_POST['title']);
		$date = htmlspecialchars($_POST['date']);
		$time = htmlspecialchars($_POST['time']);
		$place = htmlspecialchars($_POST['place']);
		$organizer = htmlspecialchars($_POST['organizer']);
		$price = htmlspecialchars($_POST['price']);
		$overview = htmlspecialchars($_POST['overview']);
		$details = htmlspecialchars($_POST['details']);
		$timetable = htmlspecialchars($_POST['timetable']);
		$other = htmlspecialchars($_POST['other']);

		$sql  = ' INSERT INTO seminars ';
		$sql .= ' VALUES ("", "'.$title.'", "'.$date.'", "'.$time.'", "'.$place.'", "'.$organizer.'", "'.$price.'", "'.$overview.'", "'.$details.'", "'.$timetable.'", "'.$other.'", CURRENT_TIMESTAMP, "0") ';
		$conn->fetch($sql);
	}

	// セミナーSELECT
		$sql  = ' SELECT * FROM seminars ';
		$sql .= ' WHERE delete_flag = 0 ';
		$max_data = count($conn->fetch($sql));

	//検索
		if($_GET){
			if(!empty($_GET['search_word'])){
				$search_word = htmlspecialchars($_GET['search_word']);
				$sql .= ' AND (title LIKE "%'.$search_word.'%" OR place LIKE "%'.$search_word.'%" OR organizer LIKE "%'.$search_word.'%" OR overview LIKE "%'.$search_word.'%" )';
			}
		}

	//ページネーション
	//1ページあたりの表示数
		$limit = 5;
	
	//全ページ数
		$max_page = ceil($max_data/$limit);
	//現在のページ
		if($_GET['page']){
			$current_page = $_GET['page'];
		}else{
			$current_page = 1;
		}
		$next_page = $current_page+1;
		$prev_page = $current_page-1;
	//データ取得の開始位置
		$start_no = ($current_page-1)*$limit;
	

		$sql .= ' ORDER BY created_at DESC ';
		$sql .= ' LIMIT '.$limit.' OFFSET '.$start_no ;	
		$seminars = $conn->fetch($sql);
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
				<div class="col-xs-7">
					<input type="text" name="search_word" placeholder="キーワードで検索" class="form-control input-lg" <?php if($_GET) echo 'value="'.$search_word.'"'; ?>>
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
				echo '	     <a href="./seminar/index.php?id='.$seminar['id'].'"><h2>'.$seminar['title'].'</h2></a> ';
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
	<nav class="text-center">
	<ul class="pagination">
		<li>
		<?php
			if($prev_page <= 0){
				echo '<a href="#" aria-label="前のページへ" disabled>';
			}else{
				echo '<a href="?page='.$prev_page.'" aria-label="前のページへ">';
			}
		?>
				<span aria-hidden="true">«</span>
			</a>
		</li>
		<?php
			for($page=1; $page<=$max_page; $page++){
				if($page == $current_page){
					echo '<li class="active"><a href="">'.$page.'</a></li>';
				}else{
					echo '<li><a href="?page='.$page.'">'.$page.'</a></li>';
				}
			}
		?>
		<li>
			<?php
				if($next_page > $max_page){
					echo '<a href="#" aria-label="次のページへ" disabled>';
				}else{
					echo '<a href="?page='.$next_page.'&'.$query.'" aria-label="次のページへ">';
				}
			?>
				<span aria-hidden="true">»</span>
			</a>
		</li>
	</ul>
</nav>
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