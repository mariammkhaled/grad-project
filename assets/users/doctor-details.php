   <?php include("../shared/header.php");
   
   $conn = mysqli_connect("localhost", "root", "", "test");

   $therapist_id = $_GET["doctor"];

   $selectTherapist = "SELECT * FROM `therapist` WHERE id = $therapist_id";
   $therapistQuery = mysqli_query($conn, $selectTherapist);
   $therapistRow = mysqli_fetch_assoc($therapistQuery);

   $selectWorkDates = "SELECT * FROM `work_dates` WHERE `therapist_id` = $therapist_id AND id NOT IN (SELECT `work_date` FROM `reservations`)";
   $workDates = mysqli_query($conn, $selectWorkDates);

   $selectRating = "SELECT * FROM `feedbacks` WHERE therapist_id = $therapist_id";
   $ratingQuery = mysqli_query($conn, $selectRating);
   $fetchArr = mysqli_fetch_array($ratingQuery);
   
   $sumRating = 0;
   $totalSubmitted = 0;

    foreach($ratingQuery as $item){
      $sumRating += $item["rate"];
      $totalSubmitted += 1;
    }

    if($sumRating > 0){
      $finalRate = $sumRating / $totalSubmitted;
      round($finalRate);
    }
  //  echo $sumRating;

   if(isset($_POST["purchase"])){
    $reserveDate = $_POST["reserveDate"];
    $_SESSION["toPurchase"] = $reserveDate;
    header("Location: ./payment.php");
   }

   ?> 
    <link rel="stylesheet" href="../public/styles/signin.css" />
    <link rel="stylesheet" href="./starability-fade.css">
<style>
  section{

  }
  .signin-card{
    min-height:80vh;
    
  }
  .forget-content{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    justify-content: center;
  }
  
  .image-doctor-details{
    width:200px;
    height:200px;
    /* background:url('https://images.pexels.com/photos/3714743/pexels-photo-3714743.jpeg?auto=compress&cs=tinysrgb&w=1600'); */
    background-size:cover;
    border-radius:3rem;
    
  }
    
  [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + label {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + label > h4 {
  border: 2px solid blue;
 color:blue;
}


  </style>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
  
    <!-- end footer-->
    <!--start content-->

    <section class="signin-card">
    <section class="doctor-profile mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-8 d-flex align-items-center" style="min-height:30vh">
              <img src="../admin/uploaded/<?php echo $therapistRow["image"]; ?>" width="250px" height="350px" alt="">
                <div class="details  ml-5">
                  <h2><?php echo $therapistRow["name"]; ?></h2>
                  <p>Psychologist</p>
                  <?php if(isset($finalRate)){ ?>
                 <p class="starability-result" data-rating="<?php echo $finalRate?>"></p>
                 <?php }else{ ?>
                 <p class="starability-result" data-rating="0"></p>
                 <?php } ?>
                </div>
              </div>
              <div class="col-lg-4 main-btn-book d-flex align-items-center justify-content-center flex-column">
                <!-- Button trigger modal -->
                <button
                  type="button"
                  class="btn btn-primary btn-block btn-lg rounded-pill"
                  data-bs-toggle="modal" href="#exampleModalToggle" role="button"
                >
                  book Now
                </button>
                <h5 class="text-muted">Price : <?php echo $therapistRow["price"]; ?> EGP</h5>
                <!-- Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header  border-0">
        <h5 class="modal-title" id="exampleModalToggleLabel">Select Your Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
        <?php $dateCounter = 0;
        foreach($workDates as $date){ 
          $dateCounter +=1;
          ?>
          <input type="radio" id="date<?php echo $dateCounter; ?>" name="reserveDate" value="<?php echo $date["id"]; ?>" >
      <label for="date<?php echo $dateCounter; ?>">
      <h4 class="m-3 p-3 bg-light rounded-pill w-80" >
       <?php echo $date["day"]; ?> 01/01/2000 <br>
        <small>from <?php echo $date["from"] ?> to <?php echo $date["to"]; ?></small>
      </h4>
      </label>
        <?php } ?>
      </div>
      <div class="modal-footer  border-0">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" name="purchase" data-bs-toggle="modal" data-bs-dismiss="modal">Book Now</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="false" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header  border-0">
        <h5 class="modal-title" id="exampleModalToggleLabel3">Modal 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer  border-0">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="info mt-5">
          <div class="row">
            <div class="col-lg-8">
              <h5>About doctor</h5>
              <div class="about">
                <p>
                  <?php echo $therapistRow["about"]; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
            <a class="btn btn-primary btn-lg btn-block rounded-pill" href="/yourheart'ssight/assets/users/feedback.php?doctor=<?php echo $therapistRow["id"]; ?>">Give your feedback</a>

            </div>
          </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <script src="../public/javascripts/starrr.js"></script>
  <script>
 
    $('.starrr').starrr({
  rating: 4,
  readOnly:true
  
})
</script>

 <?php include("../shared/footer.php"); ?>
