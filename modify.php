<?php

require("config.php");

$id = $_GET['id'];

$showquery="select * from reminder where id='$id'";

$showdata = mysqli_query($con, $showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
    $idupdate = $id;
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $email=$_POST['email'];
    $contactNo=$_POST['contactNo'];
    $smsNo=$_POST['smsNo'];

    $updatequery="update reminder set id='$id', date='$date', subject='$subject', description='$description', email='$email', contactNo='$contactNo', smsNo='$smsNo' where id='$idupdate'";
    $res=mysqli_query($con, $updatequery);
    if($res){
        ?>
        <script>
            alert("reminder is modified properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("reminder is not modified properly");
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        /* Basic CSS styling */
        body {
            font-family: Arial, sans-serif;
        }

        .box {
            margin-top: 1%;
            width: 100%;
            height: 98vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .checkbox-group {
            margin-top: 10px;
        }

        .checkbox-label {
            display: inline-block;
            margin-right: 10px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
        .button1{
            margin-top: 15px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
      
    </style>
</head>

<body>
    <div class="box">
        <div class="form-container">
            <h2>Set Reminder </h2>
            <form id="reminder-form" action="modify.php?id=<?php echo $id; ?>;" method="post">
                <label for="date">Select a Date:</label>
                <input type="text" id="date" value="<?php echo $arrdata['date']; ?>" name="date">

                <label for="subject">Subject:</label>
                <input type="date" id="date" value="<?php echo $arrdata['subject']; ?>" name="subject">

                <label for="description">Add Description:</label>
                <textarea id="description" name="description" rows="4" required><?php echo $arrdata['description']; ?></textarea>

                <label for="email">Email Address:</label>
                <input type="text" id="email" value="<?php echo $arrdata['email']; ?>" name="email">

                <label for="contactNo">Contact No:</label>
                <input type="text" id="contactNo" value="<?php echo $arrdata['contactNo']; ?>" name="contactNo">

                <label for="smsNo">SMS No:</label>
                <input type="text" id="smsNo" value="<?php echo $arrdata['smsNo']; ?>" name="smsNo">

                <div class="button1">
                    <button type="submit" name="submit" class="btn">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

