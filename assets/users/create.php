<?php 
include("../shared/header.php");

$conn = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST["register"])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $gender = $_POST["gender"];
  $password = $_POST["password"];
  $dateofbirth = $_POST["dateofbirth"];

  $checkIfPatient = "SELECT * FROM `patient` WHERE `email` = '$email'";
  $patientQuery = mysqli_query($conn, $checkIfPatient);
  $isPatient = mysqli_num_rows($patientQuery);

  if($isPatient <= 0){
    $checkIfTherapist = "SELECT * FROM `therapist` WHERE `email` = '$email'";
    $therapistQuery = mysqli_query($conn, $checkIfTherapist);
    $isTherapist = mysqli_num_rows($therapistQuery);

    if($isTherapist <= 0){
      $insertPatient = "INSERT INTO `patient` VALUES(NULL, '$name', '$email', '$password', '$phone', '$dateofbirth',0,'$gender');";
      $registerPatient = mysqli_query($conn, $insertPatient);
      if($registerPatient){
        header("location: ./login2.php");
      }else{
        echo "An error has occurred";
      }
    }
    else{
      echo "Account already exists";
    }
  } else{
    echo "Account already exists";
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
            <h3 class="n1">Create your account</h3>
            <div class="form-content">
              <form action="" method="post">
                  <input type="text" class="w-100 form-rounded my-1" name="name" placeholder="Name" required/>
                  <input type="email" class="w-100 form-rounded my-1" name="email" placeholder="Email" required/>
                  <input type="number" class="w-100 form-rounded my-1" name="phone" placeholder="Phone" required/>
                  <input type="date" class="w-100 form-rounded my-1" name="dateofbirth" placeholder="Date of Birth" required/>
                  <select class="form-control rounded-pill bg-light p-2 text-muted my-1  border-0" style=" height:40px;" id="exampleFormControlSelect1" name="gender" required>
                    <option selected hidden disabled value="Male"> Gender</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option> 
                  </select>
                  <input type="password" class="form-rounded w-100  my-1" name="password" placeholder="Password" required/>
                </div>
            <button type="submit" class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block my-1" name="register" type="button">Register</button>
           <h6 class="text-center my-1">Already have an account?  <a class="link" href="/yourheart'ssight/assets/users/login2.php">Sign in</a></h6> 
           </form>
        </div>
        </div>
      </div>
    </section>
<?php 
include("../shared/footer.php");
 ?>
