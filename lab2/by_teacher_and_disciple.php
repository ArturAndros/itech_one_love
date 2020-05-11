<?php
// echo var_dump($_GET);
if(isset($_GET['teacher'], $_GET['disciple']))
{
      $teacher_opt = trim($_GET['teacher']);
      $disciple_opt = trim($_GET['disciple']);

      require 'connect.php'; // подключаем скрипт

      $result = $collection -> find(["teacher" => $teacher_opt,"type" => 'лк', "discipline" => $disciple_opt]);
      // echo var_dump($result);
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
