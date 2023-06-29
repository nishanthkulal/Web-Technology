<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Display Current time and date</h1>
    <h2>
    <?php
      echo  "time from server is <span style='color:tomato;'>".date("h:i:s")."</span>";
       echo " Today's date  is <span style='color:tomato;'>".date("d-m-y");
       date_default_timezone_set('Asia/Kolkata');
       echo "</span> and Current Time is <span style='color:red'>".date("h:i:s a"). "</span>";
       
        ?>
    </h2>
    
</body>
</html>