<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-sm p-3 bg-white">
        <div class="container-fluid">

            <a class="navbar-brand logo" href="#">
                <img src="img/logo.png" alt="" width="100">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"><i
                                class="fa-solid fa-house-user"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="my_cv.php"><i
                                class="fa-solid fa-coins"></i> My CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form/index.php"><i
                                class="fa-solid fa-file-contract"></i> Create New CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="info.php"><i
                                class="fa-solid fa-piggy-bank"></i> Information</a>
                    </li>

                    <li>
                        <li class = "nav-item">
                          <a class = "nav-link active" aria-current="page" href="template.php">
                            <i class="fa-solid fa-template"></i> Template </a>
                          </a>
                        </li>
                    </li>


                    <li class="nav-item">
                        <!-- <a class="nav-link active b" aria-current="page" href="#"><i class="fa-solid fa-hand-holding-dollar"></i> My Given Loans</a> -->

                        <div class="dropdown">
                            <?php if ($image == "FemaleImage") { ?>

                            <img class="dropdown-toggle pro" src="img/Female.png" alt="img" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <?php } ?>
                            <?php if ($image == "MaleImage") { ?>
                            <img class="dropdown-toggle pro" src="img/man.png" alt="img" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <?php } ?>
                            <?php if ($image != "MaleImage" && $image != "FemaleImage") { ?>
                            <img class="dropdown-toggle pro" src="profileImage/<?php echo $image; ?>" alt="img"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php } ?>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="profile.php"><i class="fa-solid fa-user"></i> My
                                        Profile</a></li>
                                <li><a class="dropdown-item"
                                        onclick="cpass('<?php echo $email; ?>', '<?php echo $pass; ?>')"><i
                                            class="fa-solid fa-key"></i> Change Password</a></li>
                                <li><a class="dropdown-item" href="logout.php"><i
                                            class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</body>

</html>