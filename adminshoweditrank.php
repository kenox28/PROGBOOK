<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="adminhomepage.css" />
    </head>
    <style>

        #divtable {
            height: 350px;
            width: 1300px;
            border: #05fa05 solid 1px;
            overflow-y: auto;
            display: flex;
            flex-wrap: wrap;

        }

        #divtable::-webkit-scrollbar {
            display: none;
        }

        table {
            height: 400px;
            width: 1300px;
            }

        thead th {
            background-image: linear-gradient(
                to bottom,
                #05fa05,
                #27c72e,
                #329637,
                #356736,
                #303b30
            );
            padding: 10px;
        }

        tbody tr {
            height: 20px;
            background-image: linear-gradient(
                to bottom,
                #edeeed,
                #bec9be,
                #90a590,
                #658264,
                #3b603b
            );
            font-size: 1.2rem;
            margin: 5px;

        }

        tbody td {
            height: 20px;
            padding: 10px;
            vertical-align: middle;
            margin: 10px;
        }
        #delete{
            background-color: red;
            height: 30px;
            width: 30px;
            border-radius: 5px;
        }
        #edit{
            background-color: blue;
            height: 30px;
            width: 30px;
            border-radius: 5px;

        }
        #formeditrank{
            position: absolute;
            height: 600px;
            width: 600px;
            background-color: transparent;
            backdrop-filter: blur(20px);
            top: 50px;
            left: 35%;
            justify-self: center;
            display: flex;
            align-items: center;
            flex-direction: column;


        }
        #ranktochoose{
            height: 100px;
            width: 600px;
            display: flex;
            align-items: center;
            justify-content: space-evenly;


        }
        .editchoice{
            height: 30px;
            width: 30px;
        }
        #currentrank{
            height: 300px;
            width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <body>
        <header>
            <h1 id="logo">progbook</h1>
            <h1 id="page">All User</h1>
            <a href="#" id="adminprof">
                <img src="profileimage/pp.jpg" alt="" id="adminimg" />
            </a>
            <div id="hidden">
                <a href="">profile</a>
                <a href="">info</a>
                <a href="">logout</a>
            </div>
        </header>
        <section>
            <a class="btnsdie" href="adminhomepage.html"><i>img</i>homepage</a>
            <a class="btnsdie" href="adminranking.php"><i>img</i>ranking</a>
            <a class="btnsdie" href="adminuser.php"><i>img</i>user</a>

        </section>
        <div id="alldashboard">
            <main id="divtable">
                <table>
                    <thead>
                        <tr>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>Rank</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

include_once "database.php";

$sql3 = mysqli_query($connect, "SELECT * FROM ranking");

for ($i = 0; $userC = mysqli_fetch_assoc($sql3); $i++) {

    ?>
                        <tr>
                            <td><?php echo $userC['fname']; ?></td>
                            <td><?php echo $userC['lname']; ?></td>
                            <td><?php echo $userC['ranks']; ?></td>
                            <td id="edit"><a href="adminranking.php?rank_id=<?php echo $userC['rank_id']; ?>">edit</a></td>


                        </tr>

                        <?php
}?>
                    </tbody>
                </table>
            </main>
            <div>
                <form action="updaterank.php" id="formeditrank" method="POST">

                    <?php include "editranking.php"?>
                    <div>
                        <a href="adminranking.php">back</a>
                    </div>
                    <h1><?php echo $rankcolumn['fname'] . " " . $rankcolumn['lname'] ?></h1>
                    <div id="currentrank">
                        <h1><?php echo $rankcolumn['ranks'] ?></h1>
                    </div>

                    <div id="ranktochoose">
                        <input type="text" name="rank_id" value="<?php echo $rankcolumn['rank_id'] ?>" hidden>
                        <input type="radio" name="ranks" value="beginner" class="editchoice" id="beginner">
                        <label for="beginner">beginner</label>

                        <input type="radio" name="ranks" value="Intermediate" class="editchoice" id="Intermediate">
                        <label for="Intermediate">Intermediate</label>

                        <input type="radio" name="ranks" value="Advanced" class="editchoice" id="Advance">
                        <label for="Advance">Advance</label>

                        <input type="radio" name="ranks" value="expert" class="editchoice" id="expert">
                        <label for="expert">expert</label>

                    </div>
                    <input type="submit" id="" value="save">

                </form>
            </div>
            <?php
// $sql = mysqli_query($connect, "SELECT COUNT(*) AS total_users FROM account");
// $row = mysqli_fetch_assoc($sql);
// $total_users = $row['total_users'];

$sql2 = mysqli_query($connect, "SELECT COUNT(*) AS beginners FROM ranking WHERE ranks = 'beginner'");
$countResult1 = mysqli_fetch_assoc($sql2);
$beginners = $countResult1['beginners'];

$sql3 = mysqli_query($connect, "SELECT COUNT(*) AS Intermediate FROM ranking WHERE ranks = 'Intermediate'");
$countResult2 = mysqli_fetch_assoc($sql3);
$Intermediate = $countResult2['Intermediate'];

$sql4 = mysqli_query($connect, "SELECT COUNT(*) AS Advanced FROM ranking WHERE ranks = 'Advanced'");
$countResult3 = mysqli_fetch_assoc($sql4);
$Advanced = $countResult3['Advanced'];

$sql5 = mysqli_query($connect, "SELECT COUNT(*) AS expert FROM ranking WHERE ranks = 'expert'");
$countResult4 = mysqli_fetch_assoc($sql5);
$expert = $countResult4['expert'];

?>

            <div id="alldiv">
                <div class="divact">
                    <h1 id="titleactive">beginners user</h1>
                    <h1 id="numberactive"><?php echo $beginners ?></h1>
                </div>
                <div class="divact">
                    <h1 id="titleactive">Intermediate user</h1>
                    <h1 id="numberactive"><?php echo $Intermediate ?></h1>
                </div>
                <div class="divact">
                    <h1 id="titleactive">Advanced user</h1>
                    <h1 id="numberactive"><?php echo $Advanced ?></h1>
                </div>
                <div class="divact">
                    <h1 id="titleactive">expert user</h1>
                    <h1 id="numberactive"><?php echo $expert ?></h1>
                </div>
            </div>
        </div>

    </body>
</html>
