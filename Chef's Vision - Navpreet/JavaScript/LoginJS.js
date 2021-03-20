window.onload= pageReady;
 function pageReady(){
  
     var formHandle=document.forms.myform;
     console.log(formHandle);
     var msgUser=document.getElementById("p-log");
     var msgShow=document.getElementById("div-message");
     var inputUser=document.getElementById("user");
     var inputPass=document.getElementById("password");
     var passErr=document.getElementById("erPass");
     var userErr=document.getElementById("erUser");
     formHandle.onsubmit=funcLog;
      function funcLog(){
       
          if (inputUser.value===""){
            inputUser.style.background="red";
            inputUser.focus();
            userErr.innerHTML="Please input Username";
          }
          if (inputPass.value===""){
           inputPass.style.background="red";
          inputPass.focus();
          passErr.innerHTML="Please input Password";
          }
          else{
            msgUser.innerHTML="Thank you"+ inputUser.value;
            msgShow.style.display="block";
           }
          return false;   
        }
}