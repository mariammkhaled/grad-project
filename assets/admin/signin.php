<?php 
include("../shared/header.php");
$conn = mysqli_connect("localhost", "root", "" ,"test");

if(isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["password"];

  $selectAdmin = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
  $adminQuery = mysqli_query($conn, $selectAdmin);
  $adminRow = mysqli_fetch_assoc($adminQuery);
  $numOfAdmins = mysqli_num_rows($adminQuery);

    if($numOfAdmins <= 0){
      echo "Wrong e-mail or password";
    }
    else{
      $_SESSION["admin_id"] = $adminRow["id"];
      header("Location: ./admin_dashboard.php");
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

            <button type="submit" class="btn btn-primary btn btn-primary rounded-pill btn-lg btn-block my-1" name="login" type="button">Login</button>
            
           </form>
        </div>
        </div>
      </div>
    </section>
    <!-- link bootstrap js-->
<?php 
include("../shared/footer.php"); 
?>
