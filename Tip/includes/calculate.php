<?php
    // include("./save.php");
    session_start();

    $Error_bill = "";
    $Error_percent = "";
    $Tip_result = "";

    if(isset($_POST["calculate"])) {

        //selecting data from inputs
        $bill = $_POST["bill"];
        $percent = $_POST["percent"];

        if(!empty($bill)){
            if(!empty($percent)){
                
                //calculating the tip
                $Tip_result = $bill / 100 * $percent;
                $_SESSION["bill"] = $bill;
                $_SESSION["perc"] = $percent;
                $_SESSION["tip"] = $Tip_result;

            }else{
                $Error_percent = "Percent can not be empty";
            }
        }else{
            $Error_bill = "Ammount can not be empty";
        }
    }
?>