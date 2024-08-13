<?php
if(isset($_POST['btn-login'])){
    session_start();
    $secret_key = "@@darkday@@";

    $_SESSION['Username'] = $Username = $_POST['username'];
    $Password = $_POST['pass'];
    $Pass = md5($Password . $secret_key);

        $query = "SELECT * FROM `users` WHERE `username` = '" . $Username . "' and `password` = '" . $Pass . "'";
        $result = runquery($conn, $query);
		$row = mysqli_fetch_assoc($result);
        if ($row) {
			if($row['typeuser'] == "superuser"){
                header("Location:../report/SuperuserReport.php?Username=" . urlencode($Username));
            }
            else if($row["typeuser"] == "admin"){
                header("Location:../report/AdminReport.php?Username=" . urlencode($Username));
            }
            else {
                header("Location:../report/UserReport.php?Username=" . urlencode($Username));
            }
		}
}