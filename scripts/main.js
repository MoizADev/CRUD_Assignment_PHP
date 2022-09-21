// Initial State
let FormSubmit = document.getElementById('FormSubmit');
FormSubmit.disabled = true;


function CheckPswd(){

    let pass1 = document.getElementById('password');
    let pass2 = document.getElementById('cpassword');
    let errorMsg = document.getElementById('pswdError');

    console.log(pass1.value+"    "+pass2.value);

    if (pass2.value=='' || pass1.value==''){
        FormSubmit.disabled = true;
    }
    else
    if(pass1.value !== pass2.value){
        pass1.style.border = '2px solid red';
        pass2.style.border = '2px solid red';
        errorMsg.style.opacity='1';
        FormSubmit.disabled = true;
    }
    else
    {
        pass1.style.border = '2px solid lightgray';
        pass2.style.border = '1px solid lightgray';
        errorMsg.style.opacity='0';
        FormSubmit.disabled = false;
    }
}
