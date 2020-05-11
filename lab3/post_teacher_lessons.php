<?php
	header("Content-Type: text/xml");
	$doc = new DOMDocument('1.0', 'UTF-8');
	$lessons = $doc->createElement('lessons');

    $dbh = include('./conn.php');
    $tchr_id = (String)$_POST['tch'];
    $sql = "SELECT *
					FROM `lesson`
					LEFT JOIN `lesson_teacher` ON `ID_Lesson` = `FID_Lesson1`
					WHERE FID_Teacher = ?";
    $stmt = $dbh->prepare($sql);
	$stmt->execute(array($tchr_id));
    while ($row = $stmt->fetch()) {
		$entry = $doc->createElement('game');
        foreach($row as $filed => $value ) {
			if (gettype($filed) == 'string') {
				$entry->appendChild($doc->createElement($filed, $value));
               }
		}
		$lessons->appendChild($entry);
    }
	$doc->appendChild($lessons);
	echo $doc->saveXML();
?>