<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_auditorium_lessons.php" method="post">
        <?php
            $dbh = include('./conn.php');
            $sql = "SELECT DISTINCT (`auditorium`) FROM lesson";
            $result = $dbh->query($sql);
            $leng = $result->rowCount();
            echo "<select size={$leng} name='auditor'>";
            foreach ($result as $row) {
                $au_name = $row['auditorium'];
                echo "<option value={$au_name}>{$au_name}</option>";
            }
            echo '</select>';
        ?>
        <br>
        <input type="submit" value="Search">
    </form>
</body>
</html>