<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/87843ebe11.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Fetlla</title>
</head>

<body class="d-flex flex-column">
    <nav class="navbar navbar-dark bg-dark fixed-top ">
        <div>
            <div class="d-flex flex-row align-items-center vw-100">
                <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex justify-content-center flex-grow-1 ">
                    <a class="navbar-brand ms-3" href="/sql_lab/"><?php echo $header ?></a>
                </div>
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="width: 300px">

                <div class="d-flex justify-content-between align-items-center me-3 mt-2">
                    <div class="d-flex  align-items-center">
                        <a class="navbar-brand" href="#">
                            <img src="/sql_lab/img/fetlla.png" alt="" width="50" height="50">
                        </a>
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                            Fetlla SQLi lab
                        </h5>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($header == "Home") echo ("active") ?>" aria-current="page" href="/sql_lab/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($header == "Union based SQLi" || $header == "Error based SQLi") echo ("active") ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                In-band sql injection
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item <?php if ($header == "Union based SQLi") echo ("active") ?>" href="/sql_lab/union_based/list.php">Union based SQLi</a></li>
                                <li><a class="dropdown-item <?php if ($header == "Error based SQLi") echo ("active") ?>" href="/sql_lab/error_based/list.php">Error based SQLi</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if ($header == "Boolean-based Blind SQLi" || $header == "Time-based Blind SQLi") echo ("active") ?>" href=" #" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inferential SQLi
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item <?php if ($header == "Boolean-based Blind SQLi") echo ("active") ?>" href="/sql_lab/boolean_based/list.php">Boolean-based Blind SQLi</a></li>
                                <li><a class="dropdown-item <?php if ($header == "Time-based Blind SQLi") echo ("active") ?>" href="/sql_lab/time_based/list.php">Time-based Blind SQLi</a></li>

                            </ul>
                        </li>


                        <li><a class="nav-link <?php if ($header == "Out-of-band SQLi") echo ("active") ?>" href="/sql_lab/out_of_band/list.php">Out-of-band SQLi</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="mt-5 d-flex" style="height:calc(100vh - 48px)">