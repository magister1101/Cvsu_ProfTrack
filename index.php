<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="css/map.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/FAB.css">
  </style>

  <title>Prof Tracker</title>
</head>

<body>
  <div id="map"></div>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="app.js"></script>

  <?php include 'constants/navbar-index.php' ?>

  <div class="floating-container">
    <div class="floating-button">+</div>
    <div class="element-container">


      <a onclick="changeFloor(5)">
        <span class="float-element tooltip-left">
          <i class="material-icons">5
          </i></a>
      </span>
      <a onclick="changeFloor(4)">
        <span class="float-element">
          <i class="material-icons">4
          </i></a>
      </span>
      <a onclick="changeFloor(3)">
        <span class="float-element">
          <i class="material-icons">3
          </i></a>
      </span>
      <a onclick="changeFloor(2)">
        <span class="float-element">
          <i class="material-icons">2
          </i></a>
      </span>
      <a onclick="changeFloor(1)">
        <span class="float-element">
          <i class="material-icons">1
          </i></a>
      </span>

    </div>
  </div>


</body>

</html>