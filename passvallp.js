function chkpas(form){
    pass1=form.pass1.value;
        pass2=form.pass2.value;
    
    if(pass1!=pass2){
    alert("password did not match please try again...");
    return false;
    }
    else{alert("successfully registered thank you!..");
    return true;
    }
    }