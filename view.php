
<!DOCTYPE html>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
        /* Basic CSS styling */
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 1200px;
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
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
        }

        .button1 {
            margin-top: 15px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            margin-top: 11.5%;
            width: 100%;
            height: 98vh;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="form-container">
            <h2>View Your Reminders</h2>

                <table>
                    <tr>
                        <th>Reminder id</th>
                        <th>Reminder Subject</th>
                        <th>Reminder Description</th>
                        <th>Email Address</th>
                        <th>Contact No</th>
                        <th>SMS No</th>
                        <th>Status</th>
                        <th>Recurrence Frequency</th>
                        <th>Select</th>
                    </tr>
                    <?php
include("./config.php");

$selectquery="select * from reminder ";

$query=mysqli_query($con, $selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){


?>
                    <tr>
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['subject']; ?></td>
                        <td><?php echo $res['description']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['contactNo']; ?></td>
                        <td><?php echo $res['smsNo']; ?></td>
                        <td>Active</td>
                        <td><?php echo $res['recur7']; echo $res['recur5']; echo $res['recur3']; echo $res['recur2']; ?></td>
                        <td><a href="modify.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="MODIFY"> <i class="btn btn-outline-success" style="color: #da0b0b;">M</i></a><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="btn btn-outline-danger" style="color: #da0b0b;">D</i></a></td>
                    </tr>
                    <!-- Add more reminder rows as needed -->
                    <?php
}?>
                </table>
            
        </div>
    </div>
    <?php include("allinsert.php");
    ?>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>