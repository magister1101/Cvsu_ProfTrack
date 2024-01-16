<?php
error_reporting(0);
include '../constants/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/prof_info.css">
    <title>Prof Tracker</title>
</head>

<body>

    <?php include '../constants/navbar.php' ?>

    <?php

    $click = $_GET['click'];
    $query = "SELECT * FROM `faculty` WHERE id = '$click'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_fetch_assoc($result);
    $facId = $rows['id'];
    ?>

    <div class="basic-box-noice">
        <div class="prof-name-pic">
            <img class="prof-profile-img" src="../img/sampleIcon01.png" alt="">
            <h1 class="prof-name"><?php echo $rows["firstName"] ?> <?php echo $rows["lastName"] ?></h1> 
        </div>
    </div>


    <h1 class="class-sched-text">Class Schedule</h1>

    <div class="basic-box-grey">
        <h1 class="prof_time_text">TIME</h1>
        <h1 class="prof_cpys_text">CLASS | SUBJECT | ROOM</h1>
        <br>
        <?php
        $sql = "SELECT * FROM schedule where facultyId = '$click' order by day asc";
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($res)) {
        ?>

            <div class="time">
                <h4>
                    <div class="start_time"><?php echo $row['startTime']; ?> </div>
                    <br>
                    <div class="end_time"><?php echo $row['endTime']; ?></div>
                </h4>
            </div>
            <div class="basic-box-nc">


                <div class="click" name="click" href="prof_info.php?click=<?php echo $row['id'] ?>" style="text-decoration: none;">
                    <div class="job-panel">
                        <h6>
                            <div class="prof_room">ROOM: <?php echo $row['room']; ?></div>
                            <div class="prof_class">
                                CLASS: <?php echo $row['course']; ?> <?php echo substr($row['year'], 0, -2) ?><?php echo $row['section']; ?></div>
                        </h6>
                        <h2>
                            <div class="prof_subject">SUBJECT: <?php echo strtoupper($row['subject']) ?></div>
                        </h2>
                        <hr>
                        <h2>
                            <div class="prof_day"><?php
                                                    $day;
                                                    switch ($row['day']) {
                                                        case 1:
                                                            $day = "Monday";
                                                            break;
                                                        case 2:
                                                            $day = "Tuesday";
                                                            break;
                                                        case 3:
                                                            $day = "Wednesday";
                                                            break;
                                                        case 4:
                                                            $day = "Thursday";
                                                            break;
                                                        case 5:
                                                            $day = "Friday";
                                                            break;
                                                        case 6:
                                                            $day = "Saturday";
                                                            break;
                                                        case 0:
                                                            $day = "Sunday";
                                                            break;
                                                    }
                                                    echo strtoupper($day) ?>
                            </div>
                        </h2>
                    </div>
                </div>
            </div>
            <br>
        <?php
        }
        ?>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>