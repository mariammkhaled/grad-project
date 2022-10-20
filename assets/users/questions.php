<?php include("../shared/header.php");

$conn = mysqli_connect("localhost", "root", "", "test");


$patientId = $_SESSION["patient_id"];

$selectPatient = "SELECT * FROM `patient` WHERE id = $patientId";
$patientQuery = mysqli_query($conn, $selectPatient);
$fetchPatient = mysqli_fetch_assoc($patientQuery);
$score = $fetchPatient["mental_test_score"];

  if($score != 0){
    echo "You have already taken the test before.";
    header("location: ./profile.php");
  }

if(!isset($_SESSION["patient_id"])){
  header("Location: /yourheart'ssight/");
 }

 if(isset($_POST["submit"])){
  $total = array();
  for($i = 1; $i <= 10; $i++){
    echo $_POST["question".$i];
    array_push($total, $_POST["question".$i]);
  }
  $sum =  array_sum($total); //user score test

  $insertScore = "INSERT INTO `mental_test` VALUES (NULL, $sum, $patientId);";
  $scoreQuery = mysqli_query($conn, $insertScore);
  
  $testId = $conn->insert_id;

  $updatePatient = "UPDATE `patient` SET `mental_test_score` = $sum WHERE id = $patientId";
  $updateQuery = mysqli_query($conn, $updatePatient);


  header("Location: ./profile.php#menu4");
  // echo $sum;
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

.starttext{
  color: #003267;
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

.stylelabeltest{
  color: #748FB9;
}
.styleqtest{
  color:black;
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
<section class="section-question main-questins">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 card-photo">
  

          <form id="regForm" class="d-flex justify-contnet-around align-items-center flex-column  w-100" method="POST">
  <h1 style="text-transform:uppercase;" class="starttext align-self-start"> Make your Test...</h1>
  <h3  style="text-transform:uppercase;" class=" stylelabeltest align-self-start text-opacity-25">Answer Some Queestions And know Yourself better.</h3><br>
  
  <form method="POST">
  <div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >The Question below ask about anxitey and worrying</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths, have you experienced any of the following symptoms ? if so , how often ?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >1. I was anxious, worried or scared about a lot of things in my life.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question1" value="0"  required>
    <span class="value">
     Never
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question1" value="2" >
    <span class="value">
    Often times
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question1" value="3" >
    <span class="value">
    Sometimes
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question1" value="4" >
    <span class="value">
   Often
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question1" value="5" >
    <span class="value">
    Constantly
    </span>
  </label>
</div>


<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >The Question below ask about anxitey and worrying</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths, have you experienced any of the following symptoms ? if so , how often ?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >2.i felt that my worry was out of my control</h5>
  
  <label class="questions-label">
    <input type="radio" name="question2" value="0"  required>
    <span class="value">
     Never
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question2" value="2" >
    <span class="value">
    Often times
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question2" value="3" >
    <span class="value">
    Sometimes
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question2" value="4" >
    <span class="value">
   Often
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question2" value="5" >
    <span class="value">
    Constantly
    </span>
  </label>
</div>

<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >The Question below ask about anxitey and worrying</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths, have you experienced any of the following symptoms ? if so , how often ?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >3. i felt restless, agitated , frantic , or tense.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question3" value="0"  required>
    <span class="value">
     Never
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question3" value="2" >
    <span class="value">
    Often times
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question3" value="3" >
    <span class="value">
    Sometimes
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question3" value="4" >
    <span class="value">
   Often
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question3" value="5" >
    <span class="value">
    Constantly
    </span>
  </label>
</div>

<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >The Question below ask about anxitey and worrying</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths, have you experienced any of the following symptoms ? if so , how often ?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >4. i had trouble slepping- i could not fall or stay asleep, and /or didn't feel well-rested when i woke up.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question4" value="0"  required>
    <span class="value">
     Never
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question4" value="2" >
    <span class="value">
    Often times
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question4" value="3" >
    <span class="value">
    Sometimes
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question4" value="4" >
    <span class="value">
   Often
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question4" value="5" >
    <span class="value">
    Constantly
    </span>
  </label>
</div>

<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >Sometimes, people experienced sudden, unexpected wave of intense anxitey or panic, usually lasting not more than 15 minutes</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths,did you experience such an attack with any of the following symptoms? if so, how strong were the symptoms?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >5. my heart would skip beat, was pounding , or my heart rate increased.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question5" value="0"  required>
    <span class="value">
     Not at all
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question5" value="1" >
    <span class="value">
    mild
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question5" value="3" >
    <span class="value">
    moderate
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question5" value="5" >
    <span class="value">
    severe
    </span>
  </label>
</div>


<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >Sometimes, people experienced sudden, unexpected wave of intense anxitey or panic, usually lasting not more than 15 minutes</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths,did you experience such an attack with any of the following symptoms? if so, how strong were the symptoms?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >6.i was sweating profusely.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question6" value="0"  required>
    <span class="value">
     Not at all
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question6" value="1" >
    <span class="value">
    mild
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question6" value="3" >
    <span class="value">
    moderate
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question6" value="5" >
    <span class="value">
    severe
    </span>
  </label>
</div>

<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >Sometimes, people experienced sudden, unexpected wave of intense anxitey or panic, usually lasting not more than 15 minutes</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths,did you experience such an attack with any of the following symptoms? if so, how strong were the symptoms?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >7.my hands , legs or entire body were shaking, termbling, or felt tingly.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question7" value="0"  required>
    <span class="value">
     Not at all
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question7" value="1" >
    <span class="value">
    mild
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question7" value="3" >
    <span class="value">
    moderate
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question7" value="5" >
    <span class="value">
    severe
    </span>
  </label>
</div>

<div class="tab">
  <h4  class="styleqtest align-self-start text-opacity-25"  >Sometimes, people experienced sudden, unexpected wave of intense anxitey or panic, usually lasting not more than 15 minutes</h4> <br>
     <h5   class="styleqtest align-self-start text-opacity-25"  >In the last 6 mounths,did you experience such an attack with any of the following symptoms? if so, how strong were the symptoms?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >8.i had difficulty breathing or swallowing.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question8" value="0"  required>
    <span class="value">
     Not at all
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question8" value="1" >
    <span class="value">
    mild
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question8" value="3" >
    <span class="value">
    moderate
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question8" value="5" >
    <span class="value">
    severe
    </span>
  </label>
</div>


<div class="tab">
     <h5   class="styleqtest align-self-start text-opacity-25"  >in the last 6 mounths,did you experience any of the following symptoms? if so, how strong were the symptoms?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >9.i had pain in my chest, almost like i was having a heart attack.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question9" value="0"  required>
    <span class="value">
     Not at all
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question9" value="1" >
    <span class="value">
    mild
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question9" value="3" >
    <span class="value">
    moderate
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question9" value="5" >
    <span class="value">
    severe
    </span>
  </label>
</div>

<div class="tab">
     <h5   class="styleqtest align-self-start text-opacity-25"  >in the last 6 mounths,did you experience any of the following symptoms? if so, how strong were the symptoms?</h5> <br>
      <h5 class="styleqtest align-self-start text-opacity-25" >10. i felt sick to my stomach , like i was going to throw up, or had diarrhea.</h5>
  
  <label class="questions-label">
    <input type="radio" name="question10" value="0"  required>
    <span class="value">
     Not at all
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question10" value="1" >
    <span class="value">
    mild
    </span>
  </label >
  <label class="questions-label">
    <input type="radio" name="question10" value="3" >
    <span class="value">
    moderate
    </span>
  </label>
  <label class="questions-label">
    <input type="radio" name="question10" value="5" >
    <span class="value">
    severe
    </span>
  </label>
</div>
<button type="submit" name="submit" id="submitBtn" class="btn btn-primary w-20">Submit</button>
  </form>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="nextBtn"  class="btn btn-primary w-100 mb-2"  onclick="nextPrev(1)">Next</button>
      <button type="button" id="prevBtn" class="btn btn-primary w-100" onclick="nextPrev(-1)">Previous</button>
    </div>
  </div>



  <!-- Circles which indicates the steps of the form: -->
  <div style="Display:none;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


        </div>
        </div>
      </div>
    </section>


<script>
    const submitBtn = document.getElementById("submitBtn");
    submitBtn.style.display = "none";
let currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  const x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("submitBtn").style.display = "block";
    document.getElementById("prevBtn").remove();
    document.getElementById("nextBtn").remove();
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  const x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  let valid = true;
  const x = document.getElementsByClassName("tab");
  const y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (let i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  let x = document.getElementsByClassName("step");
  for (let i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<?php include("../shared/footer.php"); ?>

</body>
</html>