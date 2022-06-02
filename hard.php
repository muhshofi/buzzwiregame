<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUZZ WIRE GAME</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ceknilai").load("ceknilai.php");
        }, 1000);
    });
    </script>
    <link rel="stylesheet" href="custom.css"> <!-- Custom Style CSS-->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="navbar-nav mx-auto text-white text-center">
            <a class="nav-item nav-link" href="index.php">HOME</a>
            <a class="nav-item nav-link" href="about.php">ABOUT</a>
          </div>
        </div>
      </nav>
    <div class="cover-container d-flex w-100 h-100 flex-column">
      <div class="my-4 text-center">
        <h1 class="heading">BUZZ WIRE GAME</h1>
        <div class="container py-3">
        <button type="button" class="btn btn-primary btn-lg text-white rounded fw-normal" id="start">START</button>
        <button type="button" class="btn btn-danger btn-lg text-white rounded fw-normal" id="pause">PAUSE</button>
        <button type="button" class="btn btn-success btn-lg text-white rounded fw-normal" id="reset">RESET</button>
        </div>
        <h2 class="text-center ">
            YOUR SCORE
        </h2>
        <div class="container">
            <div class="row px-3 row-cols-sm-6 text-center justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-text text-black">100</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="container p-3">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm shadow">
                    <div class="card-header py-3">
                      <h2 class="my-0 fw-bold text-black text-uppercase">HIT</h4>
                    </div>
                    <div class="card-body">
                        <object data="ico/life.svg" height="100"></object>
                        <h3 class="text-primary"><span id="ceknilai"></span></h3>
                        <h3 class="text-black">HIT</h3>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm shadow">
                      <div class="card-header py-3">
                        <h4 class="my-0 fw-bold text-black text-uppercase">TIME</h4>
                      </div>
                      <div class="card-body">
                        <object data="ico/clock.svg" height="110"></object>
                        <h3 class="text-primary">
                          <span id="timer">
                            <span id="mins">03:</span>
                            <span id="seconds">00</span>
                          </span>
                        </h3>
                        <h3 class="text-black">
                        LEFT
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm shadow">
                      <div class="card-header py-3">
                        <h4 class="my-0 fw-bold text-black text-uppercase">DIFFICULTY</h4>
                      </div>
                      <div class="card-body">
                        <object data="ico/star.svg" height="110"></object>
                        <h3 class="text-primary">HARD</h3>
                        <h3 class="text-black">DIFFICULTY</h3>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
    </div>
    <script src="timer-hard.js"></script>
    </body>
</html>