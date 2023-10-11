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
            <form id="reminder-form" action="index.php" method="post">
                <label for="date">Select a Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="subject">Subject:</label>
                <select id="subject" name="subject" required>
                    <option value="C++">C++</option>
                    <option value="Java">Java</option>
                    <option value="Web Development">Web Development</option>
                    <!-- Add more subjects as needed -->
                </select>

                <label for="description">Add Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>

                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email">

                <label for="contactNo">Contact No:</label>
                <input type="text" id="contactNo" name="contactNo">

                <label for="smsNo">SMS No:</label>
                <input type="text" id="smsNo" name="smsNo">

                <label class="checkbox-label">Recurrence for next:</label>
                <div class="checkbox-group">
                    <input type="checkbox" name="recur7" value="7 Days">7 Days
                    <input type="checkbox" name="recur5" value="5 Days">5 Days
                    <input type="checkbox" name="recur3" value="3 Days">3 Days
                    <input type="checkbox" name="recur2" value="2 Days">2 Days
                </div>

                <div class="button1">
                    <button type="submit" name="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php

include("./config.php");
if(isset($_POST['submit'])){
    $date=$_POST['date'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $email=$_POST['email'];
    $contactNo=$_POST['contactNo'];
    $smsNo=$_POST['smsNo'];
    $recur7=$_POST['recur7'];
    $recur5=$_POST['recur5'];
    $recur3=$_POST['recur3'];
    $recur2=$_POST['recur2'];

    $insertquery="insert into reminder (date, subject, description, email, contactNo, smsNo, recur7, recur5, recur3, recur2) values('$date', '$subject', '$description', '$email', '$contactNo', '$smsNo', '$recur7', '$recur5', '$recur3', '$recur2')";
    $res=mysqli_query($con, $insertquery);
    if($res){
        ?>
        <script>
            alert("reminder is inserted properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("reminder is not inserted properly");
        </script>
        <?php
    }
}
?>