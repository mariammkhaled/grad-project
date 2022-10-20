<?php 
include("../shared/header.php");
$conn = mysqli_connect("localhost", "root", "" ,"test");

if(isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["password"];

  $selectPatient = "SELECT * FROM `patient` WHERE `email` = '$email' AND `password` = '$password'";
  $patientQuery = mysqli_query($conn, $selectPatient);
  $patientRow = mysqli_fetch_assoc($patientQuery);
  $numOfPatients = mysqli_num_rows($patientQuery);

  if($numOfPatients <= 0){
    $selectTherapist = "SELECT * FROM `therapist` WHERE `email` = '$email' AND `password` = '$password'";
    $therapistQuery = mysqli_query($conn, $selectTherapist);
    $therapistRow = mysqli_fetch_assoc($therapistQuery);
    $numOfTherapists = mysqli_num_rows($therapistQuery);

    if($numOfTherapists <= 0){
      echo "Wrong e-mail or password";
    }
    else{
      $_SESSION["therapist_id"] = $therapistRow["id"];
      header("Location: ../therapist/dashboard.php");
    }
  } else{
    $_SESSION["patient_id"] = $patientRow["id"];
    header("Location: /yourheart'ssight/assets/users/profile.php");
  }
}

?>
    <link rel="stylesheet" href="../public/styles/signin.css" />
<style>
  .signin-card{
    min-height:80vh;
  }
  </style>
    <!--end header-->

    <!--start content-->

    <section class="signin-card">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 card-photo">
            <img src="../images/man.png" class="d-block mx-auto" alt="man" />
          </div>

          <div class="col-lg-6 col-md-12 card-content">
            <h3 class="n1">Sign in</h3>
            <h6 class="n2">Please enter your username and password</h6>
            
            <div class="form-content">
              <form method="POST">
                  <input type="text" class="w-100 form-rounded my-1" name="email" placeholder="Email"/>
                  <br/>
            </div>
            <input type="password" class="form-rounded w-100  my-1" name="password" placeholder="Password" />
            <a class=" float-right  my-1" href="/yourheart'ssight/assets/users/forget.php">Forget password?</a>
            <button type="submit" class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block my-1" name="login" type="button">Login</button>
            
           
           <h6 class="text-center my-1">Don’t have an account?  <a class="link" href="/yourheart'ssight/assets/users/create.php">Sign up</a></h6> 
           </form>
        </div>
        </div>
      </div>
    </section>
    <!-- link bootstrap js-->
<?php 
include("../shared/footer.php"); 
?>
