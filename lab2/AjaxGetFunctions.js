function InitAjax() {
  return new XMLHttpRequest();
}

function getHtmlDataByGroup(){
  ajax = InitAjax();
  var group_val = document.getElementById("get_group").value;
  var params = 'group=' + encodeURIComponent(group_val);

  ajax.open("GET","by_group.php?"+ params, true);
  ajax.onreadystatechange = function() {
      if(ajax.status === 200){
        console.log(ajax.responseText);
        document.getElementById('results-by-group').innerHTML=ajax.responseText;
        document.getElementById("older-results-by-group").innerHTML = '';
        localStorage.setItem(params, ajax.responseText);
        }
      }
  ajax.send();
}

function getByTeacherAndDisciple(){
  ajax = InitAjax();
  var teacher_val = document.getElementById("get_teacher").value;
  var disciple_val = document.getElementById("get_teacher_disciple").value;
  var params = 'teacher=' + encodeURIComponent(teacher_val)+"&disciple="+encodeURIComponent(disciple_val);
  ajax.open("GET","by_teacher_and_disciple.php?"+ params, true);
  ajax.onreadystatechange = function() {
      if(ajax.status === 200){
        console.log(ajax.responseText);
        document.getElementById('results-by-teacher').innerHTML=ajax.responseText;
        document.getElementById("older-results-by-teacher").innerHTML = '';
        localStorage.setItem(params, ajax.responseText);
        }
      }
  ajax.send();
}

function getByAuditorium(){
  ajax = InitAjax();
  var auditorium_val = document.getElementById("get_auditorium").value;
  var params = 'auditorium=' + encodeURIComponent(auditorium_val);
  ajax.open("GET","by_auditorium.php?"+ params, true);
  ajax.onreadystatechange = function() {
      if(ajax.status === 200){
        console.log(ajax.responseText);
        document.getElementById('results-by-auditorium').innerHTML=ajax.responseText;
        document.getElementById("older-results-by-auditorium").innerHTML = '';
        localStorage.setItem(params, ajax.responseText);
        }
      }
  ajax.send();
}
