<?php 

	$cn = mysqli_connect("localhost","phpmyadmin","soni","lic"); 

	

	$name =  $_POST['name1'];
	$contact =  $_POST['contact1'];
	$topic =  $_POST['topic1'];
	$message =  $_POST['message1'];
	

	mysqli_query($cn,"insert into prospects (name,contact,type,message) values ('$name','$contact','$topic','$message')") or die(mysqli_error()); 



?>