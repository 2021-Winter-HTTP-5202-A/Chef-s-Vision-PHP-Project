<?php
require_once 'header.php';
require_once '../Model/Database.php';
require_once '../Model/Recipe.php';

  
if((isset($_POST['addEvent'])))
{
  
$name = $con->real_escape_string($_POST['name']);
$description = $con->real_escape_string($_POST['description']);
$date = $con->real_escape_string($_POST['date']);
$time = $con->real_escape_string($_POST['time']);

  
$sql="INSERT INTO contactus (name, description, date, time) VALUES ('".$name."','".$description."', '".$date."', '".$time."')";

  
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Event added successfully";
}

?>

<h2>Add Event</h2>
  
  <form class="form" action="events.php" method="POST">
    
    <p class="name">
      <input type="text" name="name" id="name">
      <label for="name">Name</label>
    </p>
    
    <p class="description">
      <input type="text" name="description" id="description">
      <label for="description">Description</label>
    </p>
    
    <p class="date">
      <input type="text" name="date" id="date">
      <label for="date">Date</label>
    </p>    
  
    <p class="time">
      <input type="text" name="time" id="time">
      <label for="time">Time</label>
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="addEvent" value="Add" >
    </p>
  </form>
  
<?php
require_once 'footer.php';
?>
