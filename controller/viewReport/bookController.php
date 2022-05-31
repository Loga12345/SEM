<?php
include "DatabaseCon.php";

$sql = "SELECT ISBN, Book_title, Book_author, publication_date FROM book ORDER BY ISBN";

$result = mysqli_query($conn, $sql);

$ISBN = $_GET['GetBookReport'];
$sql = "SELECT ISBN, Book_title, Book_author, publication_date, book_desc, Book_rating, totalPages
				FROM book
				WHERE ISBN='".$ISBN."'";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result))
{
	$ISBN = $row['ISBN'];
	$Book_title = $row['Book_title'];
	$Book_author = $row['Book_author'];
	$publication_date = $row['publication_date'];
	$book_desc = $row['book_desc'];
	$Book_rating = $row['Book_rating'];
	$totalPages = $row['totalPages'];
}
?>

<?php
include "DatabaseCon.php";

$sql = "SELECT ISBN, Book_title, Book_author, publication_date FROM book ORDER BY ISBN";
$result = mysqli_query($conn,$sql);

?>
