<?php
    include("db.php");

    if(isset($_GET["id"])){

        //bill id from encryption 
        foreach($_GET as $key => $user_id)
        $datas = $_GET[$key] = base64_decode(urldecode($user_id));

        $delete_id = ((($datas)/45678)/2);

        mysqli_query($conn, "Delete from save where id = $delete_id");
        header("location: ../index.php");
    };
?>