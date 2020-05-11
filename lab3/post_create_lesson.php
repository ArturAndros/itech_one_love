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
        $id = rand();
        $weekday = (String)$_POST['weekday'];
        $lesson_number = (String)$_POST['lesson_number'];
        $auditor = (String)$_POST['auditor'];
        $disciple = (String)$_POST['disciple'];
        $teacher_id = (String)$_POST['teacher_id'];
        $group_id = (String)$_POST['group_id'];
        $sql = "INSERT INTO `iteh2lb1var2`.`lesson` (
						`ID_Lesson` ,
						`week_day` ,
						`lesson_number` ,
						`auditorium` ,
						`disciple` ,
						`type`
					)
					VALUES (
						?, ?, ?, ?, ? , 'Practical'
					);";
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array($id, $weekday, $lesson_number, $auditor, $disciple));
			
		$sql = "INSERT INTO `iteh2lb1var2`.`lesson_groups` (
						`FID_Lesson2` ,
						`FID_Groups`
					)
					VALUES (
						?, ?
					);";
		$stmt = $dbh->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		$stmt->bindParam(2, $group_id, PDO::PARAM_INT);
		$stmt->execute();

		$sql = "INSERT INTO `iteh2lb1var2`.`lesson_teacher` (
						`FID_Lesson1`,
						`FID_Teacher`
					)
					VALUES (
						:Lesson, :Teacher
					);";
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(':Lesson' => $id, ':Teacher' => $teacher_id));
    ?>
</body>
</html>