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
        $au_name = (int)$_POST['auditor'];
        $sql = "SELECT *
					FROM `lesson`
					WHERE `auditorium` = ?";
        $stmt = $dbh->prepare($sql);
		$stmt->execute(array($au_name));
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