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
        $gr_id = (String)$_POST['gr'];
        $sql = "SELECT *
					FROM `lesson`
					LEFT JOIN `lesson_groups` ON `ID_Lesson` = `FID_Lesson2`
					WHERE FID_Groups = ?";
        $stmt = $dbh->prepare($sql);
		$stmt->execute(array($gr_id));
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