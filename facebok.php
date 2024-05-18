<?php
session_start();
// if wala naka login para no error mo balik sa loginpage
if (isset($_SESSION['userid'])) {
    header("location:1.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: geometric, sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            height: 500px;
            flex-wrap: wrap;
            justify-content: center;
            background-color: aliceblue;

            gap: 100px;
            width: 100%;
        }
        #box1 {
            height: 400px;
            width: 500px;
            justify-content: center;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            font-size: 3.8rem;
            color: #166fe5;
            width: 390px;
        }
        h2 {
            font-size: 1.6rem;
            width: 430px;
            font-weight: 500;
            letter-spacing: 1px;
            display: flex;
            justify-content: center;
            margin-left: 30px;
        }
        #box2 {
            height: 500px;
            width: 500px;
            background-color: aliceblue;
            margin-top: 100px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        form {
            background-color: #fff;
            height: 380px;
            width: 380px;
            margin-bottom: 50px;
            display: flex;
            align-items: center;

            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            flex-direction: column;
        }
        input {
            height: 50px;
            width: 350px;
            border-radius: 8px;
            margin: 8px;
            border: 1px gray solid;
            outline-color: #166fe5;
            font-size: 1rem;
            padding-left: 10px;
        }
        #username {
            margin-top: 20px;
        }
        #loginbtn {
            background-color: #166fe5;
            color: aliceblue;
            font-weight: 600;
            font-size: 1.3rem;
        }
        a {
            height: 40px;
            width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            font-size: 0.9rem;
            color: #166fe5;
        }
        hr {
            width: 350px;
            display: flex;
            margin: 10px;
            justify-content: center;
            align-items: center;
        }
        button {
            margin: 20px;
            height: 55px;
            width: 210px;
            background-color: #36a420;
            border-radius: 5px;
            border: 0;
            color: aliceblue;
            font-weight: 600;
            font-size: 1.1rem;
        }
    </style>
    <body>
        <div id="box1">
            <h1>facebook</h1>
            <h2>Connect with friends and the world around you on Facebook.</h2>
        </div>
        <div id="box2">
            <form action="#" enctype="multipart/form-data">
                <input
                    type="email"
                    name="email"
                    id="username"
                    placeholder="Email or phone number" />
                <input
                    type="password"
                    name="password"
                    id="passsword"
                    placeholder="Password" />
                <input type="submit" value="Log in" id="loginbtn" />
                <a href="#">Forgot password?</a>
                <hr />
                <button id="create">Create new account</button>
            </form>
            <p>Create a Page for a celebrity, brand or business.</p>
        </div>
    </body>
    <script>
        const create = document.querySelector('#create')
        const form = document.querySelector("form");
        const btn = form.querySelector("#loginbtn");
        create.onclick = function gocreate(e){
            e.preventDefault();
            window.location.href = "createfacebook.html";

        }

        form.onsubmit = function sendajax(e) {
            e.preventDefault();
        };
        btn.onclick = function send(e) {
            // console.log('hello');
            e.preventDefault();
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "facebookchat.php",true);
            xhr.onload = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        // console.log(data)
                        if(data === 'success'){
                            location.href = "1.php"
                        }
                    }
                }
            };
            let formdatainputed = new FormData(form);
            xhr.send(formdatainputed);
        };
    </script>
</html>
