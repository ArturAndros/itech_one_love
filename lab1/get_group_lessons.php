<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="post_group_lessons.php" method="post">
			<?php
				$dbh = include('./conn.php');
				$sql = "SELECT * from groups";
				$result = $dbh->query($sql);
				$leng = $result->rowCount();
				echo "<select size={$leng} name='gr'>";
				foreach ($result as $row) {
					$gr_title = $row['title'];
					$gr_id = $row['ID_Groups'];
					echo "<option value={$gr_id}>{$gr_title}</option>";
				}
				echo '</select>';
			?>
			<br>
			<input type="submit" value="Search">
		</form>
</body>
</html>