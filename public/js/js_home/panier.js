let quantite =[];

let edit = document.getElementById('edit');
let update = document.getElementById('updcart');
let cart_delete = document.getElementById('cart_delete');
let price = [];
let total = [];
let tr = [];
let sous_total = [];
let btn_delete = [];
let data_delete = [];
var somme=0;
let vider = document.getElementById('vider');
let valid_commande = document.getElementById('valid_commande');
let i=0;
let price_total = document.getElementById('price_total');
while (document.getElementById('quantite'+i)) {
    quantite[i]=document.getElementById('quantite'+i);
    tr[i]=document.getElementById('tr'+i);
    price[i]=document.getElementById('price'+i);
    total[i]=document.getElementById('total'+i);
    sous_total[i]=document.getElementById('sous_total'+i);
    btn_delete[i]=document.getElementById('btn_delete'+i)
    data_delete[i] = document.getElementById('delete'+i);
    i=i+1;
}

/// Ecoute sur le champ quantite pour activer le bouton edit

valid_commande.addEventListener('click', function(event){
  if(update.disabled==false) {e.preventDefault();
    event.preventDefault();
    document.getElementById('info_update').innerText="Veuiller mettre à jour le pannier d'abord";
    document.getElementById('info_update').classList.add("alert","alert-danger");
  }
  
  
})
$('form.up-to-cart').submit(function (e) {
    e.preventDefault();
    var form_data = $(this).serialize(); //alert(form_data);
    $.ajax({
      type: "POST",
      url: '/update',
      data: form_data,
      success: function success(data) {
        if (data.success) {
            update.disabled=true;
            update.classList.remove('update-enable');
            update.classList.add('update-disable');
            $('#total_cart').load(document.URL +  ' #total_cart');
          //$('#show_pannier').load(document.URL +  ' #show_pannier');
        } else {
          console.log("il y une erreur");
        }
      }
    });
  })
 
  for(let i=0;i<quantite.length;i++){
  
    quantite[i].addEventListener('change', function(event){
        
        sous_total[i].value = quantite[i].value * price[i].value;
        
        total[i].innerText=sous_total[i].value +' Fcfa';
        
        update.disabled=false;
        
        update.classList.remove('update-disable');
        update.classList.add('update-enable');
        
        for(let j=0;j<total.length;j++){
            somme = parseFloat(sous_total[j].value) + somme;
        }
       price_total.innerText=parseFloat(somme) + " Fcfa";
        somme=0;
    });
}
for (let i = 0; i < btn_delete.length; i++) {
  btn_delete[i].addEventListener('click',function (e) {
    e.preventDefault();
    $.ajax({
      type: "GET",
      url: '/delete_product/'+data_delete[i].value,
      success: function (code_html, statut) {
        $('#shopping').load(document.URL +  ' #shopping');
        $('#shopping-item').load(document.URL +  ' #shopping-item');
        tr[i].remove();
        tr.length--;
        if (tr.length<=0) {
          $('#show_pannier').load(document.URL +  ' #show_pannier');
        }
        $('#total_cart').load(document.URL +  ' #total_cart');
        alert("Produit enlever avec succès");
      } 
    });
  })  
}

 
