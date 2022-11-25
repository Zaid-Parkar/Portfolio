<?php
    
    $Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Subject = $_POST['Subject'];
	$Message = $_POST['Message'];
	
	// Database connection
	$conn = mysqli_connect('localhost','root','','test');
	$name= "INSERT into test(`Name`,`Email`,`Subject`,`Message`) values('$Name','$Email','$Subject','$Message')";
    $execute = mysqli_query($conn,$name);
    
	if($execute){
        
		header("Location:index.html");
		
    }
	



?>
