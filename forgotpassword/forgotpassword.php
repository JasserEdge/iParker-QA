<html>
<div>
    <?php 
    if (isset($_GET['msg'])){
        if ($_GET['msg'] == 1) {
            echo  "<font color='red'>Invalid email address</font>";
        }
    }
    ?>
<form id="login-form" method="post" action="forgotPasswordValidation.php">
<input name="email" type="email"  placeholder="Email" required>
<input type="submit"  value="Reset Password" name="forgot_password" id="submit">
</form>
</div>
</html>