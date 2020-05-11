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
		<script src="xml_based.js"></script>
</head>
<body>
        <?php
            $dbh = include('./conn.php');
            $sql = "SELECT * from teacher";
            $result = $dbh->query($sql);
            $leng = $result->rowCount();
            echo "<select size={$leng} id='tch'>";
            foreach ($result as $row) {
                $tchr_name = $row['name'];
                $tchr_id = $row['ID_Teacher'];
                echo "<option value={$tchr_id}>{$tchr_name}</option>";
            }
            echo '</select>';
        ?>
			<br>
		<div id="result"></div> 
        <br>
        <input type="submit" id="submit" value="Search">
</body>
</html>