<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cubing-icons/css/cubing-icons.css">
    <link rel="stylesheet" href="css/flag-icons/css/flag-icon.css">
    <title>Cube Heroes</title>
  </head>

  <body>
    <div class="container">
      <div class="row mb-3">
        <div class="col-12" id="header">
          <h1 class="header-logo text-center">Cube Heroes</h1>
        </div>
      </div>
      <div class="row">

        <div class="col-xl-2 mb-3" id="right-column">
          <div class="list-group right-column-profile">
            <div class="list-group-item list-group-item-success text-center column-list-header"><b>Your Info</b></div>
            <div class="list-group-item list-group-item-dark pt-1 right-column-profile-img">
              <a href="#" style="">Name</a> <img src="https://i.stack.imgur.com/34AD2.jpg" alt="Profile Picture">
            </div>
          </div>
          <div class="list-group left-column-list">
            <a class="list-group-item list-group-item-dark"><b>Rank:</b> Non-cuber</a>
            <a class="list-group-item list-group-item-dark"><b>Location:</b> Norway</a>
            <a class="list-group-item list-group-item-dark"><b>Money:</b> 146,489</a>
          </div>
          <div class="list-group left-column-list mt-3">
            <div class="list-group-item list-group-item-info text-center column-list-header"><b>Communication</b></div>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Messages</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Forum</a>
          </div>
        </div>

        <div class="col-xl-2 mb-3" id="left-column">
          <div class="list-group left-column-list">
            <div class="list-group-item list-group-item-primary text-center column-list-header"><b>Main</b></div>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Bank</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Your Puzzles</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Territories</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Travel</a>
          </div>
          <div class="list-group left-column-list mt-3">
            <a class="list-group-item list-group-item-danger text-center column-list-header"><b>Practice</b></a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Practice Event<span class="badge badge-light left-column-time-badge">10</span></a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Learn Algs</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Competition</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Missions</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Learn Event</a>
          </div>
          <div class="list-group left-column-list mt-3">
            <a class="list-group-item list-group-item-warning text-center column-list-header"><b>Other</b></a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Buy Puzzles</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">Sell Puzzles</a>
          </div>
        </div>

        <main class="col mx-3 my-3" id="content">
          <?php
            if (!empty($_GET['p']))
            {
              $pages_dir= 'pages';
              $pages = scandir($pages_dir, 0);
              unset($pages[0], $pages[1]);

              $p = $_GET['p'];
              if (in_array($p .'.pg.php', $pages))
              {
                include ($pages_dir .'/'. $p .'.pg.php');
              }
              else
              {
                echo ("Sorry, this site does not exist.");
              }
            }
            else
            {
              $pages_dir= 'pages';
              include ($pages_dir .'/menu.pg.php');
            }
          ?>
        </main>
      </div>
    </div>
  </body>

</html>
