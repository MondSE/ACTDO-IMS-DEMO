<main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" id="integration">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="d-flex justify-content-between flex-wrap align-items-center pt-3 pb-2 mb-3 grid gap-3">
        <?php include_once "./src/api/api_dashboard_count.php";?>
      <div class="card text-center" style="width: 18rem;">
      <img src="./src/assets/img/ticket-alt-svgrepo-com.svg" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
            <h5 class="card-title">Total Tickets</h5>
            <p class="card-text"><?php echo $output1;?></p>
            <a href="integration.php" class="btn btn-primary">Go integration</a>
        </div>
      </div>

      <div class="card text-center" style="width: 18rem">
      <img src="./src/assets/img/traffic-svgrepo-com.svg" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
            <h5 class="card-title">Total Violators</h5>
            <p class="card-text"><?php echo $output6;?></p>
            <a href="search_client.php" class="btn btn-primary">Go Search Client</a>
        </div>
      </div>

      <div class="card text-center" style="width: 18rem;">
      <img src="./src/assets/img/invoice-statistics-line-svgrepo-com.svg" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
            <h5 class="card-title">Total Transaction</h5>
            <p class="card-text"><?php echo $output3;?></p>
            <a href="transaction.php" class="btn btn-primary">Go Transaction</a>
        </div>
      </div>

      <div class="card text-center" style="width: 18rem;">
      <img src="./src/assets/img/employee-group-svgrepo-com.svg" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
            <h5 class="card-title">Total Employee</h5>
            <p class="card-text"><?php echo $output2;?></p>
            <a href="employee_registration.php" class="btn btn-primary">Go Employee Registration</a>
        </div>
      </div>

      <div class="card text-center" style="width: 18rem;">
      <img src="./src/assets/img/complaint-dissatisfaction-expression-svgrepo-com.svg" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
            <h5 class="card-title">Total Complaints</h5>
            <p class="card-text"><?php echo $output4;?></p>
            <a href="legal_complaint.php" class="btn btn-primary">Go Legal Complaint</a>
        </div>
      </div>

      <div class="card text-center" style="width: 18rem;">
        <img src="./src/assets/img/car-crash-car-accident-traffic-accident-traffic-collision-svgrepo-com.svg" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
            <h5 class="card-title">Total Accidents</h5>
            <p class="card-text"><?php echo $output5;?></p>
            <a href="accident.php" class="btn btn-primary">Go Accidents</a>
        </div>
      </div>
      </div>
    </main>
