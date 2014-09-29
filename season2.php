<?php
    session_start(); 
    $inputseason = ""; 
    if(isset($_SESSION['season']))
        $input= $_SESSION['season']
    
?>
<select name="food">
<option value="rice">RICE</option>
<option value="pizza">PIZZA</option>
</select>