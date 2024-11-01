<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
$check = 0;
session_start();
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
$id = $queries['id'];
$_SESSION['id'] = $id;

$msg = $_SESSION['success'];
if ($msg == null) {
  $msg = $_SESSION['wrong'];
  $_SESSION['wrong'] = null;
}
$_SESSION['success'] = null;

if ($msg == 'Wrong Email or Password') {
  $check = 1;
}
if ($msg == 'Account created successfully') {
  $check = 2;
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" href="img/logoFav.png">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
  <div class="container-fluid">
    <form action="login2.php" method="POST">

      <div class="row">
        <div class="col-lg-7 col-md-5 left d-none d-md-block">
          <div class="row up">
            <h1 class="bold fs-lg-1 fs-md-4">CV GENERATOR <br>SYSTEM</h1>
            <div class="line w-100 my-3 d-lg-none"></div>
            <div class="line w-75 my-3 d-lg-block d-none"></div>
            <!-- <h2 class="join fs-lg-2 fs-md-5">JOIN OUR COMMUNITY</h2> -->
            <a class="button-18" style="text-decoration:none" role="button" onclick="location.href='index.php';"> <i class="fa-solid fa-arrow-left"></i> BACK</a>
          </div>
          <div class="row down">
            <img class="log-img w-75 d-lg-none" src="img/cv.png" alt="img">
            <img class="log-img w-50 d-lg-block d-none d-xl-none" src="img/cv.png" alt="img">
            <img class="log-img d-none d-xl-block" src="img/cv.png" alt="img" style="width:45%;">
          </div>
        </div>

        <div class="col-md-5 col-lg-3 right mx-3">
          <div class="logo">
            <center><img src="img/logo.png" alt="img" style="width:300px;"></center>
          </div>
          <div class="last ms-md-5 w-100 my-5">
            <?php if ($msg) { ?>
              <?php if ($check == 1) { ?>

              <?php } ?>
              <?php if ($check == 2) { ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                      <?php echo $msg ?>
                    </div>
                  </div>

                </div>
              <?php } ?>
              <script type="text/javascript">
                window.onload = function() {
                  f();
                };
              </script>

            <?php } ?>
            <h3 class="login"><i class="fa-solid fa-user"></i> LOGIN</h3>
            <div class="form-group pad w-100">
              <input type="email" class="form-control form-control-lg email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
            </div>
            <div class="form-group pad">
              <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
            </div>
            <div class="btn1">
              <button type="submit" class="btn btn-warning custom-btn">Login</button>
            </div>
            <div class="btn2">
              <button onclick="location.href='signup.php';" type="button" class="btn btn-secondary custom-btn2">Signup</button>
            </div>
            <div class="forget">
              <a href="forget2.php">Forget Password?</a>
            </div>

          </div>
        </div>
    </form>
  </div>
  </div>

  <script>
    function f() {
      Swal.fire(
        'Wrong Email or Password',
        '',
        'error'
      )
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>