<?php
if(isset($_SESSION['status'])){
  ?>
  <div class="alert alert-success">
    <h5><? = $_SESSION['status']; ?></h5>
</div>
<?php
unset($_SESSION['status']);
}
?>
<html>
<div class ="card">
  <div class="card-header">
    <h5>Reset Password</h5>
</div>
<div class="card-body p-4">
  <form action ="password-reset-code.php" method="POST">
</div>
</div>
<div class="form-group mb-3">
<h5>Enter your email address to reset password</h5>
<input type="text" name="email" class= "form-control" placeholder="Enter email address" required>
</div> 
<div class ="form-group mb-3">
  <button type ="submit" name="password_reset_link" class="btn btn-primary"> Send Password Reset Link </button>
</div>
</html>
