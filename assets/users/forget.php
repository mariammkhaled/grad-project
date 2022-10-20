<?php include("../shared/header.php"); ?>
<?php 
include('functions/useMailer.php');
include 'init.php';
$db = mysqli_connect ('localhost', 'root', '', 'test');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['email'])) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $result = mysqli_query($db, "SELECT * FROM patient WHERE email = '$email'");
            if (mysqli_num_rows($result) != 0) {
              $row = mysqli_fetch_assoc($result);
              $expire = time() + (60 * 60 * 24);
              $code   = rand(10000, 99999);
              $email  = addslashes($_POST['email']);
              $patientId = $row['id'];
              $_SESSION['mail_recover'] = $email;
              mysqli_query($db, "INSERT INTO code (email, code, patient) VALUES ('$email', '$code', '$patientId')");
              mailing(
                  $email,
                  'Recover Your Email',
                  "<!DOCTYPE html>
                  <html lang='en'>
                  <head>
                      <meta charset='UTF-8'>
                      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                      <title>Document</title>
                      <style>
                          .mail{
                              width: 100%;
                              text-align: center;
                  
                              text-transform: capitalize;
                          }
                          .mail .contains{
                              width: 450px;
                              text-align: center;
                  
                              height: 450px;
                              
                          }
                          .mail .header{
                  
                              padding-bottom: 10px;
                              /* text-decoration: underline; */
                              border-bottom: 1px solid #000;
                  
                          }
                          .mail p {
                              margin: 40px 0 ;
                              /* line-height: ; */
                          }
                          .recoverylink{
                              text-decoration: none;
                              color:#fff ;
                              background-color:#2ecc71 ;
                              padding: 20px;
                              border-radius: 8%;
                          }
                          .mailFooter
                          {
                              border: 1px solid #000;
                              margin-top: 4rem;
                          }
                      </style>
                  </head>
                  <body>
                      <div class='mail'>
                          <div class='contains'>
                              <h1 class='header'>recover password</h1>
                          <p>Your password recovery code</p>
                          <a href='' class='recoverylink'>$code</a>
                          
                          <div class='mailFooter'></div>
                          <p>
                              after reseting pleasse try to relogin with your new password
                          </p>
                          </div>
                      </div>
                  </body>
                  </html>
                  "
              );
              header('location: ./reset.php');
          }
      }
    }    
?>
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
<!--end header-->
<!--start content-->

<section class="signin-card">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 col-md-12 card-photo">
        <img src="../images/idea.png" class="d-block mx-auto" alt="idea" />
      </div>

      <div class="col-lg-6 col-md-12 forget-content">
        <h3 class="n1">Forget Password</h3>
        <h6 class="n2">Enter your email to recover your password</h6>

        <div class="form-content">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" class="w-100 form-rounded my-1" name="email" placeholder="Email" />
            <input type="submit" class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block  my-1"
              value="Submit" />
            <br />
        </div>
        <!-- <a href="/yourheart'ssight/assets/users/reset.php" -->
          <!-- class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block  my-1">Send Resetting Password</a> -->
        </form>
      </div>
    </div>
  </div>
</section>
<!-- link bootstrap js-->
<?php include("../shared/footer.php"); ?>