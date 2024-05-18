<?php

session_start();
include "database.php";
// $image1 = $_FILES['image']['name'];
// $tempimage = $_FILES['image']['tmp_name'];
// $folder = 'imageuploaded/'.$image1;
$fname = mysqli_real_escape_string($connect, $_POST['firstname']);
$lname = mysqli_real_escape_string($connect, $_POST['lastname']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$gender = mysqli_real_escape_string($connect, $_POST['gender']);
$dateb = mysqli_real_escape_string($connect, $_POST['bday']);

// $img = mysqli_real_escape_string($connect, $_FILES['img']['name']);
// $tempimage = mysqli_real_escape_string($connect, $_FILES['img']['tmp_name']);

// $folder = 'imageuploaded/' . $image1;

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($gender) && !empty($dateb)) {
    // echo "$fname $lname $email $password $gender $dateb"
    if (isset($_FILES['img'])) {
        $img = $_FILES['img']['name'];
        $tempimage = $_FILES['img']['tmp_name'];
        $folder = 'profileimage/' . $img;
        move_uploaded_file($tempimage, $folder);
        $userid = rand(time(), 1000);
        // $sql = mysqli_query($connect, "INSERT INTO account(userid, fname, lname, email, password, img, gender, bdate)VALUES('{$userid}','{$fname}','{$lname}','{$email}','{$password}','{$img}','{$gen}','{$dateb}')");
        $sql1 = "INSERT INTO account (userid, fname, lname, email, password, img, gender, bdate) VALUES ('$userid', '$fname', '$lname', '$email', '$password', '$img', '$gender', '$dateb')";

        $result = mysqli_query($connect, $sql1);

        $beginner = "beginner";

        $ranking = "INSERT INTO ranking(rank_id,fname,lname,ranks)VALUES('$userid','$fname','$lname','$beginner')";
        $resultR = mysqli_query($connect, $ranking);

        if ($sql1) {
            $sql2 = mysqli_query($connect, "SELECT * FROM account WHERE email = '{$email}'");
            if (mysqli_num_rows($sql2) > 0) {
                $row = mysqli_fetch_assoc($sql2);

                $_SESSION['userid'] = $row['userid'];

                // $userid = $row['userid'];
                // $fname = $row['fname'];
                // $lname = $row['lname'];

                //sorry mahal para nis future nato yieee
                // echo "success";

            }

        }

    } else {
        echo "failed";
    }
    ;

}
