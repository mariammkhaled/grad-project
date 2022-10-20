<?php 
ob_start();
include("./assets/shared/header.php");

if(isset($_GET["logout"])){
  session_unset();
    session_destroy();
    header("location: /yourheart'ssight/index.php");
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700;800&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> </head>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .home-main-title{
    font-weight: bold;
    color: #1E222F;
  }
  .home-main{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
  }
  .mini-card{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    
  .mini-titles{
      display: flex;
      position: relative;
    }
    .mini-titles span{
      margin: 0 2rem;
    }
    .mini-titles span:not(:last-child)::after{
      content: "";
      border-left: 2px solid rgb(107, 107, 107);
      height: 100%;
      position:absolute;
      transform: translateY(-50%);
      margin: 0 2rem;
    }

.services-center{
  text-align: center;
      font-weight: 700;
  font-size: 50px;
  line-height: 68px;
    }

.services-des{
text-align: center;
  font-weight: 400;
  font-size: 18px;
  line-height: 30px;
  color: #748fb9
    }

.title-doctors,.title-clinics,.title-mind {
  font-weight: 600;
  font-size: 20px;
  line-height: 24px;
  margin-top: 24px;
}

.card-element1 {
  font-weight: 700;
  font-size: 50px;
  line-height: 68px;
  margin: 16px 0px;
}

.card-element2 {
  font-size: 18px;
  line-height: 30px;
  margin: 16px 0px;
}

    h6{
      color: #748FB9;
    }
    
  @media (max-width:1000px){
    .home-main{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .home-main-title{
      text-align: center;
    }
    .hero-img{
       display: block;
      margin: 0 auto;
      width: 100%;
    }
  
  }
  html {
  scroll-behavior: smooth;
}
</style>

    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <img src="./assets/images/header.png" class="hero-img" alt="header" />
        </div>
        <div class="col-lg-6 col-md-12 home-main">
          <h1 class="primary home-main-title" >
           Enjoy your life by taking care of your health!  
          </h1>

          <h6 class="secondary">
            Try our services by taking the test first , so you can receive day to day tips and reserve your sessions.
          </h6>

            <a href="/yourheart'ssight/assets/users/create.php" class="btn btn-primary btn-lg rounded-pill mx-auto my-3">
                Take The Test Now </a>
<div class="mini-titles mx-auto my-3">
  <span>
    <h5 class="text-primary" style="font-weight: 400;"> 20</h5>
    <small class="text-muted">Therapists</small>
  </span>
  <span>
    <h5 class="text-primary" style="font-weight: 400;"> +2000</h5>
    <small class="text-muted">Mental Tests</small>
  </span>
  <span>
    <h5 class="text-primary" style="font-weight: 400;"> +3000</h5>
    <small class="text-muted">Feedbacks</small>
  </span>

</div>
        </div>
      </div>
    </div>
  <!-- End section1-->

  <!--start section 2-->

    <div class="container">
      <div class="home-section-two mt-5">
        <h1 class="services-center" id="service1">Our Services</h1>
        <p class="services-des"> Services that you actually need, privacy service , safety for your information, excellent customer service & support , honestly feedback.. </p>
      </div>
      <div class="row py-5" style="display: flex; justify-content: center;">
        <div class="col-lg-4 col-md-6 mini-card">
          <img src="./assets/images/Group 50.png" alt="search" />
          <h5 class="title-doctors">Excellent Therapists</h5>
          <h6 class="description-doctors w-50">
            You can search among our
            expert therapists and consult
            one of them or book a session
          </h6>
        </div>
        <div class="col-lg-4 col-md-6 mini-card">
          <img src="./assets/images/privacy.png" alt="privacy" />
          <h5 class="title-clinics">privacy</h5>
          <h6 class="description-clinics w-50">
          Personal data and session details are secured and only you and your therapist can see it
          </h6>
        </div>

        <div class="col-lg-4 col-md-6 mini-card">
          <img src="./assets/images/brain.png" alt="brain" />
          <h5 class="title-mind">Rest Your Mind</h5>
          <h6 class="description-mind w-50">
            Understand your mind, how your personality works
          </h6>
        </div>
      </div>
    </div>
 
  <!--end section 2-->

  <!-- start section3-->

 
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-8 col-md-6 home-main py-3">
          <h1 class="card-element1 text-center" >
            Your psychological test never been easy.
          </h1>
          <h6 class="card-element2 text-center">
            All you have to do is answer some questions and send them <br/>
            and we will answer you
          </h6>
          <a class="btn btn-primary btn-lg w-50 rounded-pill mx-auto" href="#" type="button">
            Take The Test Now
          </a>
        </div>
        <div class="col-lg-4 col-md-6 py-3">
          <img src="assets/images/take the test.png" class="hero-img" alt="">
        </div>
      </div>
    </div>

<?php include("./assets/shared/footer.php");

ob_end_flush();
?>