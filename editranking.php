<?php
include "database.php";
$getrank_id = mysqli_real_escape_string($connect, $_GET['rank_id']);

$sql = "SELECT * FROM ranking WHERE rank_id = '{$getrank_id}'";
$result = mysqli_query($connect, $sql);

$rankcolumn = mysqli_fetch_assoc($result);
