<?php
include "DatabaseCon.php";

$id = $_GET['GetFineReport'];
$sql = "SELECT id, borrower_name, days, fine, total
        FROM calculatefine
        WHERE id = '".$id."'";

$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result))
{
	$id = $row['id'];
	$borrower_name = $row['borrower_name'];
	$days = $row['days'];
	$fine = $row['fine'];
	$total = $row['total'];
}
?>
