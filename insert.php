<?php

session_start();
$uname = $_SESSION['user'];
$msg = $_REQUEST['msg'];

require_once "connect.php";
$connect = new mysqli($host, "$db_user", "$db_password", "$db_name");

if (mysqli_connect_errno($connect)) {
    echo "ERROR DB: " . mysqli_connect_error();
} else {

    $msg = htmlentities($msg);

    $connect->query("INSERT INTO logs VALUES ('NULL','$uname','$msg')");


    $sql = "SELECT username,msg FROM logs ORDER BY id DESC";
    $result = mysqli_query($connect, $sql);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<div class='post-element-cnt'>
            <div class='post-element-user'>" . $row['username'] . ":</div>
            <div class='post-element-msg'>" . $row['msg'] . "</div>
         </div><hr>";

    }


    mysqli_free_result($result);
    mysqli_close($connect);

}
?>