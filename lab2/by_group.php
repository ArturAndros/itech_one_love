<?php
if(isset($_GET['group']))
{
      $group_opt = trim($_GET['group']);

      require 'connect.php'; // подключаем скрипт
      $result = $collection -> find(["group" => $group_opt]);
      foreach ($result as $row)
      {
        $result = "{$row['date']},  {$row['time']} lesson, {$row['auditorium']} auditorium,  {$row['discipline']},  {$row['type']}, Группы: [";

        if (!($row['group'] instanceof ArrayObject)){
          $result = $result . $row['group'];
        }
        else{
          foreach ($row['group'] as $gr) {
            $result = $result . $gr . ', ';
          }
        }
        $result = $result . '], teachers: [';
        if (!($row['teacher'] instanceof ArrayObject)){
          $result = $result . $row['teacher'];
        }
        else{
          foreach ($row['teacher'] as $te) {
            $result = $result . $te . ', ';
          }
        }
        $result = $result . ']';
        echo $result . '<br>';
      }

}
else
{
    echo "Введенные данные некорректны";
}
?>
