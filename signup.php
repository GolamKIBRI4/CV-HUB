<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
$check = 0;
session_start();
parse_str($_SERVER['QUERY_STRING'], $queries);
$id = $queries['id'];
$_SESSION['id'] = $id;

$msg = $_SESSION['success'];
if ($msg == null) {
  $msg = $_SESSION['pasword'];
  if ($msg == null) {
    $msg = $_SESSION['not_success'];
    $_SESSION['not_success'] = null;
  }
  $_SESSION['pasword'] = null;
}
$_SESSION['success'] = null;


if ($msg == 'Account created successfully') {
  $check = 1;
}
if ($msg == 'Email already used before') {
  $check = 3;
}
if ($msg == 'Password did not matched') {
  $check = 2;
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SignUp</title>
  <link rel="stylesheet" href="css/signup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" href="img/logoFav.png">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <div class="container-fluid">
    <form action="signup2.php" method="POST" enctype="multipart/form-data">

      <div class="row">
        <div class="col-lg-3 col-md-12 sm-12 left d-none d-lg-block">
          <div class="row up">
            <center>
              <img class="w-75 d-lg-none cus" src="img/logo.png" alt="img">
              <img class="w-75 d-lg-block d-none d-xl-none cus" src="img/logo.png" alt="img">
              <img class="w-75 d-none d-xl-block cus" src="img/logo.png" alt="img">
            </center>
          </div>
          <div class="row down">
            <img class="log-img w-100 d-lg-none" src="assets/img/CV-Template-05-removebg-preview 1.png" alt="img">
            <img class="log-img w-100 d-lg-block d-none d-xl-none" src="assets/img/CV-Template-05-removebg-preview 1.png" alt="img">
            <img class="log-img w-100 d-none d-xl-block" src="assets/img/CV-Template-05-removebg-preview 1.png" alt="img">
          </div>
        </div>

        <div class="col-lg-4 col-md-12 sm-12 right mx-3 last">
          <center>
            <img class="d-lg-none cus" src="img/logo.png" alt="img" style="width: 300px; margin-top: 0;">

          </center>

          <h3 class="login"><i class="fa-solid fa-user"></i> SIGNUP</h3>


          <div class="form-group w-100">
            <input type="text" class="form-control form-control-lg email fn" name="first_name" aria-describedby="emailHelp" placeholder="First Name" required>
          </div>
          <div class="form-group pad w-100">
            <input type="text" class="form-control form-control-lg email fn" name="last_name" aria-describedby="emailHelp" placeholder="Last Name" required>
          </div>
          <div class="form-group pad w-100">
            <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
          </div>
          
          <div class="form-group pad w-100">
            <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="gender" required>
              <option value="" disabled selected hidden>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
  
          
          <div class="btn1 w-100">
            <button type="submit" class="btn btn-warning d-none d-lg-block custom-btn">Signup</button>

          </div>

          <div class="btn2 w-100">
            <button type="button" onclick="location.href='login.php';" class="btn btn-secondary d-none custom-btn2">Already have an account</button>
          </div>
          <div class="btn2 w-100">

            <?php if ($msg) { ?>

              <?php if ($check == 1) { ?>
                <script type="text/javascript">
                  window.onload = function() {
                    f();
                  };
                </script>

              <?php } ?>
              <?php if ($check == 2) { ?>
                <script type="text/javascript">
                  window.onload = function() {
                    f2();
                  };
                </script>
              <?php } ?>

              <?php if ($check == 3) { ?>
                <script type="text/javascript">
                  window.onload = function() {
                    f3();
                  };
                </script>
              <?php } ?>

            <?php } ?>
          </div>


        </div>

        <div class="col-lg-4 col-md-12 sm-12 right mx-3 last2">
          <!-- <h3 class="login"></h3> -->

          <div class="form-group w-100">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
          </div>
          <div class="form-group pad w-100">
            <input type="password" class="form-control form-control-lg" name="cpassword" placeholder="Confirm Password" required>
          </div>
          <div class="form-group pad w-100">
            <input type="text" class="form-control form-control-lg" name="phone" placeholder="Phone Number" required>
          </div>

          <div class="form-group pad w-100">
            <input type="file"  accept="image/*" title=" " class="form-control form-control-lg" name="image" placeholder="Image">
          </div>

          <div class="btn1 w-100">
            <button type="submit" class="btn btn-warning d-lg-none custom-btn">Signup</button>
          </div>
          <div class="btn2 w-100">
            <button type="button" onclick="location.href='login.php';" class="btn btn-secondary custom-btn2">Already have an account</button>
          </div>

        </div>

      </div>
    </form>
    <script>
      

      function f() {
        Swal.fire(
          'Account Created Successfully',
          '',
          'success'
        )
      }
      function f2() {
        Swal.fire(
          'Password did not Matched',
          '',
          'error'
        )
      }
      function f3() {
        Swal.fire(
          'Email Used Before',
          '',
          'error'
        )
      }
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>