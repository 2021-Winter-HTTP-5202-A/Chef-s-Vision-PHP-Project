<?php
 include 'header.php';
?>
<div class="max_page">
 <h1>Login Page</h1>
      <form id="frm-userpass" name="myform" action="#" method="Get">
         
          <fieldset id="fieldset-login">
            <legend>Login User</legend>
             <div class="other">
                <label for="user">Email:</label>
                <input type="text" id="user" name="in-email">  
              </div> 
              <div><p class="error"><span id=erUser class="errmessage"></span> <p> </div>
             <div class="other">
                <label for="password">password:</label>
                <input type="password" id="password" name="in-pass">
             </div> 
             <div><p class="error"><span id=erPass class="errmessage"></span> <p></div>
             
           </fieldset>
           <div>
                 <input class="btn-submit" type="submit"  name="logIn"  id="btn_logIn"   value="Log In">   
                 <a href="signUp-page.php" class="btn-submit" id="btn_sign">Sign up</a>
             </div>     
        </form>
        <div class="div-message">
            <p id="p-log"> </p> 
            
       </div>
</div>
<?php
include 'footer.php';
?>
      