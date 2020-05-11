	<?php
        $dbh = include('./conn.php');
        $gr_id = (String)$_POST['gr'];
        $sql = "SELECT *
					FROM `lesson`
					LEFT JOIN `lesson_groups` ON `ID_Lesson` = `FID_Lesson2`
					WHERE FID_Groups = ?";
        $stmt = $dbh->prepare($sql);
		$stmt->execute(array($gr_id));
		$returnValue = '';
        while ($row = $stmt->fetch()) {
            $returnValue .= '<br>';
                foreach($row as $filed => $value ) {
                    if (gettype($filed) == 'string') {
                        $returnValue .= "<span>$filed = $value</span><br>";
                    }
                }
            $returnValue .= '<br>';
        }
		if($value == ''){
			echo 'There are no match';
		}else{
			echo $returnValue;
		}
    ?>