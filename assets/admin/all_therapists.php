<?php 
session_start();
ob_start();

if(!isset($_SESSION["admin_id"])){
  header("Location: ./signin.php");
}

$conn = mysqli_connect("localhost", "root", "", "test");

if(isset($_GET["delete"])){
  $deletedId = $_GET["delete"];

  $selectDeleted = "DELETE FROM `therapist` WHERE id = $deletedId";
  $deleteQuery = mysqli_query($conn, $selectDeleted);
  header("Location: ./all_therapists.php");
}

if(isset($_GET["search"])){
  $search = $_GET["search"];
  $selectTherapists = "SELECT * FROM `therapist` WHERE `name` or `email` like'%$search%'  ORDER BY id DESC";
  $therapistsQuery = mysqli_query($conn, $selectTherapists);  
}else{
  $selectTherapists = "SELECT * FROM `therapist` ORDER BY id DESC";
  $therapistsQuery = mysqli_query($conn, $selectTherapists);
}


if(isset($_POST["add"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $acc_number = $_POST["acc_number"];
  $age = $_POST["age"];
  $password = $_POST["password"];
  $about = $_POST["about"];
  $price = $_POST["price"];
  $gender = $_POST["gender"];
  $nid = $_POST["nid"];

  $photoName = $_FILES["photo"]["name"];
    $photoType = $_FILES["photo"]["type"];
    $photo_tmp = $_FILES["photo"]["tmp_name"];
    $location = "uploaded/";

    $therapist = "SELECT * FROM `therapist` WHERE `email` = '$email'";
    $therapistQuery = mysqli_query($conn, $therapist);
    $therapistRow = mysqli_num_rows($therapistQuery);
    if($therapistRow > 0){
        echo "The email has been registered with before";
    } else{
        if(move_uploaded_file($photo_tmp, $location.$photoName)){ 
            $insertTherapist = "INSERT INTO `therapist` VALUES (NULL, '$name', '$email', $phone, $acc_number, '$photoName', $age, '$password', '$about', $price, NULL, '$gender', $nid);";
            $insertQuery = mysqli_query($conn, $insertTherapist);
            header("location: ./all_therapists.php");
        }    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> Admin  - therapists</title>

    <!-- Custom fonts for this template -->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link
      href="vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="./admin_dashboard.php"
        >
          <div class="sidebar-brand-icon rotate-n-15">
        
          </div>
          <div class="sidebar-brand-text mx-3"> Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="./admin_dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Nav Item - Tables -->
        <li class="nav-item active">
          <a class="nav-link" href="./all_patients.php">
            <span>All patients</span></a
          >
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="./all_customer_service.php">
            <span>All customer service</span></a
          >
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="./all_reservations.php">
            <span>All reservations</span></a
          >
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="./all_feedbacks.php">
            <span>all feedbacks</span></a
          >
        </li>

        <li class="nav-item active">
        <a class="nav-link" href="/yourheart'ssight/index.php?logout">
            <span>
              Logout
            </span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="
              navbar navbar-expand navbar-light
              bg-white
              topbar
              mb-4
              static-top
              shadow
            "
          >
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button
                id="sidebarToggleTop"
                class="btn btn-link d-md-none rounded-circle mr-3"
              >
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <!-- Topbar Search -->
            <form
              class="
                d-none d-sm-inline-block
                form-inline
                mr-auto
                ml-md-3
                my-2 my-md-0
                mw-100
                navbar-search
              "
            >
              <div class="input-group">
                <input
                  type="text"
                  name="search"
                  class="form-control bg-light border-0 small"
                  placeholder="Search by name or email"
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="
                    dropdown-menu dropdown-menu-right
                    p-3
                    shadow
                    animated--grow-in
                  "
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="
                    dropdown-list dropdown-menu dropdown-menu-right
                    shadow
                    animated--grow-in
                  "
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 12, 2019</div>
                      <span class="font-weight-bold"
                        >A new monthly report is ready to download!</span
                      >
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 7, 2019</div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">December 2, 2019</div>
                      Spending Alert: We've noticed unusually high spending for
                      your account.
                    </div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">all therapists</h6>
                <!-- Button trigger modal -->
                 <button
                 type="button"
                 class="btn btn-primary"
                 data-toggle="modal"
                 data-target="#exampleModal"
               >
                 Add therapists
               </button>

                <!-- Modal -->
                <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data">
                          <input
                            type="text"
                            placeholder="name"
                            class="form-control"
                            name="name"
                            id=""
                          />
                          <br />
                          <input
                            type="email"
                            placeholder="email"
                            class="form-control"
                            name="email"
                            id=""
                          />
                          <br />
                          <input
                            type="number"
                            placeholder="phone"
                            class="form-control"
                            name="phone"
                            id=""
                          />
                          <br />
                          <input
                            type="number"
                            placeholder="acc number"
                            class="form-control"
                            name="acc_number"
                            id=""
                          />
                          <br />
                          <input
                            type="file"
                            placeholder="Image"
                            class="form-control"
                            name="photo"
                            id=""
                          />
                          <br />
                          <input
                            type="number"
                            placeholder="age"
                            class="form-control"
                            name="age"
                            id=""
                          />
                          <br />
                          <input
                            type="password"
                            placeholder="password"
                            class="form-control"
                            name="password"
                            id=""
                          />
                          <br />
                          <textarea
                            name="about"
                            id=""
                            cols="30"
                            rows="10"
                            placeholder="Description"
                            class="form-control"
                          ></textarea>
                          <br />
                          <input
                            type="number"
                            placeholder="price"
                            class="form-control"
                            name="price"
                            id=""
                          />
                          <br />
                          <input
                            type="text"
                            placeholder="gender"
                            class="form-control"
                            name="gender"
                            id=""
                          />

                          <br />
                          <input
                            type="number"
                            placeholder="nid"
                            class="form-control"
                            name="nid"
                            id=""
                          />

                          <br />
                          <button type="submit" name="add" class="btn btn-primary">
                            Save changes
                          </button>
                        </form>
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary">
                          Save changes
                        </button>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">phone</th>
                        <th scope="col">acc number</th>
                        <th scope="col">Image</th>
                        <th scope="col">age</th>
                        <th scope="col">password</th>
                        <th scope="col">about</th>
                        <th scope="col">price</th>
                        <th scope="col">created at</th>
                        <th scope="col">gander</th>
                        <th scope="col">nid</th>
                        <th scope="col" style="text-align:center" colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($therapistsQuery as $therapist){ ?>
                        <tr>
                        <td><?php echo $therapist["id"]; ?></td>
                        <td><?php echo $therapist["name"]; ?></td>
                        <td><?php echo $therapist["email"]; ?></td>
                        <td><?php echo $therapist["phone"]; ?></td>
                        <td><?php echo $therapist["acc_number"]; ?></td>
                        <td><img src="./uploaded/<?php echo $therapist["image"]; ?>" alt="" width="250px" height="450px"></td>
                        <td><?php echo $therapist["age"]; ?></td>
                        <td><?php echo $therapist["password"]; ?></td>
                        <td><?php echo $therapist["about"]; ?></td>
                        <td><?php echo $therapist["price"]; ?></td>
                        <td><?php echo $therapist["created_at"]; ?></td>
                        <td><?php echo $therapist["gender"]; ?></td>
                        <td><?php echo $therapist["nid"]; ?></td>
                        <td>
                          <a href="./all_therapists.php?delete=<?php echo $therapist["id"]; ?>" onclick="return confirm('Would you like to delete this doctor?')" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                          <a href="./edit_therapists.php?doctor=<?php echo $therapist["id"]; ?>" class="btn btn-success">Edit</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2020</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Cancel
            </button>
        <a class="nav-link" href="/yourheart'ssight/index.php?logout">
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  </body>
</html>

<?php ob_end_flush(); ?>