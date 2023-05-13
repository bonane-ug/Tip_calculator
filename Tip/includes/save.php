<?php 
    include("calculate.php");
    include("db.php");
    $Error_save = "";

    if(isset($_POST["save"])){

        if(isset($_SESSION["bill"])){
            $save_bill = $_SESSION["bill"];
            $save_perc = $_SESSION["perc"];
            $save_tip = $_SESSION["tip"];

            $sql = mysqli_query($conn, "INSERT INTO `save` (`bill`, `percentage`, `tip`, `date`) VALUES($save_bill, $save_perc, $save_tip, now())");
        }else{
            $Error_save = "Nothing to save";
        }
    
    }
?>