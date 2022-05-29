<?php
		$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_POST['Update']))
	{
		$ISBN = $_GET['GetISBN'];
		$Book_title = $_POST['Book_title'];
		$Book_author = $_POST['Book_author'];
		$publication_date = $_POST['publication_date'];
		$totalPages = $_POST['totalPages'];
		
		$query = "UPDATE calculatefine 
					SET id='".$ISBN."',
					borrower_name='".$Book_title."', 
					days='".$Book_author."',
					fine='".$publication_date."',
					total='".$totalPages."'
					WHERE id='".$ISBN."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully updated";
			header("location:viewfine.php");
		}
		else
		{
			die("Error updating data !  ".$conn->error);
		}
	}

	else
	{
		header("location:viewfine.php");
	}
?>