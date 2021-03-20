


function pageReady(){

    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let message = document.getElementById("message");
    let form = document.forms.form;


    function formProcess(){


        if(name.value === "" || name.value === null){
            name.style.background ="red";
        }
        if(email.value === "" || email.value === null){
            email.style.background ="red";
        }
        if(message.value === "" || message.value === null){
            message.style.background ="red";
        }
        console.log("he");
        let count = 1;
        function setColor(btn, color) {
            let property = document.getElementById(btn);
            if (count == 0) {
                property.style.backgroundColor = "#FFFFFF"
                count = 1;
            }
        }
        return false;

    }
    form.onsubmit = formProcess;
}
window.onload = pageReady;