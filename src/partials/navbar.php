<?php include_once("./src/partials/head.php");
if(!isset($_SESSION)){ session_start();}?>


<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ACTDO</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="" href="dashboard.php">
            <i class="ri-home-7-line"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search_client.php">
            <i class="ri-search-eye-line"></i>
              Search Client
            </a>
            <li class="nav-item">
            <a class="nav-link" href="integration.php">
            <i class="ri-stack-line"></i>
              Integrations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaction.php">
            <i class="ri-currency-line"></i>
              Transaction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee_registration.php">
            <i class="ri-team-line"></i>
              Employee Registration
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="legal_complaint.php">
            <i class="ri-article-line"></i>
              Legal Complaint
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="accident.php">
            <i class="ri-police-car-line"></i>
              Accident
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>User current login now</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item link-end">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              <?php  echo $_SESSION['person']; ?>
              <a class="nav-link px-3" href="./src/api/api_logout.php">Sign out</a>
            </a>
          </li>
        </ul>
      </div>
    </nav>