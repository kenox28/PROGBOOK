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
                <a href="6.html"
                    ><i class="fa-solid fa-magnifying-glass"></i
                ></a>
            </div>
            <div id="listheader1">
                <a href="1.php"><i class="fa fa-house"></i></a>
                <a href="8.php?userid=<?php echo $_SESSION['userid']; ?>"><i class="fa-regular fa-envelope"></i></a>
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

            <div class="box1">
                <form action="#" class="postfeed" id="postfeed" enctype="multipart/form-data">
                    <label for="captadd" id="captaddlabel"
                        >WHATS ON YOUR CODE</label
                    >
                    <input
                        type="text"
                        id="captadd"
                        name="cappost"
                        placeholder="Write your code" />
                    <input type="file" name="imgpost" id="idimage" />
                    <input type="submit" value="POST" id="captbtn" />
                </form>

                <?php include "showallPOST.php"?>

            </div>
            <div class="box2">
                <?php include "showaluser.php"?>
            </div>
        </main>
    </body>
    <script>


        // post a code of in news feed

        const btnPost = document.querySelector("#captbtn");
        const postForm = document.querySelector("#postfeed");

        postForm.onsubmit = function (e) {
            e.preventDefault();
        };
        btnPost.onclick = function (e) {
            // console.log("hello");
            e.preventDefault();
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "postcode.php", true);
            xhr.onload = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        const data = xhr.response;
                        console.log(data)
                        // if (data === "success") {
                        //     location.href="homeActive.php";
                        // }
                    }
                }
            };
            let formdatainputed = new FormData(postForm);
            xhr.send(formdatainputed);
        };




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
        logout.onclick = function (e) {
            console.log("run");
            e.preventDefault();
            // window.location.replace("4.php");
            window.location.href = "4.php";
        };



    </script>
</html>
