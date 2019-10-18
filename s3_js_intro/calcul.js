function calculer() {
  let ipu = document.getElementById("pu");
  let iqte = document.getElementById("qte");
  let div_resultat = document.getElementById("resultat");

  let prix = ipu.value;
  let qte = iqte.value;
  if (prix < 0 || qte < 0) {
    // alert("erreur , les nombres doivent etre > 0");
    div_resultat.innerHTML = "erreur , les nombres doivent etre > 0";
    div_resultat.style.color = "red";
  } else {
    let total = prix * qte;
    div_resultat.style.color = "blue";

    div_resultat.innerHTML = "le total est " + total + "DHS";
  }

  //   alert("le total est " + total + "DHS");
}
