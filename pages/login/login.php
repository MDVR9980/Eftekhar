<?php
include('../../lib/connect.php');
include('../../lib/boot.php');
include('../LoginHeader.php');
?>

<?php
echo "
	<div class='limiter'>
		<div class='container-login100' style='background-image: url('images/bg-01.jpg');'>
			<div class='wrap-login100 p-t-30 p-b-50'>
				<span class='login100-form-title p-b-41'>
					Account Login
				</span>
				<form class='login100-form validate-form p-b-33 p-t-5' method='post'>
					<div class='wrap-input100 validate-input' data-validate = 'Enter username'>
						<input class='input100' type='text' name='username' placeholder='User name'>
						<span class='focus-input100' data-placeholder='&#xe82a;'></span>
					</div>
					<div class='wrap-input100 validate-input' data-validate='Enter password'>
						<input class='input100' type='password' name='pass' placeholder='Password'>
						<span class='focus-input100' data-placeholder='&#xe80f;'></span>
					</div>
					<div class='container-login100-form-btn m-t-32'>
						<input type='submit' class='login100-form-btn' name='btn-login' value='Login' />
					</div>
				</form>
			</div>
		</div>
	</div>
	";
?>

<?php
include("../LoginFooter.php");
?>