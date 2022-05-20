<?php
include "DatabaseCon.php";

$sql = "SELECT RoomReservID, BorrowerName, RoomID, RoomName, reservDate
        FROM roomreservation";

$result = mysqli_query($conn, $sql);

$RoomReservID = $_GET['GetRoomReport'];
$sql = "SELECT RoomReservID, BorrowerName, RoomID, RoomName, reservDate
				FROM roomreservation
        WHERE RoomReservID='".$RoomReservID."'";

$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result))
{
	$RoomReservID = $row['RoomReservID'];
	$BorrowerName = $row['BorrowerName'];
	$RoomID = $row['RoomID'];
	$RoomName = $row['RoomName'];
	$reservDate = $row['reservDate'];
}
?>
