<?php
		$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	} 
	
	if(isset($_POST['Confirm']))
	{
		$ISBN = $_POST['GetISBN'];
		$Book_title = $_POST['Book_title'];
		$Book_author = $_POST['Book_author'];
		$publication_date = $_POST['publication_date'];
		$totalPages = $_POST['totalPages'];
		
		$query = "INSERT INTO calculatefine (id, borrower_name, days, fine, total)
					VALUES ('$ISBN', '$Book_title', '$Book_author', '$publication_date', '$totalPages')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:../../view/manageFineModule/viewfine.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:../../view/manageFineModule/calculateFine.php");
		}
	}
	
	else
	{
		header("location:../../view/manageModule/calculateFine.php");
	}
?>
