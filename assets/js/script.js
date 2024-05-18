function ajouter() {
  // recuperation du nom et de la description de la tache
  let tache = document.getElementById("tache").value;
  let description = document.getElementById("description").value;
  let div = document.getElementById("row");
  // Creation de la structure
  let div1 = document.createElement("div");
  div1.className = "col-3";

  let div2 = document.createElement("div");
  div2.className = "card";

  let div3 = document.createElement("div");
  div3.className = "card-body";

  let titre = document.createElement("h5");
  titre.className = "card-title";
  titre.innerHTML = tache;

  let paragraphe = document.createElement("p");
  paragraphe.className = "card-text";
  paragraphe.innerHTML = description;

  let btnSup = document.createElement("a");
  btnSup.className = "btn btn-danger";
  btnSup.innerHTML = "Supprimer";

  div.appendChild(div1);
  div1.appendChild(div2);
  div2.appendChild(div3);

  div3.appendChild(titre);
  div3.appendChild(paragraphe);
  div3.appendChild(btnSup);

  document.getElementById("tache").value = "";
  document.getElementById("description").value = "";
}
