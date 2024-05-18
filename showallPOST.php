<?php

include_once "database.php";

$sql4 = mysqli_query($connect, "SELECT * FROM newsfeed");

for ($x = 0; $row3 = mysqli_fetch_assoc($sql4); $x++) {

    ?>
                <div id="allpost">
                    <div class="feedname">
                        <img
                            src="profileimage/<?php echo $row3['img1'] ?>"
                            alt=""
                            class="homeprofile" />
                        <h1 id="Postname"><?php echo $row3['fname'] . " " . $row3['lname'] ?></h1>
                    </div>
                    <div class="Postcaption">
                        <p id="Postcaption">
                            <?php echo $row3['cappost'] ?>
                        </p>
                    </div>
                    <div class="postpic">
                        <img src="profileimage/<?php echo $row3['imgpost'] ?>" alt="" id="postpic" />
                    </div>
                </div>
        <?php
}?>