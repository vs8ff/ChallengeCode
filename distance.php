<?php
session_start();
    $inputdistance = "";
if(isset($_POST['distance'])) 
{
 $_SESSION['dis'] = $_POST['distance'];

}
?>
<h2 color="lightblue" align="center">Select Store</h2>
<div align="center">
<form action="distance1.php" method="POST">
<select name="distance" id="distance" align="center">
<option value="wallmart">wallmart</option>
<option value="Sunfresh">Sunfresh</option>
<option value="Target">Target</option></select>
<input type="submit" value="enter" id="Enter distance" name ="Enter distance">
</form>
</div>
