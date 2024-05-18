<?php
session_start();
include_once "database.php";
$cappost = mysqli_real_escape_string($connect, $_POST['cappost']);
$imgpost = $_FILES['imgpost']['name'];
$tempimage = $_FILES['imgpost']['tmp_name'];
$folder = 'profileimage/' . $imgpost;
move_uploaded_file($tempimage, $folder);

$sql = mysqli_query($connect, "SELECT * FROM account WHERE userid = '{$_SESSION['userid']}'");
if (mysqli_num_rows($sql) > 0) {

    $row = mysqli_fetch_assoc($sql);
    $sql2 = mysqli_query($connect, "INSERT INTO newsfeed (fname,lname,img1,cappost,imgpost)VALUES('{$row['fname']}','{$row['lname']}','{$row['img']}','$cappost','$imgpost')");
    echo "run";

}
