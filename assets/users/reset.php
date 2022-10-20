<?php include("../shared/header.php"); ?>
<?php 
  $db = mysqli_connect ('localhost', 'root', '', 'test');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['email']) && !empty($_POST['code']) && !empty($_POST['pass'])) {
            $email = $_POST['email'];
            $code = $_POST['code'];
            $pass = $_POST['pass'];

            $result = mysqli_query($db, "SELECT * FROM code WHERE email = '$email' AND code = '$code'");

            if(mysqli_num_rows($result) != 0) {
              $fetchRow = mysqli_fetch_assoc($result);
              $patientId = $fetchRow["patient"];
              $update = mysqli_query($db, "UPDATE `patient` SET `password` = '$pass' WHERE id = $patientId");
              $delete = mysqli_query($db, "DELETE FROM `code` WHERE `email` = '$email'");
              header("Location: ./login2.php");
            }else{
              echo "Wrong code or email.";
            }
        }
      }



?>

    <link rel="stylesheet" href="../public/styles/signin.css" />
<style>
  .signin-card{
    min-height:80vh;
    
  }
  .forget-content{
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
        <div class="row">
          <div class="col-lg-6 col-md-12 card-photo">
            <img src="../images/Forgotpassword.png" class="d-block mx-auto" width="100%" alt="man" />
          </div>

          <div class="col-lg-6 col-md-12 forget-content">
            <h3 class="n1">Create New Password</h3>
            <h6 class="n2">Enter the new password</h6>
            
            <div class="form-content">
              <form action="" method="post">
                <input type="text" class="w-100 form-rounded my-1" name="email" placeholder="Enter Email" required/>
                <input type="text" class="w-100 form-rounded my-1" name="code" placeholder="Enter Reset Code" required/>
                <input type="text" class="w-100 form-rounded my-1" name="pass" placeholder="Enter New Password" required/>
            </div>
            <button type="submit" class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block  my-1" name="reset">Reset Password</button>
           </form>
           
        </div>
        </div>
      </div>
    </section>
    <!-- link bootstrap js-->
<?php include("../shared/footer.php"); ?>
