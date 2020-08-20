<?php 
	
	$tmpName = $_FILES['file']['tmp_name'];
	$name    = $_FILES['file']['name'];
	$format  = substr($name, -4);

	  
	move_uploaded_file($tmpName, "img/task/" . uniqid() . $format);
	
	