<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_POST['Update']))
	{
		$librarianID = $_GET['GetLibrarian'];
		$name = $_POST['name'];
		$phoneNum = $_POST['phoneNum'];
		$Email = $_POST['Email'];
		
		$query = "UPDATE librarian 
					SET `name`='$name', 
					phoneNum ='$phoneNum',
					Email ='$Email'
					WHERE librarianID =$librarianID";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:LibrarianList.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:LibrarianList.php");
	}
	
?>