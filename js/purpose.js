const fullname = document.getElementById('fullname');
const erroMsg = document.getElementById('error');

const validateFullname = (e) =>{

    const fullnamereg = /^[a-zA-Z0-9_ ]*$/;
    const testNameReg = fullnamereg.test(fullname.value);

    if(!fullname.value){
        erroMsg.style.color="red";
        erroMsg.innerText = "Field cannot be empty";
        e.preventDefault();
    }
    else if(!testNameReg){
        erroMsg.style.color="red";
        erroMsg.innerText = "wrong input";
        e.preventDefault();
    }
    else{
        erroMsg.style.color="";
        erroMsg.innerText = "";
    }
}

const purpose = document.getElementById('purpose');
const perroMsg = document.getElementById('perror');

const validatePurpose = (e) =>{

    const purposereg = /^[a-zA-Z0-9_ ]*$/;

    const testNameReg = purposereg.test(purpose.value);

    if(!purpose.value){
        perroMsg.style.color="red";
        perroMsg.innerText = "Field cannot be empty";
        e.preventDefault();
    }
    else if(!testNameReg){
        perroMsg.style.color="red";
        perroMsg.innerText = "wrong input";
        e.preventDefault();
    }
    else{
        perroMsg.style.color="";
        perroMsg.innerText = "";
    }
}

const age = document.getElementById('age');
const aerroMsg = document.getElementById('aerror');


const validateAge = (e) =>{

    const agereg = /^[0-9]*$/;
    const testNameReg = agereg.test(age.value);

    if(!age.value){
        aerroMsg.style.color="red";
        aerroMsg.innerText = "Field cannot be empty";
        e.preventDefault();
    }
    else if(!testNameReg){
        aerroMsg.style.color="red";
        aerroMsg.innerText = "wrong input";
        e.preventDefault();
    }
    else{
        aerroMsg.style.color="";
        aerroMsg.innerText = "";
    }
}
const number = document.getElementById('number');
const nerroMsg = document.getElementById('nerror');


const validateNumber = (e) =>{

    const numberreg = /^[0-9]*$/;
    const testNameReg = numberreg.test(number.value);

    if(!number.value){
        nerroMsg.style.color="red";
        nerroMsg.innerText = "Field cannot be empty";
        e.preventDefault();
    }
    else if(!testNameReg){
        nerroMsg.style.color="red";
        nerroMsg.innerText = "wrong input";
        e.preventDefault();
    }
    else{
        nerroMsg.style.color="";
        nerroMsg.innerText = "";
    }
}

const duration = document.getElementById('duration');
const derroMsg = document.getElementById('derror');


const validateDuration = (e) =>{

    const durationreg = /^[0-9]*$/;;

    const testNameReg = durationreg.test(duration.value);

    if(!duration.value){
        derroMsg.style.color="red";
        derroMsg.innerText = "Field cannot be empty";
        e.preventDefault();
    }
     else if(!testNameReg){
       derroMsg.style.color="red";
       derroMsg.innerText = "wrong input";
       e.preventDefault();
     }
    else{
        derroMsg.style.color="";
        derroMsg.innerText = "";
    }
}

const email = document.getElementById('email');
const merroMsg = document.getElementById('merror');


const validateEmail = (e) =>{

    const emailreg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const testNameReg = emailreg.test(email.value);

    if(!number.value){
        merroMsg.style.color="red";
        merroMsg.innerText = "Field cannot be empty";
        e.preventDefault();
    }
    else if(!testNameReg){
        merroMsg.style.color="red";
        merroMsg.innerText = "wrong input";
        e.preventDefault();
    }
    else{
        merroMsg.style.color="";
        merroMsg.innerText = "";
    }
}