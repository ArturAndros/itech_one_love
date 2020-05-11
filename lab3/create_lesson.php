<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_create_lesson.php" method="post">
	<?php
        $dbh = include('./conn.php');
		echo  'Weekday: ';
		echo '<select name="weekday">
					<option value="Monday">Monday</option>
					<option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="Thursday">Thursday</option>
					<option value="Friday">Friday</option>
					<option value="Saturday">Saturday</option>
					<option value="Sunday">Sunday</option>
				</select><br>';
				
		echo  'Lesson number: ';
		echo '<select name="lesson_number">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select><br>';
				
		echo  'Audithorium: ';
        echo '<input name="auditor"/><br>';
		
		echo  'Disciple: ';
		echo '<input name="disciple"/><br>';
		
		echo 'Teacher: ';
		echo '<select name="teacher_id">';
		$stmt = $dbh->prepare("SELECT * FROM teacher");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $teacher_name = $row['name'];
            $id = $row['ID_Teacher'];
            echo "<option value={$id}>{$teacher_name}</option>";
        }
		echo '</select><br>';
		
		echo 'Group: ';		
		$stmt = $dbh->prepare("SELECT * FROM groups");
        $stmt->execute();
		echo '<select name="group_id">';
        while ($row = $stmt->fetch()) {
            $group_name = $row['title'];
            $id = $row['ID_Groups'];
            echo "<option value={$id}>{$group_name}</option>";
        }		
		echo '</select><br>';
        ?>
        <br>
        <input type="submit" value="Create">
    </form>
</body>
</html>