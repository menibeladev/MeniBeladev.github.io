<html>
<head>
    <meta charset="UTF-8">
    <title>Independence Day | Meni Beladev</title>
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
    <meta name="author" content="Meni Beladev">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body onmouseleave="bye()">
<div class="container">
    <header>
        <img src="images/logo4.PNG" alt="logo">
    </header>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">

        <p id="clock">
            <?php
            date_default_timezone_set("Israel");
            ?>
            <br>
            <?php
            echo date("D M d, Y ");

            ?>
        </p>

    </div>


    <div class="col-md-3"></div>
    <div class="col-md-4"></div>
</div>


<h5>
    <?php

    $today = time();

    //B: RECORDS Date And Time OF YOUR EVENT
    $target = mktime(20, 00, 00, 06, 30, 2019);

    //C: COMPUTES THE DAYS UNTIL THE EVENT.
    $diffrence = ($target - $today);
    $days = floor($diffrence / 86400);
    $hours = floor(($diffrence % (86400)) / (3600));
    $minutes = floor(($diffrence % (3600)) / (60));
    $seconds = floor(($diffrence % (60)) / 1);


    //D: DISPLAYS COUNTDOWN UNTIL EVENT

    echo " :זמן שנותר עד האירוע ";
    echo "<br>";
    echo " $days d $hours h $minutes m $seconds s";
    ?>
</h5>
</html>
