
<html>
  <head>
     <meta charset="utf-8">
    <title>Mongo</title>

  </head>
  <body>
        <h1>Mongo</h1>
        <p>By group:</p>
        <form method="get">
           <p><select size="1" name="group" id="get_group">
            <option disabled>Выберите группу</option>
            <?php
              require_once 'connect.php'; // подключаем скрипт
              $documentlist = $collection->distinct("group");
              foreach ($documentlist as $gr) {
                echo '<option value=" '.$gr.' "> '.$gr.' </option>';
              }
              ?>
           </select>
         </p>
         <p><input type="button" name="getByGroupButton" value="Узнать" onclick="getHtmlDataByGroup();"/></p>
        </form>
        <p><input type="button" name="getLocalStorageByGroupButton" value="Узнать старые" onclick="localStorageByGroup();"/></p>
        <div id="results-by-group">
        </div>
        <div id="older-results-by-group">
        </div>

        <p>By teacher and disciple:</p>
        <form method="get">
           <p><select size="1" name="teacher" id="get_teacher">
            <option disabled>Выберите учителя</option>
            <?php
              require_once 'connect.php'; // подключаем скрипт
              $documentlist = $collection->distinct("teacher");
              foreach ($documentlist as $aud) {
                echo '<option value=" '.$aud.' "> '.$aud.' </option>';
              }
              ?>
           </select>
         </p>
         <p><select size="1" name="teacher_disciple" id="get_teacher_disciple">
          <option disabled>Выберите предмет</option>
          <?php
            require_once 'connect.php'; // подключаем скрипт
            $documentlist = $collection->distinct("discipline");
            foreach ($documentlist as $dis) {
              echo '<option value=" '.$dis.' "> '.$dis.' </option>';
            }
            ?>
         </select>
       </p>
         <p><input type="button" name="getByTeacherButton" value="Узнать" onclick="getByTeacherAndDisciple();"/></p>
        </form>
        <p><input type="button" name="getLocalStorageByTeacherAndDiscipleButton" value="Узнать старые" onclick="localStorageByTeacherAndDisciple();"/></p>
        <div id="results-by-teacher">
        </div>
        <div id="older-results-by-teacher">
        </div>

        <p>By auditorium:</p>
        <form action="by_auditorium.php" method="post">
           <p><select size="1" name="auditorium" id="get_auditorium">
            <option disabled>Выберите аудиторию</option>
            <?php
              require_once 'connect.php'; // подключаем скрипт
              $documentlist = $collection->distinct("auditorium");
              foreach ($documentlist as $aud) {
                echo '<option value=" '.$aud.' "> '.$aud.' </option>';
              }
              ?>
           </select>
         </p>
         <p><input type="button" name="GetByAuditoriumButton" value="Узнать" onclick="getByAuditorium();"></p>
        </form>
        <p><input type="button" name="getLocalStorageByAuditoriumButton" value="Узнать старые" onclick="localStorageByAuditorium();"/></p>
        <div id="results-by-auditorium">
        </div>
        <div id="older-results-by-auditorium">
        </div>

      <script src="AjaxGetFunctions.js"></script>
      <script src="localStorage.js"></script>
    </body>
</html>
