<?php 
		$harsh_localhost = "Location:http://localhost/";
		$nitin_localhost = "Location:http://localhost:8080/";

		$art_id = $_POST['id'];
		$art_email = $_POST['email'];	
        $art_username = $_POST['username'];
        $art_number = $_POST['number'];


		$conn = mysqli_connect("localhost","root","","inspireart")or die("DB is not connect");
		$query = "update registration SET email = '{$art_email}',username = '{$art_username}',
					number = '{$art_number}' where id = '{$art_id}'";
		$result = mysqli_query($conn,$query) or die("Query Not Run");

		header($harsh_localhost."inspire-art/Admin-Panel/Artist_panel/index.php");

		mysqli_close($conn); 

 ?>