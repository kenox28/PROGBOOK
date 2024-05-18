<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="adminhomepage.css" />
    </head>
    <style>
        #alldashbord{
        }
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
        <div id="alldashbord">
            <main id="divtable">
                <!-- <form action="" style="height: 10px; width:300px; position:fixed;">
                    <input type="text">
                </form> -->
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>password</th>
                            <th>delete</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

include_once "database.php";

$sql3 = mysqli_query($connect, "SELECT * FROM account");

for ($i = 0; $userC = mysqli_fetch_assoc($sql3); $i++) {

    ?>
                        <tr>
                            <td><?php echo $userC['userid']; ?></td>
                            <td><?php echo $userC['fname']; ?></td>
                            <td><?php echo $userC['lname']; ?></td>
                            <td><?php echo $userC['email']; ?></td>
                            <td><?php echo $userC['password']; ?></td>
                            <td id='delete'>delete</td>
                            <td id='edit'>edit</td>
                        </tr>

                    <?php
}?>
                    </tbody>
                </table>
            </main>
            <?php
$sql = mysqli_query($connect, "SELECT COUNT(*) AS total_users FROM account");
$row = mysqli_fetch_assoc($sql);
$total_users = $row['total_users'];

$sql5 = mysqli_query($connect, "SELECT COUNT(*) AS ACTIVE FROM account WHERE status = 'Active now'");
$countResult = mysqli_fetch_assoc($sql5);
$ACTIVE = $countResult['ACTIVE'];

$sql5 = mysqli_query($connect, "SELECT COUNT(*) AS Offline FROM account WHERE status = 'Offline'");
$countResult = mysqli_fetch_assoc($sql5);
$Offline = $countResult['Offline'];

?>

            <div id="alldiv">
                <div class="divact">
                    <h1 id="titleactive">All user</h1>
                    <h1 id="numberactive"><?php echo $total_users ?></h1>
                </div>
                <div class="divact">
                    <h1 id="titleactive">Active user</h1>
                    <h1 id="numberactive"><?php echo $ACTIVE ?></h1>
                </div>
                <div class="divact">
                    <h1 id="titleactive">Offline user</h1>
                    <h1 id="numberactive"><?php echo $Offline ?></h1>
                </div>

            </div>
        </div>
    </body>
</html>
