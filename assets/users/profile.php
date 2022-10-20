<?php
 include("../shared/header.php");

 if(!isset($_SESSION["patient_id"])){
  header("Location: /yourheart'ssight/");
 }

$conn = mysqli_connect("localhost", "root", "", "test");
$patient_id = $_SESSION['patient_id'];
$selectUser = "SELECT * FROM `patient` WHERE patient.id = $patient_id;";
$userQuery = mysqli_query($conn, $selectUser);
$fetchUser = mysqli_fetch_assoc($userQuery);

$selectAppointments = "SELECT * FROM `reservations` LEFT JOIN `therapist` ON therapist.id = reservations.therapist_id WHERE `patient_id` = $patient_id ORDER BY `reservations`.id DESC";
$appointmentsQuery = mysqli_query($conn, $selectAppointments);

 ?>
 <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700;800&display=swap"
      rel="stylesheet"
    />

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./style.css">
<style>

  *{
    box-sizing:border-box;
  }

  body{
  background-color: #ffffff;
  font-family: "Inter", sans-serif;
}
    .profile{
        min-height:80vh; 
    }
    .grid-profile{
        width:100%;
        display:grid;
        grid-template-columns:1fr 1fr;
    }
    .side-left{
        text-align:left;
        font-size:20px;
        font-weight: 550;
        margin:10px 0;

    }
    .side-right{
        text-align:left;
        font-size:20px;
        margin:10px 0;
        font-weight:350;
        color: #003267;
    }

.text-center{
      padding-top: 70px;
}
    .overflow-profile::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.overflow-profile::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.overflow-profile::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.overflow-profile::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.bg-light{
       text-align:left;
        color: black;
}

.score-text{
  font-size: 1.5rem;
  font-weight: 300;
}

</style>
<section class="profile">
<div class="container">
  <h2 class="my-5 mx-auto">MY PROFILE</h2>
<p>

</p>
<!-- tabs -->
  <ul class="nav nav-pills d-flex justify-content-center">
    <li><a data-toggle="pill" id="pill1" class="btn btn-outline-primary rounded-pill m-2 active"  href="#menu1">Personal Information </a></li>
    <li><a data-toggle="pill" class="btn btn-outline-primary rounded-pill m-2"  href="#menu2">My Tips </a></li>
    <li><a data-toggle="pill" id="pill3" class="btn btn-outline-primary rounded-pill m-2"  href="#menu3">My Appointments</a></li>
    <li><a data-toggle="pill" class="btn btn-outline-primary rounded-pill m-2"  href="#menu4">My Test Result</a></li>
    <li><a data-toggle="pill" class="btn btn-outline-primary rounded-pill m-2"  href="#menu5"><ion-icon name="create-outline"></ion-icon>Edit Profile</a></li>

  </ul>
  
  <div class="tab-content">


  <!-- tab one -->
    <div id="menu1" class="tab-pane fade show active">
 
    
<div class="grid-profile">
    <div class="side-left">Name : </div>
    <div class="side-right">&nbsp; <?php echo $fetchUser["name"]; ?> </div>
    
    <div class="side-left">Email : </div>
    <div class="side-right">&nbsp; <?php echo $fetchUser["email"]; ?> </div>
    
    <div class="side-left">Mobile Number : </div>
    <div class="side-right">&nbsp;<?php echo $fetchUser["phone"]; ?> </div>
    
    <div class="side-left">Gender :</div>
    <div class="side-right">&nbsp; <?php echo $fetchUser["gender"]; ?> </div>
    
    
</div>   
 </div>
  <!-- tab two -->

