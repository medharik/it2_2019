//pour l'obligation
var div_er = document.querySelector("form > div");

function valider() {
  var t = document.querySelectorAll("input.ob");
  var fa = document.querySelector("form>i");
  var erreur = false;
  for (var i = 0; i < t.length; i++) {
    if (t[i].value.trim() == "") {
      erreur = true;
    }
  }
  if (erreur == true) {
    div_er.innerHTML = "tous les champs sont requis";
    div_er.className = "alert alert-danger d-block";
    fa.className = "fas fa-exclamation-triangle fo";
    fa.style.color = "red";
  } else {
    div_er.innerHTML = "";
    div_er.className = "alert alert-danger d-none";
    fa.className = "fas fa-check-square fo";
    fa.style.color = "blue";
  }
}

function validerpass() {
  var p = document.querySelector("#passe");
  var c = document.querySelector("#conf");

  if (p.value.length < 3 || p.value.length > 10) {
    div_er.innerHTML = "un mot de passe doit avoir de 3 a 10 caracteres";
    div_er.className = "alert alert-danger d-block";
  } else if (c.value != p.value) {
    div_er.innerHTML = "les 2 mots de passe ne correspondent pas";
    div_er.className = "alert alert-danger d-block";
  }
}
