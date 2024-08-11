<?php
if(isset($_POST['btn-login'])){
    $msg = '';
    $flag = true;
    $secret_key = "@@darkday@@";

    $Username = $_POST['username'];
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
                header("Location:../Superuser.php");
            }
            else if($row["typeuser"] == "admin"){
                header("Location:../Admin.php");
            }
            else {
                header("Location:../User.php");
            }
		}
        else {
            $msg .= "نام کاربری یا گذرواژه صحیح نمی باشد!" . "<br />";
        }
    }
}