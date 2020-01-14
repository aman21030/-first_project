<?php
	session_start();
	require_once dirname(__FILE__) . '/../includes/require.php';
	$conn = new DbConn();

		$sql  = ' SELECT * FROM seminars ';
		$sql .= ' WHERE id="'.$_GET['id'].'"' ;
		$seminars = $conn->fetch($sql);

		if(COUNT($seminars)>0){
			$seminar=$seminars[0];
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


	<link rel="stylesheet" href="../assets/css/app.css">
  <title>imitationcom</title>
</head>
<body>
	<?php
		require_once dirname(__FILE__) . '/../includes/header.php';
	?>
	<div class="main">
		<div class="container">
			<?php
					echo ' <div class="seminar-title"> ';
					echo '	 <h1>'.$seminar['title'].'</h1> ';
					echo ' </div> ';
					echo ' <div class="row"> ';
					echo '   <div class="col-xs-9"> ';
					echo '     <div class="seminar-detail"> ';
					echo '		   <p>日時：'.$seminar['date'].'　'.$seminar['time'].'</p> ';
					echo ' 		   <p>場所：'.$seminar['place'].'</p> ';
					echo '		   <p>主催者：'.$seminar['organizer'].'</p> ';
					echo '		   <p class="created-date">作成日：'.$seminar['created_at'].'</p> ';
					echo '     </div> ';
					echo '   </div> ';
					echo '   <div class="col-xs-3"> ';
					echo '	   <div class="join-btn"> ';
					echo '		   <p>お申し込みは<br>こちら</p> ';
					echo '		   <a href="./join.php?id='.$seminar['id'].'" class="btn btn-danger btn-lg">参加する</a> ';
					echo ' 	   </div> ';
					echo '   </div> ';
					echo ' </div> ';
					echo ' <div class="seminar-content"> ';
					echo '   <h3>イベント概要</h3> ';
					echo '   <p>'.$seminar['overview'].'</p> ';
					echo ' </div> ';
					echo ' <div class="seminar-content"> ';
					echo '   <h3>日時・会場・会費</h3> ';
					echo '   <p>'.$seminar['details'].'</p> ';
					echo ' </div> ';
					echo ' <div class="seminar-content"> ';
					echo '   <h3>タイムテーブル</h3> ';
					echo '   <p>'.$seminar['timetable'].'</p> ';
					echo ' </div> ';
					echo ' <div class="seminar-content"> ';
					echo '   <h3>その他</h3> ';
					echo '   <p>'.$seminar['other'].'</p> ';
					echo ' </div> ';
			?>
		</div>
	</div>
	<?php
		require_once dirname(__FILE__) . '/../includes/footer.php';
	?>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../assets/js/app.js"></script>
</body>
</html>