<?php
    session_start(); 
    $input = ""; 
    if(isset($_SESSION['t1']))
        $input= $_SESSION['t1']
    
?>
<h3 align="center">Your list </h3>
<p align="center"><textarea rows="20" cols="50"><?php echo $input;?></textarea></p>