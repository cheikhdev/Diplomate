let add_categorie = document.getElementById('add_categorie');
let name_category = document.getElementById('name_category');
let info_cat = document.getElementById('info_cat');


// Formulaire categorie
add_categorie.addEventListener('submit',function(e){
    e.preventDefault();
        if (name_category.value==="") {
            name_category.style.border="1px solid red";
            info_cat.classList.add("alert","alert-danger");
            info_cat.innerText="veuiller remplir ce champ";
        }
        else
        {
            add_categorie.submit();
        }     
});

