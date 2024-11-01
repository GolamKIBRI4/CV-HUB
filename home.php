<?php
session_start();
$not_break = $_SESSION['not_break'];
if ($not_break == null) {
    header('location:login.php');
}
?>
<?php
$email = $_SESSION['email'];
include '_dbconnect.php';
$sql2 = "SELECT * FROM user WHERE email = '$email';";
$result1 = mysqli_query($con, $sql2);
$num1 = mysqli_num_rows($result1);



while ($row = $result1->fetch_assoc()) {
    $image = $row["image"];
    $gender = $row["gender"];
    $pass = $row["password"];
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Userhome</title>
    <link rel="stylesheet" href="css/styels.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="icon" href="img/logoFav.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <style>
        body {
            font-family: "Dosis";
        }
    </style>

<body>


   <?php
   include 'nav.php';
   ?>

    <div class="container-fluid main-body">

        <div class="row mbody">
            <div class="col-lg-6 col-md-12 col-sm-12 col-one">
                <h2 class="t1">CV-HUB</h2>
                <h5 class="t2">A CV Generate System</h5>
                <p class="onep">CV-HUB is a Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sequi, assumenda asperiores voluptatem accusamus et libero adipisci aliquid quaerat temporibus deserunt doloremque dolorum. Quasi voluptatum neque ducimus sed, maiores doloribus?</p>
                <button onclick="location.href='#next';" class="btn btn-warning cus-b3">Get Started</button>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-two">
                <img class="img-3 d-none d-lg-block " src="img/3.png" alt="img">
                <center><img class="w-75 img-3 d-none d-md-block d-lg-none" src="img/3.png" alt="img"></center>
                <center><img class="img-3 d-md-none d-sm-block d-lg-none" src="img/3.png" alt="img"></center>
            </div>

        </div>


        <section id="next">

            <center>
                <h2 class="t1 epad">CV HUB</h2>
            </center>

            <div class="search-field mt-5 d-flex justify-content-center align-items-center" style="font-family:Dosis, FontAwesome;">
                <input type="search" class="form-control form-control w-50 rounded srch" placeholder="&nbsp;&nbsp;&nbsp; &#xf002; &nbsp;Search here">

            </div>
            
    </div>



    </section>
    <center>
        <div class="d-flex justify-content-center">
            <div class="pagination" style="margin-bottom: 5%;">
                <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
                <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
                <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
                <li class="page-item dots"><a class="page-link" href="#">...</a></li>
                <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
                <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
            </div>
        </div>
        </div>
    </center>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between padfff border-bottom">
            <!-- Left -->

            <!-- Left -->

            <!-- Right -->

            <!-- Facebook -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>



            <!-- Instagram -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
            <!-- Github -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>

            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        CV-HUB
                        </h6>
                        <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt cupiditate quaerat numquam laudantium nulla delectus corrupti autem voluptates minus consequatur?
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->


                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> United City, Madani Avenue, Badda, Dhaka</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            cvhub@bscse.uiu.ac.bd
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> 01571337468</p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="#">CV_HUB.COM</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "lengthMenu": [
                    [3, 6, 10, 20],
                    [3, 6, 10, 20]
                ]
            }, {
                "ordering": false
            });
        });
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src = "assets/js/ChangePass.js"></script>
    
</body>

</html>