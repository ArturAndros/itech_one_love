<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_teacher_lessons.php" method="post">
        <?php
            $dbh = include('./conn.php');
            $sql = "SELECT * from teacher";
            $result = $dbh->query($sql);
            $leng = $result->rowCount();
            echo "<select size={$leng} name='tch'>";
            foreach ($result as $row) {
                $tchr_name = $row['name'];
                $tchr_id = $row['ID_Teacher'];
                echo "<option value={$tchr_id}>{$tchr_name}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Search">
    </form>
</body>
</html>