<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script
		src="https://code.jquery.com/jquery-1.12.3.min.js"
		integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
		crossorigin="anonymous"></script>
		<script src="text_based.js"></script>
</head>
<body>
			<?php
				$dbh = include('./conn.php');
				$sql = "SELECT * from groups";
				$result = $dbh->query($sql);
				$leng = $result->rowCount();
				echo "<select size={$leng} id='gr'>";
				foreach ($result as $row) {
					$gr_title = $row['title'];
					$gr_id = $row['ID_Groups'];
					echo "<option value={$gr_id}>{$gr_title}</option>";
				}
				echo '</select>';
			?>
			<br>
		<div id="result"></div> 
        <br>
        <input type="submit" id="submit" value="Search">
</body>
</html>