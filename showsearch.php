<?php
include_once "database.php";
$searchinputed = mysqli_real_escape_string($connect, $_GET['searchterm']);
$sql = mysqli_query($connect, "SELECT * FROM account WHERE fname LIKE '%{$searchinputed}%' OR lname LIKE '%{$searchinputed}%'");
if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_assoc($sql)) {
        ?>
                <div class="divActive">
                    <a href="#" class="clickuser">
                        <img src="profileimage/pp.jpg" alt="" class="homeprofile" />
                        <h1 id="homename">IQUEN MARBA</h1>
                        <div id="activediv"></div>
                    </a>
                </div>
            <?php
}
} else {
    ?>
        <div class="divActive">
            <p>No results found.</p>
        </div>
        <?php
}

?>