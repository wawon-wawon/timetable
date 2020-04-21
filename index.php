<!--OPEN http://localhost/index.php-->
<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Timetable</h1>
		<p>入力してみよう！</p>

		<form class="" action="table.php" method="GET">

				<label for="jyugyou">授業</label>
				<input type="text"  name="jyugyou" value="">
				<select name="youbi">
				<option>曜日を選択</option>
				<option value="mon">(月)</option>
				<option value="tue">(火)</option>
				<option value="wen">(水)</option>
				<option value="thu">(木)</option>
				<option value="fri">(金)</option>
				<option value="sat">(土)</option>
				<option value="sun">(日)</option>
			</select>

			<select class="" name= "jikann">
				<option>時間を選択</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
			</select>




			<button type="submit" name="button">送信する</button>
			<p></p>

		</form>


	</body>
</html>
