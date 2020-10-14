function validar(){
    var nome = forms.nome.value;
    var email = forms.email.value;
    var telefone = forms.telefone.value;

    if(nome==""){
        alert("Preencha o campo nome.");
        forms.nome.focus();
        return false;
    }                         
    if(email=="" || email.indexOf('@')==-1 || email.indexOf('.')==-1 ){
        alert( "Preencha o campo E-MAIL corretamente!" );
        forms.email.focus();
        return false;
    }
    if(telefone==""){
        alert( "Preencha o campo telefone" );
        forms.telefone.focus();
        return false;
    }
    return true;
}
