<?php include("../shared/header.php"); ?>
    <link rel="stylesheet" href="../public/styles/signin.css" />
<style>
  .signin-card{
    min-height:80vh;
  }
  .login-choose-option{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
  }
  [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + img, label {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + img {
  outline: 2px solid blue;
  border-radius:1rem;
}

.loginicon1 {
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 22px;
color: #003267;
padding-top: 10px;
padding-left: 46px; 
    }

.loginicon2 {
padding-left: 36px;
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 22px;
color: #003267;
padding-top: 10px;
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

          <div class="col-lg-6 col-md-12 login-choose-option my-5"> 
            <h3 class="n1">Sign In As</h3>
            <h6 class="n2">Choose Which One Is you</h6>
            
            <div class="form-content">

                <form action="" method="post">
                <div class="my-5"  style="display:flex; justify-content:center;align-items:center; gap:2rem;">
                <label>
              <input type="radio" name="test" value="small" checked>
              <img src="../images/boy.png"  width="150px">
             <figcaption class="loginicon1">Patient</figcaption>
            </label>

            <label>
              <input type="radio" name="test" value="big">
              <img src="../images/Group8704.png" width="150px">
             <figcaption class="loginicon2">Therapist</figcaption>
            </label>
            </div>
            <a href="/yourheart'ssight/assets/users/signin.php" class="btn btn-primary rounded-pill btn-lg btn-block  my-1">Next</a> 
           
            </form>

            </div>
        </div>
      </div>
    </section>
    <!-- link bootstrap js-->
  
<?php include("../shared/footer.php"); ?>

