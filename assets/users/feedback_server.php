<?php
$db = mysqli_connect('localhost', 'root', '', 'test'); //host, username, password, DB name
if (!isset($_SESSION)) {
  session_start();
}
//
$error = array();
if (isset($_POST['submit'])) {
  $data['feedback']  = mysqli_real_escape_string($db, $_POST['feedback']);
  $data['rate'] = mysqli_real_escape_string($db, $_POST['rate']);
  $data['patient_id'] = $_SESSION['id'];
  $data['therapist_id'] = mysqli_real_escape_string($db, $_GET['therapist_id']);
  $data['reservations_id'] = mysqli_real_escape_string($db, $_GET['reservations_id']);
  $query = "INSERT INTO feedbacks (feedback,rate,patient_id,therapist_id,reservations_id) VALUES ('".$data['feedback']."','".$data['rate']."','".$data['patient_id']."','".$data['therapist_id']."','".$data['reservations_id']."')";
  if (mysqli_query($db, $query)) {

    

  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
  }
}
