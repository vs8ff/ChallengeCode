<?php
session_start();
    $inputseason = "";
if(isset($_POST['Enter Season']) && isset($_POST['season']) )
{
 $_SESSION['season'] = $_POST['season'];
}
?>
<select name="season">
<option value="summer">Summer</option>
<option value="Fall">Fall</option>
<option value="Spring">Spring</option>
</select>