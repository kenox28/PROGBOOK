<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="create1.css" />
    </head>
    <body>
        <form action="#" id="logForm" enctype="multipart/form-data">
            <div class="divinput">
                <h1>CREATE ACCOUNT</h1>
            </div>
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
                    <input type="file" id="idimage" name="img" />
            </div>

            <div class="divinput" id="divcreatebtn">
            <button type="submit" id="login">login</button>
            </div>
            <div class="divX" id="">
                <p class="emailX" id="emailX">please enter an email account</p>
                <p class="emailT" id="emailT">
                    email is taken please try again
                </p>
                <p class="passX" id="passX">
                    password is in correct please try again
                </p>
            </div>
            <hr />
            <div id="linklog">
                <label for="golog">Already have an account</label>
                <a href="facebok.php" id="golog">login</a>
            </div>
        </form>
    </body>
    <script>
        const login = document.querySelector("#login");
        const logForm = document.querySelector("#logForm");

        // to display error if wrong or taken
        let emailT = document.querySelector(".emailT");
        let emailX = document.querySelector(".emailX");
        let passX = document.querySelector(".passX");
        emailX.style.display = "none";
        emailT.style.display = "none";
        passX.style.display = "none";

        // let emailT = document.querySelector(".emailT");
        // let emailX = document.querySelector(".emailX");
        // let passX = document.querySelector(".passX");
        logForm.onsubmit = function (e) {
            e.preventDefault();
        };

        login.onclick = function (e) {
            // console.log("hello");
            e.preventDefault();
            // let firstname = document.querySelector("#firstname").value;
            // let lastname = document.querySelector("#lastname").value;
            // let email = document.querySelector("#email").value;
            // let password = document.querySelector("#password").value;
            // let gender = document.querySelector(".radio").value;
            // let dateb = document.querySelector("#dateb").value;

            // console.log(firstname);
            // console.log(lastname);
            // console.log(email);
            // console.log(password);
            // console.log(gender);
            // console.log(dateb);

            // // let emailT = document.querySelector(".emailT");
            // // let emailX = document.querySelector(".emailX");
            // // let passX = document.querySelector(".passX");
            // emailT.style.display = "block";
            // // emailX.style.display = "block";

            // setTimeout(function () {
            //     emailT.style.display = "none";
            // }, 3000);

            // console.log("run");

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "createacc.php", true);
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
            let formdatainputed = new FormData(logForm);
            xhr.send(formdatainputed);
        };
    </script>
</html>
