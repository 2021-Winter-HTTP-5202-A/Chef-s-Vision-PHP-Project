<?php
include 'header.php'
?>


<!--<script src="javas/addRec.js"></script>-->
<div class="page_container">
    <div class="container">
    <form  class="form-control" name="recpForm" action="#" method="post">
    <fieldset>
        <legend>New Reciepie</legend>
        <div class="form-group">
            <label  for="newFood">Food name:</label>
            <input class="in-recepie form-control" type="text" id="newFood" name="in-food">
            <div class="all-div other"><p class="error"><span id="errfood" class="errmessage"></span> <p></div>

        </div>
        <div class="form-group">
            <label for="img">Select image:</label>
            <input class="in-recepie form-control" type="file" id="img" name="img" accept="image/*">
            <div class="all-div other"><p class="error"><span id="errimg" class="errmessage"></span> <p></div>
        </div>
        <div class="form-group">
            <label for="catagori">food category:</label>
            <input class="in-recepie form-control" type="text" id="catagori" name="in-categori">
            <div class="all-div other"><p class="error"><span id="errcte" class="errmessage"></span> <p></div>
        </div>
        <div class="col-md-2">
            <label for="date">Date:</label>
            <input class="in-recepie form-control" type="text" id="date" name="in-date">
            <div class="all-div other"><p class="error"><span id="errdate" class="errmessage"></span> <p></div>
        </div>
        <div class="col-md-2">
            <label for="prep" class="form-label">Food prepare:</label>
            <input class="form-control" type="text" id="prep" name="in-prep">
            <div class="all-div other"><p class="error"><span id="errprep" class="errmessage"></span> <p></div>
        </div>
        <div class="col-md-2">
            <label for="ckTime" class="form-label">Cook Time:</label>
            <input class="form-control" type="text" id="ckTime" name="in-coock">
            <div class="all-div other"><p class="error"><span id="errckTime" class="errmessage"></span> <p></div>
        </div>
        <div class="form-group">
            <label for="recpText">Input receiepie:</label>
            <textarea class="form-control in-recepie" type="textarea" rows="10" cols="5" id="recpText" name="in-reciepie"></textarea>
            <div class="all-div other"><p class="error"><span id="errText" class="errmessage"></span> <p></div>
        </div>
        <div id="new" class="col-md-4">
            <label for="ingrid">Ingridients:</label>
            <input class="in-recepie form-control" type="text" id="ingrid" name="in-ingrid">
            <div class="all-div other"><p class="error"><span id="erringrid" class="errmessage"></span> <p></div>
        </div>
        <div class="all-div" >

            <a class="btn btn-success btn-sm" id="btn-ingrid" href="#">click to add ingridients</a>
        </div>


        <div class="all-div" >

            <input  type="submit"  name="submit"  class="btn btn-success btn-sm" value="submit">
        </div>
    </fieldset>
</form>
    </div>
</div>
<div class="div-message">
    <p id="p-sign"> </p>

</div>
<?php
include 'footer.php'
?>
