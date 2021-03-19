<?php
 include 'header.php';
 
 ?>
 <div class=max_page>
   <h1>SignUp Page</h1>
  
      <form id="frm-userSignUp" name="frm-SignUp" action="#" method="post">
         
          <fieldset id="fieldset-signUp">
            <legend>Register:</legend>
             <div class="other">
                <label for="newName">name:</label>
                <input type="text" id="userNew" name="in-name">  
                <span class="errmessage"></span>  
             </div> 
             <div class="other">
                <label for="newLast">last name:</label>
                <input type="text" id="newLast" name="in-last">  
                <span class="errmessage"></span>  
             </div> 
             <div class="other">
                <label for="newMail">Email:</label>
                <input type="text" id="newMail" name="in-newMail">  
                <span class="errmessage"></span>  
             </div> 
             <div class="other">
                <label for="newPhone">Phone Number:</label>
                <input type="text" id="nePhone" name="in-phone">  
                <span class="errmessage"></span>  
             </div> 

             <div class="other">
                <label for="newPassword">password:</label>
                <input type="password" id="password" name="in-password">
                <span class="errmessage"></span> 
             </div> 
             <div class="other">
                <label for="conPassword">confirm password:</label>
                <input type="password" id="conPassword" name="in-password">
                <span class="errmessage"></span> 
             </div> 
              
           </fieldset>
           <div  id=btm_page>
                 <input class="btn-submit" type="submit"  name="signUp"  id="btn_signUp"   value="Sign up">
             </div>     
        </form>
        <div class="div-message">
            <p id="p-sign"> </p> 
            
       </div>
</div>
<?php
include 'footer.php';
?>