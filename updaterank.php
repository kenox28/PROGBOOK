<?php
include "database.php";
$rank_id = mysqli_real_escape_string($connect, $_POST['rank_id']);
$updatedRank = mysqli_real_escape_string($connect, $_POST['ranks']);
// "UPDATE account SET fname='$nfname', lname='$nlname', email='$nemail', password='$npassword'
// ,img='$nimg', gender='$ngender', bdate='$ndateb', dateadded=NOW(), number='$number' WHERE userid='{$_SESSION['userid']}'";

$sql = mysqli_query($connect, "UPDATE ranking SET ranks = '$updatedRank' WHERE rank_id = '{$rank_id}'");

if ($sql) {
    ?>

    <script>
        alert("succes")

    </script>

<?php
}
?>
