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
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer" />
    </head>

    <body>
        <header>
            <h1 id="logo">progbook</h1>
            <div id="idsearchdiv">
            <!-- <form method="GET" action="showsearch.php">
                <input type="text" name="searchterm" placeholder="Search..." />
                <button type="submit">Search</button>
            </form>

                <div id="showusersearch">

                    <?php include "showsearch.php"?>
                </div> -->
            </div>
            <div id="listheader1">
                <a href="1.php"><i class="fa fa-house"></i></a>
                <a href="8.php"><i class="fa-regular fa-envelope"></i></a>
                <a href="5.php"><i class="fa-solid fa-user-check"></i></a>
            </div>
            <div id="idprodiv">
                <?php include "header.php"?>

                <a href="#" id="profile">
                    <img src="profileimage/<?php echo $userCname['img'] ?>" alt="" id="homeprofile" />
                </a>

                <div id="divshow">
                    <a href="3.php" class="a">profile</a>
                    <a href="#" class="a">Edit profile</a>
                    <a href="" class="a">qr code</a>
                    <a href="" class="a">info</a>
                    <a href="#" class="a" id="logout">logout</a>
                </div>
            </div>
        </header>
        <main>
            <div class="box2">
                <?php include "selectallACTIVE.php"?>
            </div>
            <div id="messagediv">
                <?php include "selectchat.php"?>
                <div class="chatheader">
                    <a href="">
                        <img
                            src="profileimage/<?php echo $selectCname['img'] ?>"
                            alt=""
                            class="homeprofile" />
                    </a>
                    <h1 class="actname"><?php echo $selectCname['fname'] . " " . $selectCname['lname'] ?></h1>
                    <p><?php echo $selectCname['status'] ?></p>
                </div>
                <div class="convodiv" id="convodiv">

                </div>
                <footer class="footerchat">
                    <form action="#" id="chatform" class="sendform" enctype="multipart/form-data" autocomplete="off">
                        <input type="text" name="sender" value="<?php echo $_SESSION['userid'] ?>" hidden>
                        <input type="text" name="reciever" value="<?php echo $selectCname['userid'] ?>" hidden>
                        <input
                            type="text"
                            name="message"
                            class="sendmessage"
                            id="messageinput"
                            placeholder="Message..." />
                        <button type="submit" id="sendbtn">send</button>
                    </form>
                </footer>
            </div>
        </main>
    </body>
    <script>
        // post a code of in news feed
        const postForm = document.querySelector("#chatform");

        const btnPost = postForm.querySelector("#sendbtn");
        const messageinput = postForm.querySelectorAll("#messageinput");
        convodiv = document.querySelector('#convodiv');

        postForm.onsubmit = function (e) {
            e.preventDefault();
        };
        btnPost.onclick = function (e) {
            // console.log("hello");
            e.preventDefault();
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "chatmessage.php", true);
            xhr.onload = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        messageinput[0].value="";

                    }
                }
            };
            let formdatainputed = new FormData(postForm);
            xhr.send(formdatainputed);
        };



        setInterval(function () {
            let xhr = new XMLHttpRequest();

            xhr.open("POST", "convo.php", true);
            xhr.onload = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        console.log(data);
                        convodiv.innerHTML = data;


                    }
                }
            };
            let formdatainputed = new FormData(postForm);
            xhr.send(formdatainputed);
        }, 500);

        // logout function
        const logout = document.querySelector("#logout");
        logout.onclick = function (e) {
            console.log("run");
            e.preventDefault();
            // window.location.replace("4.php");
            window.location.href = "4.php";
        };
    </script>
</html>
