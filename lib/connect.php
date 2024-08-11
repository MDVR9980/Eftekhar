<?php
$conn = mysqli_connect("localhost", "root", "", "eftekhartoos");
function runquery($conn, $query)
{
	$result = mysqli_query($conn, $query);
	return $result;
}
function findquery($conn, $query)
{
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) == 0) {
		return true;
	} else {
		return false;
	}
}