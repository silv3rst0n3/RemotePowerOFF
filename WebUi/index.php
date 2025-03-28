<?php
$filename = 'log.txt';
$file2='file2.txt';
$data2 = file_get_contents($file2);
// Read data from the file
$data3 = file_get_contents($filename);

$date = $_POST['date'];
$time = $_POST['time'];

$data = "$date $time";

if($data > 0){
    $fp = fopen('file2.txt', 'r+');
    fwrite($fp,$data);
    fclose($fp);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Datetime</title>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="silver.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="app.js"></script>
</head>
<body>
<form method="POST" action="">
    <div class="div">
        <?php
        if ($data3 == 1){
        ?>
            <i class="fa fa-circle text-success-glow blink"></i>
            <span> Status : YOUR SYSTEM IS ONLINE </span>
        <?php
        }else{
            ?>
            <i class="fa fa-circle text-danger-glow blink"></i>
            <span> Status : YOUR SYSTEM IS OFFLINE </span>
            <?php
        }
        ?>
    </div>


    <div>
        <h3>The system was shut down on <?= $data2 ?></h3>
    </div>


    <label for="datepicker">Date:</label>
    <div>
        <input placeholder="Select your date" type="text" name="date" id="datepicker" value="" class="calendar"><i class="fas fa-calendar-check icon"></i>
    </div>

    <label for="time">Time:</label>
    <input type="time" id="time" name="time" inputmode="time" pattern="[0-9]{2}:[0-9]{2}"><br>

    <input type="submit" value="Submit">
</form>


</body>
<script src="app.js"></script>
</html>

