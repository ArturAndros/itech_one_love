<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbh = include('./conn.php');
        $tchr_id = (String)$_POST['tch'];
        $sql = "SELECT *
					FROM `lesson`
					LEFT JOIN `lesson_teacher` ON `ID_Lesson` = `FID_Lesson1`
					WHERE FID_Teacher = ?";
        $stmt = $dbh->prepare($sql);
		$stmt->execute(array($tchr_id));
        while ($row = $stmt->fetch()) {
            echo '<br>';
                foreach($row as $filed => $value ) {
                    if (gettype($filed) == 'string') {
                        echo "<span>$filed = $value</span><br>";
                    }
                }
            echo '<br>';
        }
    ?>
</body>
</html>