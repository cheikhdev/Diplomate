// Controle de validité des inputs
$('.boutonSend').on('click', function(event, target){
    checkEmptyInputs();

});



function checkEmptyInputs(){

    $(".notempty").each(function (i, elt){
        if(elt.value == ""){
            toggleInputStatus("#" + elt.id);
            $(elt).one('focusin', function(){
                toggleInputStatus("#" + elt.id)
            })
        }
        else if(elt.id == "email"){
            checkMailFormat("#email");
            $(elt).one('focusin', function(){
                toggleInputStatus("#" + elt.id)
            })
        }

    })

}

//controle des forms

function checkMailFormat(selector){
    let pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    let saisie = $(selector)[0].value;
    ! saisie.match(pattern) ?
        toggleInputStatus(selector, "Votre adresse email n'est pas une adresse valide !")
        : null;
}

function toggleInputStatus(selector, message){
    $(selector).toggleClass("border-danger");
    $(selector).next().toggleClass("d-none");
    message ? $(selector).next()[0].textContent = message : null;
}
function toggleInputStatus2(selector, message){

    $(exampleCheck3).next().toggleClass("d-none");
    message ? $(exampleCheck3).next()[0].textContent = message : null;
}

function toggleInputStatus3(selector, message){

    $(uname1).next().toggleClass("d-none");
    message ? $(uname1).next()[0].textContent = message : null;


}


/////////////////////////:::

