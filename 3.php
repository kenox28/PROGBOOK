<?php
session_start();
// if wala naka login para no error mo balik sa loginpage
if (!isset($_SESSION['userid'])) {
    header("location:facebok.php");

}
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Edit</title>
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
                <a href="1f.html"><i class="fa fa-house"></i></a>
                <a href=""><i class="fa-regular fa-envelope"></i></a>
                <a href="5.html"><i class="fa-solid fa-user-check"></i></a>
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
            <div id="divprofile" style="display: flex; flex-direction: column">
                <div
                    style="
                        height: 250px;
                        width: 900px;
                        border: 1px solid black;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;

                    ">
                <?php include "header.php"?>
                    <img
                        src="profileimage/<?php echo $userCname['img'] ?>"
                        alt="profile"
                        id="profilepagep" />
                    <h1><?php echo $userCname['fname'] . " " . $userCname['lname'] ?></h1>
                </div>
                <div class="editdiv"
                    style="
                        display: flex;
                        height: 250px;
                        width: 900px;
                        border: 1px solid red;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    ">
                    <form
                        action="#"
                        id="EditForm"
                        enctype="multipart/form-data">
                        <div class="divinput" id="fnamediv">
                            <input
                                type="text"
                                name="firstname"
                                id="firstname"
                                class="fulln"
                                placeholder="First name" />
                            <input
                                type="text"
                                name="lastname"
                                id="lastname"
                                class="fulln"
                                placeholder="last name" />
                        </div>
                        <div class="divinput" id="Userdiv">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="insidediv"
                                placeholder="Enter email account" />
                        </div>
                        <div class="divinput" id="Passdiv">
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="insidediv"
                                placeholder="Enter password" />
                        </div>
                        <div class="divinput" id="numberdiv">
                            <input
                                type="number"
                                name="number"
                                id="number"
                                class="insidediv"
                                placeholder="Enter number" />
                        </div>
                        <div class="imagediv" id="imagediv">
                            <div class="divgender">
                                <input type="date" id="dateb" name="bday" />

                                <input
                                    type="radio"
                                    value="MALE"
                                    id="MALE"
                                    name="gender"
                                    class="radio" />
                                <label for="MALE">Male</label>

                                <input
                                    type="radio"
                                    id="FEMALE"
                                    value="FEMALE"
                                    name="gender"
                                    class="radio" />
                                <label for="FEMALE">Female</label>
                            </div>
                            <div class="divMG">
                                <label for="idimage" id="labelIMG"
                                    >Select Profile</label
                                >
                                <input type="file" id="idimage" name="img" />
                            </div>
                        </div>
                        <div class="divinput">
                            <button type="submit" id="saveEdit">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
    <script>
            const saveEdit = document.querySelector("#saveEdit");
            const EditForm = document.querySelector("#EditForm");
            EditForm.onsubmit = function (e) {
            e.preventDefault();
            };
            saveEdit.onclick = function (e) {
            // console.log("hello");
            e.preventDefault();

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "3e.php", true);
            xhr.onload = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        console.log(data)
                        // if (data === "success") {
                        //     location.href="homeActive.php";
                        // }
                    }
                }
            };
            let formdatainputed = new FormData(EditForm);
            xhr.send(formdatainputed);
        };



        const logout = document.querySelector("#logout");
        logout.onclick = function(e){
            console.log("run");
            e.preventDefault();
            // window.location.replace("4.php");
            window.location.href = "4.php";

        }
    </script>
</html>
