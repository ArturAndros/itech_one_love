<?php
	header("Content-Type: text/json");
	$rows = array();
	$dbh = include('./conn.php');
	$au_name = $_POST['auditor'];
    $sql = "SELECT *
				FROM `lesson`
				WHERE `auditorium` = ?";
	$stmt = $dbh->prepare($sql);
	$stmt->execute(array($au_name));
    while ($row = $stmt->fetch()) {
		$rows[] = $row;
	}
	echo json_encode($rows);
?>