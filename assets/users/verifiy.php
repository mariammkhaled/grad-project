<?php include("../shared/header.php"); ?>
<link rel="stylesheet" href="../public/styles/signin.css" />
<style>
  .signin-card {
    min-height: 80vh;

  }

  .forget-content {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
  }
</style>
<?php 
include 'init.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if($_SESSION['mail_recover'] != null){

    $db = mysqli_connect ('localhost', 'root', '', 'test');
    $email  =  addslashes($_SESSION['mail_recover']);
    $code   =  $_POST['code'];
    $expire =  time();
    $result = mysqli_query($db,"SELECT * FROM code WHERE email = '$email' AND code = '$code'  ORDER BY id desc LIMIT 1");
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      if ($row['expire'] > $expire) {
        $password = $_POST['password'];
        $passwordConfirm = $_POST['password2'];
        if ($password == $passwordConfirm) {
          mysqli_query($db, "UPDATE patient SET password = '$password' WHERE email = '$email'");
          mysqli_query($db, "DELETE FROM code WHERE email = '$email'");
          unset($_SESSION['mail_recover']);
          header('Location: login.php');
        } else {
          echo '<div class="alert alert-danger">
          <strong>Error!</strong> Passwords do not match.
        </div>';
        }
      }else{
        echo "Code expired";
        return ;
      }
    }
  }
  }

?>

<!--end header-->

<!--start content-->

<section class="signin-card">
  <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-12 card-photo">
        <img src="../images/Forgotpassword.png" class="d-block mx-auto" width="100%" alt="man" />
      </div>
      <div class="col-lg-6 col-md-12 forget-content">
        <h3 class="n1">Enter The Verification code</h3>
        <div class="form-content">
          <form action=<?= $_SERVER['PHP_SELF']; ?> method="post">
            <input type="text" class="w-100 form-rounded my-1" name="code" placeholder="Reset Code" />
            <input type="password" class="w-100 form-rounded my-1" name="password" placeholder="New Password" />
            <input type='password' class="w-100 form-rounded my-1" name="password2" placeholder="Confirm Password" />
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>


        <a href="/yourheart'ssight/assets/users/signin.php"
          class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block  my-1">Login</a>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- link bootstrap js-->
<?php include("../shared/footer.php"); ?>