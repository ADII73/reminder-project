<!DOCTYPE html>
<html>

<head>
    <style>
        /* Basic CSS styling */
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 400px;
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
            margin-top: 3.5%;
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
            <h2>Enable Reminder</h2>
            <form id="reminder-form" action="submit.php" method="post">
                <label for="date">Select Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="subject">Select Subject:</label>
                <select id="subject" name="subject" required>
                    <!-- Options will be autopopulated based on the earlier field selection using JavaScript -->
                </select>

                <label for="reminders">Reminders:</label>
                <select id="reminders" name="reminders" required>
                    <!-- Options will be autopopulated based on the earlier field selection using JavaScript -->
                </select>

                <label for="description">Add Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>

                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email" required>

                <label for="contactNo">Contact No:</label>
                <input type="text" id="contactNo" name="contactNo" required>

                <label for="smsNo">SMS No:</label>
                <input type="text" id="smsNo" name="smsNo" required>

                <div class="checkbox-group">
                    <label>Recur for next:</label>
                    <input type="checkbox" name="recur7" value="7 Days">7 Days
                    <input type="checkbox" name="recur5" value="5 Days">5 Days
                    <input type="checkbox" name="recur3" value="3 Days">3 Days
                    <input type="checkbox" name="recur2" value="2 Days">2 Days
                </div>

                <div class="button1">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>