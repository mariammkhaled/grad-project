<?php include("../shared/header.php");

$conn = mysqli_connect("localhost", "root", "", "test");

if(!isset($_SESSION["toPurchase"])){
  header("Location: /yourheart'ssight/assets/users/doctors.php");
}

$dateId = $_SESSION["toPurchase"];
if(isset($_POST) && count($_POST) > 0){
  $patient = $_SESSION["patient_id"];
  $selectedDate = $_SESSION["toPurchase"];
  $selectDate = "SELECT * FROM `work_dates` WHERE id = $selectedDate";
  $dateQuery = mysqli_query($conn, $selectDate);
  $dateRow = mysqli_fetch_assoc($dateQuery);

  $therapistId = $dateRow["therapist_id"];

  $day = $dateRow["day"];
  $dateFrom = $dateRow["from"];
  $dateTo = $dateRow["to"];
  $reservedDate = "$day - $dateFrom to $dateTo";


  $selectTherapist = "SELECT * FROM `therapist` WHERE id =  $therapistId";
  $therapistQuery = mysqli_query($conn, $selectTherapist);
  $therapistRow = mysqli_fetch_assoc($therapistQuery);

  $therapistPrice = $therapistRow["price"];

  $insertPayment = "INSERT INTO `payments` VALUES(NULL, $therapistPrice, '$reservedDate', $therapistId, $patient);";
  $paymentQuery = mysqli_query($conn, $insertPayment);
  $payId = $conn->insert_id;

  $insertReservations = "INSERT INTO `reservations` VALUES(NULL, $payId, $patient, $therapistId, '$reservedDate', $dateId);";
  $insertQuery = mysqli_query($conn, $insertReservations);
  unset($_SESSION["toPurchase"]);
  header( "Location: ./profile.php#menu3");
  }

?> 

<section class="caridet-card mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" style="display: flex; justify-content: center">
            <div class="payment">
              <h5>Credit-card</h5>
              <form method="POST" id="bookingForm">
                <div class="row">
                  <div class="col-lg-6 mb-3">
                    <input id="credit-card"
                      type="text"
                      class="form-control"
                      placeholder="Credit card"
                      style="border-radius: 30px" required
                    />
                  </div>
                  <h6 class="ml-4" style="margin-right: -20px;">Expiry Date</h6>
                  <div class="col-lg-4 mb-3">
                    <div class="row" style="width: 300px;">
                    <select
                    style="width: 100px;"
                    id="number"
                      type="date"
                      class=" ml-5 form-control"
                      placeholder="Credit card" required>
                    <option value=""hidden disabled selected>Month</option>
                    <option value='01'>01</option>
                        <option value='02'>02</option>
                        <option value='03'>03</option>
                        <option value='04'>04</option>
                        <option value='05'>05</option>
                        <option value='06'>06</option>
                        <option value='07'>07</option>
                        <option value='08'>08</option>
                        <option value='09'>09</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                    </select>
                      <select
                    style="width: 100px;"
                    id="number"
                      type="date"
                      class="form-control ml-5"
                      placeholder="Credit card" required>
                    <option value=""hidden disabled selected>Year</option>
                        <?php for($i = 22; $i <= 28; $i++){ ?>
                          <option value=''>20<?php echo $i; ?></option>
                        <?php }  ?>
                    </select>
                    </div>
                  </div>
                  <div class="col-lg-3"></div>
                  <div class="col-lg-6 mb-3 align-content-center">
                    <input
                      type="text"
                      class="form-control"
                      name="cvv"
                      placeholder="CVV"
                      style="border-radius: 30px" required
                    />
                  </div>
                  <div class="col-lg-12 text-center">
                    <button type="submit" id="purchaseButton" name="purchase"
    class="btn btn-primary"
    >
    Book Now
  </button>
  </form>
  <!-- Modal -->
  <div class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      
        <!-- Add image inside the body of modal -->
        <div class="modal-body">
          <img  src= "../images/successful.png"
            alt="successful" />
        </div>

        <div class="modal-footer">
          <button type="button"
            class="btn btn-secondary"
            data-dismiss="modal">
            Close
        </button>
        </div>
                  </div>
                </div>
            </div>
            </div>
    </div>
  </div>
          </div>
        </div>
      </div>
    </section>
<!-- Adding scripts to use bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous">
  </script>
  <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous">
  </script>
  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous">
  </script>
    
    <script>
  const  purchaseButton = document.getElementById("purchaseButton");

  const bookingForm = $("#bookingForm");
bookingForm.on("submit", function(e) {
  e.preventDefault();
  const myModalAlternative = new bootstrap.Modal('#exampleModal');
        setTimeout(function () {
          $('#exampleModal').modal('show');
        }, 500);
        // $("#bookingForm").delay(4000).submit();

      $(this).unbind("submit");
      setTimeout( function () { 
      bookingForm.submit();
      // $(location).prop('href', 'http://stackoverflow.com')
      }, 2000);
})


    </script>
    <?php include("../shared/footer.php"); ?>