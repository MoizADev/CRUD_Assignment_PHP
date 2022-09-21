
function CheckPswd(){
    let pass1 = document.getElementById('password');
    let pass2 = document.getElementById('cpassword');
    let errorMsg = document.getElementById('pswdError');

    console.log(pass1.value+"    "+pass2.value);
    if(pass1.value != pass2.value){
        console.log('opacity = 1');
        errorMsg.style.opacity = '1';
    }
}
