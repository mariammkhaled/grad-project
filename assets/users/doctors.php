<?php include("../shared/header.php");

$conn = mysqli_connect("localhost", "root", "", "test");

if(isset($_GET["filter"])){
  $filter = $_GET["filter"];
  if($filter == 1){
    $selectTherapists = "SELECT * FROM `therapist` ORDER BY `price` DESC";
    $therapistsQuery = mysqli_query($conn, $selectTherapists);    
  }else if($filter == 2){
    $selectTherapists = "SELECT * FROM `therapist` ORDER BY `price` ASC";
    $therapistsQuery = mysqli_query($conn, $selectTherapists);    
  }
}else{ 
  $selectTherapists = "SELECT * FROM `therapist`";
  $therapistsQuery = mysqli_query($conn, $selectTherapists);
}

?>
    <link rel="stylesheet" href="../public/styles/signin.css" />

    <!--end header-->

    <!--start content-->

    <section class="signin-card">
        <div class="container mt-5">
     <div class="d-flex justify-content-between">
<h1>
    The Available Doctors
</h1>

<div class="mb-4 row">
<form class="col-12">
  <select class="custom-select col-8" required name="filter">
    <option disabled selected hidden>Filter as</option>
    <option value="1">Price: Low to high</option>
    <option value="2">Price: High to Low</option>
  </select>
  <button type="submit" class="btn btn-primary ml-3">Filter</button>
</form>

</div>
     </div>
        <div class="row justify-content-between">
        <?php foreach($therapistsQuery as $therapist){ ?>
 <div class="card mb-3 rounded-lg" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col ">
    <img src="../admin/uploaded/<?php echo $therapist["image"]; ?>" style="width:250px" height="350px" alt="" />
    </div>
    <div class="col">
      <div class="card-body">
        <h5 class="card-title"><?php echo $therapist["name"]; ?></h5>
        <p class="card-text"></p>
        <a href="/yourheart'ssight/assets/users/doctor-details.php?doctor=<?php echo $therapist["id"]; ?>" class="btn btn-primary rounded-pill btn-lg btn-block  w-75 my-1" type="button">Book now</a>
      </div>
    </div>
  </div>
</div>
<?php } ?>


        </div>
      </div>
    </section>
    <!-- link bootstrap js-->
  </body>
</html>
<?php include("../shared/footer.php"); ?>
