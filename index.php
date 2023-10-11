<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .box1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .logout {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box1">
            <h1>Welcome <?php echo $_SESSION['username']; ?> to the Reminder Application </h1>
            <h3>Today is <?php echo date('l'); ?>, <?php echo date('d'); ?> of <?php echo date('M'); ?>, <?php echo date('y'); ?></h3>
        </div>
        <?php
        include("./allinsert.php");
        ?>
        </div>
    </div>
</body>

</html>