<div id="menu2" class="tab-pane fade">
      
      <div  style="height:50vh;overflow:auto; ">
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      -Wake up everyday with different goal or purpose to do
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      -Stay active
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      -Relax in a warm bath once a week.
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      -Track gratitude and achievement with a journal. Include 3 things you were grateful for and 3 things you were able 
to accomplish each day
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      -Keep it cool for a good night's sleep.
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      -Do your best to enjoy 15 minutes of sunshine, and apply sunscreen. Sunlight synthesizes Vitamin D, which experts believe is a mood elevator.
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      Do your best to enjoy 15 minutes of sunshine, and apply sunscreen. Sunlight synthesizes Vitamin D, which experts believe is a mood elevator.
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      Do something with friends and family - have a cookout, go to a park, or play a game. People are 12 times more likely to feel happy on days that they spend 6-7 hours with friends and family
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      Practice forgiveness - even if it's just forgiving that person who cut you off during your commute. People who forgive have better mental health and report being more satisfied with their lives
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      Be a tourist in your own town. Often times people only explore attractions on trips, but you may be surprised what cool things are in your own backyard.
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      Sometimes, we don't need to add new activities to get more pleasure. We just need to soak up the joy in the ones we've already got. Trying to be optimistic doesn't mean ignoring the uglier sides of life. It just means focusing on the positive as much as possible
      </h5>
      <h5 class="m-3 p-3 bg-light rounded-pill " >
      Work your strengths. Do something you're good at to build self-confidence, then tackle a tougher task
    
    </div>
    </div>


<!-- tab three -->
    <div id="menu3" class="tab-pane fade">
    <h2 class="my-5 " style="padding right:25px; !important;" >Upcomming Appointments </h2>
      <div  style="height:50vh;overflow:auto; text-align:center; "  class="overflow-profile">
      <?php foreach($appointmentsQuery as $appointment){ ?>
        <h5 class="m-3 w-50 p-3 bg-light rounded-pill ml-5" >
        <?php echo $appointment["name"] ?> <br>
        <small><?php echo $appointment["session_date"]; ?></small>
      </h5>
      <?php } ?>
    
    </div> 
  </div>
    <div id="menu4" class="tab-pane fade">
      
     <h1 class="text-center"><?php echo ($fetchUser["mental_test_score"])? $fetchUser["mental_test_score"] : "0" ?>/50 </h1>
     <br>
     <?php if($fetchUser["mental_test_score"] >= 0 && $fetchUser["mental_test_score"] < 10){ ?>
      <p class="score-text">
The scores you have given suggest may be suffering from mild mood disturbances - however this is a very quick test and people experience depression in many different ways – so if you are concerned we would always recommend seeking advise from your psychiatrist.<br><br>

What should I do now?<br><br>
You might want to consider a full assessment with a Consultant Psychiatrist would also assess for other common conditions such as anxiety or bipolar and can be great place to start – particularly if you have experienced low moods for a long time or have any other mental health concerns.<br><br>

Talking therapies, such as Psychology or Psychotherapy can be highly effective at helping people feel more in control of their lives, easing the symptoms of stress and helping them learn new, more effective ways of coping.<br><br>

If you are at all concerned about how you are feeling we would always recommend speaking to someone. You can arrange private psychiatric assessments and therapy sessions .
</p>
     <?php } else if($fetchUser["mental_test_score"] >= 10 && $fetchUser["mental_test_score"] < 25){ ?>
      <p class="score-text">
        The scores you have given suggest are likely to be suffering with depression and report many of the common symptoms.<br><br>

What should I do now?<br><br>
The symptoms you report can be debilitating, impacting on many areas of your life. It is common for people with depression to feel hopeless and unsure that there is anything that can be done for them.<br><br> Whilst depression can be difficult to understand for those suffering and their families, it can be successfully treated, and many people go on to lead happy, fulfilled lives.<br><br>

It's also common for people who have depression to have another mental health condition, like anxiety as well. The symptoms you report are also common in conditions like Bipolar. A diagnosis, by an expert in the field, is key to getting the right treatment plan in place, and that’s where we can help.<br><br>

We would urge you to seek help as soon as you are able. You can arrange private psychiatric assessments and therapy sessions .</p>
    <?php } else if($fetchUser["mental_test_score"] >= 25 && $fetchUser["mental_test_score"] < 39){ ?>
      <p class="score-text">
  The scores you have given suggest are very likely to be suffering with depression and report many of the common symptoms.

What should I do now?<br><br>
The symptoms you report can be very serious. Often sufferers with clinical depression struggle to lead ‘normal’ lives. 
It is very common for people with depression to feel hopeless and unsure that there is anything that can be done for them. 
<br> <br>Whilst depression can be difficult to understand for those suffering and their families, it can be successfully treated and many people go on to lead happy, fulfilled lives.
<br><br>It's also common for people who have depression to have another mental health condition, like anxiety as well. 
The symptoms you report are also common in conditions like Bipolar. A diagnosis, by an expert in the field, is key to getting the right treatment plan in place, and that’s where we can help.<br><br>

We would urge you to seek help as soon as you are able. You  can arrange private psychiatric assessments and therapy sessions.</p>

    <?php }else if($fetchUser["mental_test_score"] >= 40 && $fetchUser["mental_test_score"] < 51){ ?>
      <p class="score-text">
  The scores you have given suggest are very likely to be suffering with depression and report many of the common symptoms.

What should I do now?<br><br>
The symptoms you report can be very serious. Often sufferers with clinical depression struggle to lead ‘normal’ lives.<br><br>
 It is very common for people with depression to feel hopeless and unsure that there is anything that can be done for them. <br><br>Whilst depression can be difficult to understand for those suffering and their families, it can be successfully treated and many people go on to lead happy, fulfilled lives.<br><br>

It's also common for people who have depression to have another mental health condition, like anxiety as well. The symptoms you report are also common in conditions like Bipolar. <br><br>A diagnosis, by an expert in the field, is key to getting the right treatment plan in place, and that’s where we can help.

We would urge you to seek help as soon as you are able. You arrange private psychiatric assessments and therapy sessions at .</p>
    <?php }else{ ?>

    <?php } ?>
    </div>




