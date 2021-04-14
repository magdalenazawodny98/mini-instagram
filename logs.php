<?php

require_once "connect.php";
$con = new mysqli($host, $db_user, "$db_password", "$db_name");

if (mysqli_connect_errno($con)) {
    echo "ERROR DB: " . mysqli_connect_error();
}


$sql = "SELECT username,msg FROM logs ORDER BY id DESC";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<div class='post-element-cnt'>
            <div class='post-element-user'>" . $row['username'] . ":</div>
            <div class='post-element-msg'>" . $row['msg'] . "</div>
         </div><hr>";
}


mysqli_free_result($result);
mysqli_close($con);

?>