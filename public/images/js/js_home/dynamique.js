let quantite = document.getElementById('quantite');
let edit = document.getElementById('edit');
let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let phone = document.getElementById('phone');
let adresse = document.getElementById('adresse');
let form = document.getElementById('form');
let conteur =0;
/// Ecoute sur le champ quantite pour activer le bouton edit
quantite.addEventListener('change', function(){
    edit.disabled=false;
    
});

/// controle des champs
let input = [nom,prenom,email,phone,adresse]

/*for(let i=0;i<input.length(); i++){
    
}*/
nom.addEventListener('change', function(){
    conteur=conteur+1;
});
prenom.addEventListener('change', function(){
    conteur=conteur+1;
});
email.addEventListener('change', function(){
    conteur=conteur+1;
});
phone.addEventListener('change', function(){
    conteur=conteur+1;
});
adresse.addEventListener('change', function(){
    conteur=conteur+1;
});
form.addEventListener('submit', function(event){
    event.preventDefault();
    alert(conteur);
});
 
if(conteur==5){
    next.disabled=false;
}
else{

}