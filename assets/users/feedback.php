<?php include("../shared/header.php");

$conn = mysqli_connect("localhost", "root", "", "test");

if(!isset($_SESSION["patient_id"])){
    header("Location: ./login2.php");
   }
   if(isset($_GET["doctor"])){

    $therapist_id = $_GET["doctor"];

       if(isset($_POST["submit"])){
           $patient_id = $_SESSION["patient_id"];
           $feedback = $_POST["feedback"];
           $rating = $_POST["rating"];
           $insertFeedback = "INSERT INTO `feedbacks` VALUES(NULL, $patient_id, $therapist_id, '$feedback',$rating);";
           $feedbackQuery = mysqli_query($conn, $insertFeedback);
           header("Location: ./doctor-details.php?doctor=$therapist_id");
        }
    }

?>
<style>
/* Hide all steps by default: */
*{
  box-sizing: border-box;
}
.section-question{
    min-height:80vh;
  }
.tab {
  display: none;
}
.main-questins{

display:flex;
align-items:center;
justify-content:center;
}
  
.questions-label {
      display: flex;
      padding: 5px 0;
      font-size: 20px;
      cursor: pointer;
    }

    input[type="radio"] {
      opacity: 0;
    }

    .value {
      position: relative;
      display: flex;
      align-items: center;
      padding: 15px 30px 15px 50px;
      border-radius: 20px;
    }

    .value:hover {
      background:#DCE1E9;
    }

    .value::before {
      content: "";
      position: absolute;
      left: 15px;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #aaf;
      outline: 0px solid #3B66F5;
      transition: 0.1s;
    }

    input[type="radio"]:checked~.value {
      color: #fff;
      border-width: 10px;
      background: #3B66F5;
      transition: 0.4s;
    }

    input[type="radio"]:checked~.value::before {
      outline-width: 5px;
      background: #fff;
    }

</style>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">


<style type='text/css'>
 .starrr {
  display: inline-block;
  
 }
  .starrr a {
    font-size: 16px;
    padding: 0 1px;
    cursor:auto;
    color: #FFD119 !important;
    text-decoration: none !important; }
 

    
  </style>
<link rel="stylesheet" href="./starability-fade.css">
<section class="section-question main-questins">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 card-photo">
  

          <form id="regForm" class="d-flex justify-contnet-around align-items-center flex-column  w-100" method="POST" >
             <h1 style="text-transform:uppercase;" class="text-primary align-self-start">Give us your feedback...</h1>
  
      <textarea name="feedback" class="form-control" id="" cols="30" rows="5"></textarea>
      <h5  style="text-transform:uppercase;" class="text-info align-self-start text-opacity-25 mt-5 mb-5">Give us rating out of 5.</h5>
      <div style="position: absolute; left: 20px; bottom: -80px;">
          <fieldset class="starability-fade">
            <!-- <input type="radio" id="no-rate" class="input-no-rate" name="rating" value="0" checked aria-label="No rating." /> -->
            <input type="radio" id="second-rate1" name="rating" value="1" required/>
            <label for="second-rate1" title="Terrible">1 star</label>
            <input type="radio" id="second-rate2" name="rating" value="2" />
            <label for="second-rate2" title="Not good">2 stars</label>
            <input type="radio" id="second-rate3" name="rating" value="3" />
            <label for="second-rate3" title="Average">3 stars</label>
            <input type="radio" id="second-rate4" name="rating" value="4" />
            <label for="second-rate4" title="Very good">4 stars</label>
            <input type="radio" id="second-rate5" name="rating" value="5" />
            <label for="second-rate5" title="Amazing">5 stars</label>
          </fieldset>
          <button class="btn btn-primary" name="submit"> Submit Your feedback</button>
      </div>
  
</form>
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
  rating: 3,
  
})
  </script>

<?php include("../shared/footer.php"); ?>

</body>
</html>