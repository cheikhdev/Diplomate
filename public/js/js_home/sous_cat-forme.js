//instanciation des variables de sous categorie

let add_sous = document.getElementById('add_sous');
let sous_cat = document.getElementById('sous_cat');
let name_category_sous = document.getElementsByClassName('name_category_sous');
let info_cat_sous = document.getElementById('info_cat_sous');
//let options= document.getElementsByTagName('option');
let texte
// formulaire add sous categorie

add_sous.addEventListener('submit',function(e){
    e.preventDefault(); 
    let texte=$("select#name_category_sous").children("option:selected").text();
        if (sous_cat.value==="" || texte=="") {
            info_cat_sous.classList.add("alert","alert-danger");
            info_cat_sous.innerText="veuiller remplir tous les champs";
        }
        else{
            add_sous.submit();
        }    
});