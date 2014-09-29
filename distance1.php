<?php

    session_start(); 
	$a="Wallmart";
	$b="Sunfresh";
	$c="Target";
    $inputdistance = ""; 
    if(isset($_SESSION['dis'])){
    $inputdistance = $_SESSION['dis'];
	
	}
?>
    <div align="center"  style="margin-top: 150px;"><?php 
	    
	    echo "<h3>The items to the store are from about 50 miles radius</h3>";
		?></p>
		<p><?php
		if ($inputdistance == $b)
		{
	    echo "The items to the store are from about 100 miles radius";
		} ?></p>
		</div>
