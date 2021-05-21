// récuperation des ids des inputs
let nom_client= document.getElementById('nom_client');
let prenom_client= document.getElementById('prenom_client');
let adresse_client= document.getElementById('adresse_client');
let phone_client= document.getElementById('phone_client');
let email_client= document.getElementById('email_client');
let confirme_pass= document.getElementById('confirme_pass');
let password_client= document.getElementById('password_client');

// récuperation des id des divs info
let info_prenom= document.getElementById('info-prenom');
let info_nom= document.getElementById('info-nom');
let info_adresse= document.getElementById('info-adresse');
let info_phone= document.getElementById('info-phone');
let info_email= document.getElementById('info-email');
let info_confirme= document.getElementById('info-confirme_pass');
let info_password= document.getElementById('info-password');

// déclaration tableau des inputs et tableau des divs info

let inputs=[];
inputs[0] = prenom_client;inputs[1] = nom_client;inputs[2] = adresse_client;inputs[3] = phone_client;inputs[4] = email_client; inputs[5] = password_client; inputs[6] = confirme_pass;

let infos=[];
infos[0] = info_prenom;infos[1] = info_nom;infos[2] = info_adresse;infos[3] = info_phone;infos[4] = info_email;infos[5] = info_password;infos[6] = info_confirme;

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('focus',function(){
        for (let j = 0; j < i; j++) {
            if (inputs[j].value==="") {
                inputs[j].style.border="1px solid red";
            }
            else{
                inputs[j].style.border="1px solid green";
            }
        }
    });
    
}
let pointeur =0;
document.getElementById('inscription').addEventListener('submit',function(e){
    e.preventDefault();

    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value==="") {
            infos[i].classList.add("alert","alert-danger");
            infos[i].innerText="veuiller remplir ce champ";
            inputs[i].style.border="1px solid red";
            pointeur++;
        }
        
    }
    
    if (pointeur<=0) {
        if (password_client.value != confirme_pass.value ) {
            info_confirme.classList.add("alert","alert-danger");
            info_confirme.innerText="Les mots de passe ne sont pas identiques";
        }
        else{
            document.getElementById('inscription').submit();
        }
    }
});
