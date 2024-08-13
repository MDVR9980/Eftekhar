<?php
if(isset($_POST['btn-login'])){
    session_start();
    $msg = '';
    $flag = true;
    $secret_key = "@@darkday@@";

    $_SESSION['Username'] = $Username = $_POST['username'];
    $Password = $_POST['pass'];
    $Pass = md5($Password . $secret_key);

    if(strlen($Username) < 6){
        $flag = false;
        $msg .= "طول گذرواژه کوتاه می‌باشد!" . "<br />";
    }
    if(strlen($Password) < 6){
        $flag = false;
        $msg .= "طول گذرواژه کوتاه می‌باشد!" . "<br />";
    }
    if($flag){
        $query = "SELECT * FROM `users` WHERE `username` = '" . $Username . "' and `password` = '" . $Pass . "'";
        $result = runquery($conn, $query);
		$row = mysqli_fetch_assoc($result);
        if ($row) {
			if($row['typeuser'] == "superuser"){
                header("Location:../report/report.php?Username=" . urlencode($Username));
            }
            else if($row["typeuser"] == "admin"){
                header("Location:../report/report.php?Username=" . urlencode($Username));
            }
            else {
                header("Location:../report/report.php?Username=" . urlencode($Username));
            }
		}
        else {
            $msg .= "نام کاربری یا گذرواژه صحیح نمی باشد!" . "<br />";
        }
    }
}