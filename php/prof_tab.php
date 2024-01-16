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
    <link rel="stylesheet" href="../css/general.css">
    <title>Prof Tracker</title>
</head>

<body>

    <?php include '../constants/navbar.php' ?>


    <?php
    $sql = "SELECT * FROM faculty order by id desc";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
        <div class="basic-box">

            <a class="click" name="click" href="prof_info.php?click=<?php echo $row['id'] ?>" style="text-decoration: none;">
                <div class="job-panel">
                    <h6 style="float:right">Department: <?php echo $row['department'] ?></h6>
                    <h1 style="width:50%" class="prof_tab_name">
                        <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>
                    </h1>
                    <hr>
                </div>
            </a>

        </div>
    <?php
    }

    ?>

</body>

</html>