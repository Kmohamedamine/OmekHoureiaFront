<?php 

$input = $_GET['text'];

$conn = mysqli_connect("localhost", "root", "", "gestionclient");
$sql = "SELECT * FROM client where username_client = '".$input."' ";
$result = mysqli_query($conn, $sql);
$row_cnt = $result->num_rows;
if ($row_cnt==0)
	{
		echo json_encode("Unique");
	}
else
	{	
		echo json_encode("Not unique");
	}
?>