<!-- tab four -->
    <div id="menu5" class="tab-pane fade">
      

      <div class="update-profile">
<?php 
if(isset($_POST["update_profile"])){
  $updatedName = $_POST["update_name"];
  $updatedEmail = $_POST["update_email"];
  $oldPassword = $_POST["old_pass"];
  $newPassword = $_POST["new_pass"];
  if($_POST["old_pass"] && $_POST["new_pass"]){
  if($oldPassword == $fetchUser["password"]){
    $updating = "UPDATE `patient` SET `name` = '$updatedName', email = '$updatedEmail', `password` = '$newPassword' WHERE id = $patient_id";
    $updateQuery = mysqli_query($conn, $updating);
    echo "profile updated successfully";
    header("Refresh:0");
  }else{
    echo "Password doesn't match";
  }
}else{
  $updating = "UPDATE `patient` SET `name` = '$updatedName', email = '$updatedEmail' WHERE id = $patient_id";
  $updateQuery = mysqli_query($conn, $updating);
  echo "profile updated successfully";
  header("Refresh:0");
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
   <div class="flex">
      <div class="inputBox">
         <span>username :</span>
         <input type="text" name="update_name" value="<?php echo $fetchUser['name']; ?>" class="box">
         <span>your email :</span>
         <input type="email" name="update_email" value="<?php echo $fetchUser['email']; ?>" class="box">
      </div>
      <div class="inputBox">
         <input type="hidden" name="old_pass" value="<?php echo $fetchUser['password']; ?>">
         <span>old password :</span>
         <input type="password" name="update_pass" placeholder="enter previous password" class="box">
         <span>new password :</span>
         <input type="password" name="new_pass" placeholder="enter new password" class="box">
      </div>
   </div>
   <input type="submit" value="update profile" name="update_profile" class="btn">
   <a href="home.php" class="delete-btn">go back</a>

</form>

</div>
 </div>
  </div>
</div>
</section>

<script>
  const currentPage = window.location.href;
  console.log();
  if(currentPage.includes("#menu3")){
    const menu1= document.getElementById("menu1");
    const pill1 = document.getElementById("pill1");
    pill1.classList.remove("active");
    menu1.classList.remove("show");
    menu1.classList.remove("active");
    const menu3 = document.getElementById("menu3");
    const pill3 = document.getElementById("pill3");
    menu3.classList.add("show");
    menu3.classList.add("active");
    pill3.classList.add("active");
  } else if(currentPage.includes("#menu4")){
    const menu1= document.getElementById("menu1");
    const pill1 = document.getElementById("pill1");
    pill1.classList.remove("active");
    menu1.classList.remove("show");
    menu1.classList.remove("active");
    const menu4 = document.getElementById("menu4");
    const pill4 = document.getElementById("pill4");
    menu4.classList.add("show");
    menu4.classList.add("active");
    pill4.classList.add("active");
  }
</script>

<!-- JavaScript Bundle with Popper -->
<?php include("../shared/footer.php"); ?>