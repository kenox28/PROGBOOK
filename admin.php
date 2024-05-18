<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>home</title>
        <link rel="stylesheet" href="2.css" />
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
                <a href="8.php"><i class="fa-regular fa-envelope"></i></a>
                <a href="5.php"><i class="fa-solid fa-user-check"></i></a>
            </div>
            <div id="idprodiv">
                <a href="#" id="profile">
                    <img src="profileimage/pp.jpg" alt="" id="homeprofile" />
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
            <div class="aside">
                <button id="aa">All user</button>
                <button id="sa">Active</button>
                <button id="so">offline</button>
                <button id="sb">beginner</button>
                <button id="si">beginner</button>
                <button id="se">beginner</button>
                <button id="st">teacher</button>
                <button id="ss">student</button>
            </div>
            <div class="box1" id="box1">
                <?php include "showaluser.php"?>
            </div>
            <div class="box2" id="box2">
                <div class="activeuser">
                    <a href="" class="clickuser">
                        <img
                            src="profileimage/pp.jpg"
                            alt=""
                            class="homeprofile" />
                        <div class="showname">
                            <h1 class="actname">Iquen Marba</h1>
                        </div>
                        <div class="showstat">
                            <p>Active now</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="box3" id="box3">
                <div class="activeuser">
                    <a href="" class="clickuser">
                        <img
                            src="profileimage/pp.jpg"
                            alt=""
                            class="homeprofile" />
                        <div class="showname">
                            <h1 class="actname">Iquen Marba</h1>
                        </div>
                        <div class="showstat">
                            <p>Active now</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="box4" id="box4">
                <?php include "ranking.php"?>
            </div>
            <div class="box5" id="box5">
                <div class="activeuser">
                    <a href="" class="clickuser">
                        <img
                            src="profileimage/pp.jpg"
                            alt=""
                            class="homeprofile" />
                        <div class="showname">
                            <h1 class="actname">Iquen Marba</h1>
                        </div>
                        <div class="showstat">
                            <p>Active now</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="box6" id="box6">
                <div class="activeuser">
                    <a href="" class="clickuser">
                        <img
                            src="profileimage/pp.jpg"
                            alt=""
                            class="homeprofile" />
                        <div class="showname">
                            <h1 class="actname">Iquen Marba</h1>
                        </div>
                        <div class="showstat">
                            <p>Active now</p>
                        </div>
                    </a>
                </div>
            </div>
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
        logout.onclick = function (e) {
            console.log("run");
            e.preventDefault();
            // window.location.replace("4.php");
            window.location.href = "4.php";
        };
        const sa = document.querySelector("#sa");
        const so = document.querySelector("#so");
        const sr = document.querySelector("#sr");
        const st = document.querySelector("#st");
        const ss = document.querySelector("#ss");
        const aa = document.querySelector("#aa");
        let box1 = document.getElementById("box1");
        let box2 = document.getElementById("box2");

        let box3 = document.getElementById("box3");
        let box4 = document.getElementById("box4");
        let box5 = document.getElementById("box5");
        let box6 = document.getElementById("box6");
        box1.style.width = "400px";

        aa.onclick = function (e) {
            console.log("hello");
            e.preventDefault();
            box1.style.width = "400px";
            box2.style.width = "100px";
            box3.style.width = "100px";
            box4.style.width = "100px";
            box5.style.width = "100px";
            box6.style.width = "100px";
        };
        sa.onclick = function (e) {
            console.log("hello");
            e.preventDefault();
            box1.style.width = "100px";
            box2.style.width = "400px";
            box3.style.width = "100px";
            box4.style.width = "100px";
            box5.style.width = "100px";
            box6.style.width = "100px";
        };
        so.onclick = function (e) {
            console.log("hello");
            e.preventDefault();
            box1.style.width = "100px";
            box2.style.width = "100px";
            box3.style.width = "400px";
            box4.style.width = "100px";
            box5.style.width = "100px";
            box6.style.width = "100px";
        };
        sr.onclick = function (e) {
            console.log("hello");
            e.preventDefault();
            box1.style.width = "100px";
            box2.style.width = "100px";
            box3.style.width = "100px";
            box4.style.width = "400px";
            box5.style.width = "100px";
            box6.style.width = "100px";
        };
        st.onclick = function (e) {
            console.log("hello");
            e.preventDefault();
            box1.style.width = "100px";
            box2.style.width = "100px";
            box3.style.width = "100px";
            box4.style.width = "100px";
            box5.style.width = "400px";
            box6.style.width = "100px";
        };
        ss.onclick = function (e) {
            console.log("hello");
            e.preventDefault();
            box1.style.width = "100px";
            box2.style.width = "100px";
            box3.style.width = "100px";
            box4.style.width = "100px";
            box5.style.width = "100px";
            box6.style.width = "400px";
        };
    </script>
</html>
