
function localStorageByGroup(){
  var group_val = document.getElementById("get_group").value;
  var params = 'group=' + encodeURIComponent(group_val);
  var olderResField = document.getElementById("older-results-by-group");
  olderResField.innerHTML = "<p>Older results by group:</p>";
  if(localStorage[params] !== undefined){
    olderResField.innerHTML += localStorage[params];
  }
  else{
    olderResField.innerHTML += "Oops...There are no saved info";
  }
}

function localStorageByTeacherAndDisciple(){
  var teacher_val = document.getElementById("get_teacher").value;
  var disciple_val = document.getElementById("get_teacher_disciple").value;
  var params = 'teacher=' + encodeURIComponent(teacher_val)+"&disciple="+encodeURIComponent(disciple_val);
  var olderResField = document.getElementById("older-results-by-teacher");
  olderResField.innerHTML = "<p>Older results by teacher and disciple:</p>";
  if(localStorage[params] !== undefined){
    if(localStorage[params])
      olderResField.innerHTML += localStorage[params];
    else
      olderResField.innerHTML += "Empty result";
  }
  else{
    olderResField.innerHTML += "Oops...There are no saved info";
  }
}

function localStorageByAuditorium(){
  var auditorium_val = document.getElementById("get_auditorium").value;
  var params = 'auditorium=' + encodeURIComponent(auditorium_val);
  var olderResField = document.getElementById("older-results-by-auditorium");
  olderResField.innerHTML = "<p>Older results by auditorium:</p>";
  if(localStorage[params] !== undefined){
    olderResField.innerHTML += localStorage[params];
  }
  else{
    olderResField.innerHTML += "Oops...There are no saved info";
  }
}
