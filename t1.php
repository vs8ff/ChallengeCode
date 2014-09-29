<?php

    session_start(); 
    $input = "";
    if(isset($_POST['t1'])){
        $_SESSION['t1'] = $_POST['t1'];
    }

?>


<form action="t1.php" method="post" align="center">
    <textarea name="t1" id="t1" rows="20" cols="50"></textarea><br />
    <input type="submit" value="submit" />
</form>
<br /><br />
<p align="center"><a href="t2.php">Click to View List</a></p>