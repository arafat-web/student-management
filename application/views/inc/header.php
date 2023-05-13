<?php
include "./config/controller.php";
include "./config/session.php";

$admin = $data->viewData("admin", "", "");

$fullname;
$job;
$img;
foreach ($admin as $details) {
    $fullname = $details["name"];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) echo $title ?> - My Budget</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fw-bold" href="index.html">MyBudget</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0">
                    <li class="nav-item dropdown d-flex text-light">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-regular fa-user"></i> <?=$fullname?>
                        </a>
                        <ul class="dropdown-menu border-0 bg-light ms-auto">
                            <li><a class="dropdown-item" href="profile.php">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                </ul>
                </li>
            </div>
        </div>
    </nav>