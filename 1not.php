<?php
session_start();
// if wala naka login para no error mo balik sa loginpage
if (!isset($_SESSION['userid'])) {
    header("location:facebok.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>home</title>
        <link rel="stylesheet" href="1.css" />
    </head>

    <body>
        <header>
            <h1 id="logo">progbook</h1>
            <div id="listheader1">



                <a href="1.php">home</a>
                <a href="">message</a>
                <a href="">histoy</a>
                <a href="">search</a>

                <?php
$status = "Active now";

include_once "database.php";
$sql = mysqli_query($connect, "SELECT * FROM account WHERE userid = '{$_SESSION['userid']}'");
$sql3 = "UPDATE account SET  status='$status' WHERE userid='{$_SESSION['userid']}'";
$result2 = mysqli_query($connect, $sql3);

if (mysqli_num_rows($sql) >
    0) {$row = mysqli_fetch_assoc($sql);}
$sql2 = "INSERT INTO history (fname,lname,img,status) VALUES ('{$row['fname']}', '{$row['lname']}', '{$row['img']}','$status')";
$result = mysqli_query($connect, $sql2);

?>
                <a href="#" id="profile">
                    <img src="profileimage/<?php echo $row['img'] ?>" alt="" id="homeprofile" />
                    <!-- <h1><?php echo $row['lname'] ?></h1> -->

                </a>
                <div id="divshow">
                    <a href="22.html" class="a">profile</a>
                    <a href="3.php" class="a">Edit profile</a>
                    <a href="" class="a">qr code</a>
                    <a href="" class="a">info</a>
                    <a href="#" class="a" id="logout">logout</a>

                </div>
            </div>
        </header>
        <main>
            <div class="box1"></div>
            <div class="box2"></div>
        </main>
    </body>
    <script>

        // // this is to get the information to the my phpadmin data
        // setInterval(function () {
        //     let xhr = new XMLHttpRequest();

        //     xhr.open("GET", "home2.php", true);
        //     xhr.onload = function () {
        //         if (xhr.readyState === XMLHttpRequest.DONE) {
        //             if (xhr.status === 200) {
        //                 let data = xhr.response;
        //                 console.log(data);
        //                 main2.innerHTML = data;

        //             }
        //         }
        //     };
        //     xhr.send();
        // }, 500);





        // logout function
        const logout = document.querySelector("#logout");
        logout.onclick = function(e){
            console.log("run");
            e.preventDefault();
            // window.location.replace("4.php");
            window.location.href = "4.php";


        }
    </script>
</html>
