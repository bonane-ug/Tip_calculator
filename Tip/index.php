<?php
// include("./includes/calculate.php");
include("./includes/save.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tip Calculate </title>

    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="tip">
        <!-- designing the calculator -->
        <div class="tip_container">
            <h2> Tip Calculator </h2>
            <p style="text-align: center; color: red"><?php echo $Error_save?></p>

            <form action="" method="post">
                <div class="inputs">
                    <input type="text" name="bill" id="bill" placeholder="Enter bill" autocomplete="off"><br>
                    <p><?php echo $Error_bill ?></p>
                    <input type="text" name="percent" id="percent" placeholder="Enter Tip Percentage " autocomplete="off">
                    <p><?php echo $Error_percent?></p>
                </div>

                <div class="result">
                    <p> Tip is: <?php echo $Tip_result?> </p>
                </div>

                <div class="btn">
                    <input type="submit" value="Calculate" name="calculate" id="Calculate" style="background: dodgerblue;">
                    <input type="submit" value="Save" name="save">
                </div>
            </form>
        </div>


        <div class="saved_tips">
            <h2> Saved Data </h2>
            <table>
                <thead>
                    <td> Bill </td>
                    <td> Percentage</td>
                    <td> Tip </td>
                    <td> Date </td>
                    <td> Action </td>
                </thead>

                <tbody style="margin-top: 200px;">
                    <?php

                        $sql1 = mysqli_query($conn, "SELECT * FROM `save`");

                        while ($row = mysqli_fetch_assoc($sql1)) {
                            $db_id = $row["id"];
                            $db_bill = $row["bill"];
                            $db_perc = $row["percentage"];
                            $db_tip = $row["tip"];
                            $db_date = $row["date"];


                            //encrypting the url 
                            $encrypt = ($db_id*2*45678);
                            $url = "./includes/delete.php?id=".urlencode(base64_encode($encrypt));



                            echo "
                                <tr>
                                    <td> $db_bill </td>
                                    <td> $db_perc </td>
                                    <td> $db_tip </td>
                                    <td> $db_date </td>
                                    <td><a href='$url'> Delete </a></td>
                                </tr>
                            ";
                        }
                ?>
                </tbody>
            </table>

            <div class="total">
                <?php
                  $sql2 = mysqli_query($conn, "SELECT SUM(bill) as bill_sum from save");
                  $row2 = mysqli_fetch_assoc($sql2);

                  $sum = $row2["bill_sum"];
                ?>
                <p> Bills Total </p>
                <p><?php echo $sum ?></p>
            </div>
        </div>
    </div>






    <script src="./assets/js/js.js"></script>
</body>

</html>