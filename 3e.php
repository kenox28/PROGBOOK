<?php
session_start();
include_once "database.php";

$nfname = mysqli_real_escape_string($connect, $_POST['firstname']);
$nlname = mysqli_real_escape_string($connect, $_POST['lastname']);
$nemail = mysqli_real_escape_string($connect, $_POST['email']);
$npassword = mysqli_real_escape_string($connect, $_POST['password']);
$ngender = mysqli_real_escape_string($connect, $_POST['gender']);
$ndateb = mysqli_real_escape_string($connect, $_POST['bday']);
$number = mysqli_real_escape_string($connect, $_POST['number']);

if (isset($_FILES['img'])) {
    $nimg = $_FILES['img']['name'];
    $tempimage = $_FILES['img']['tmp_name'];
    $folder = 'profileimage/' . $nimg;
    move_uploaded_file($tempimage, $folder);
}

$sql1 = "UPDATE account SET fname='$nfname', lname='$nlname', email='$nemail', password='$npassword', img='$nimg', gender='$ngender', bdate='$ndateb', dateadded=NOW(), number='$number' WHERE userid='{$_SESSION['userid']}'";
$result = mysqli_query($connect, $sql1);

if ($result) {
    // Update successful
    // Redirect or display a success message
} else {
    // Update failed
    // Handle error case
}
