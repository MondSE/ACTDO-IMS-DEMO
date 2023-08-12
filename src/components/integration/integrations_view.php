<main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" id="integration">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Integration Violations View</h1>
      </div>

      <div class="justify-content-between align-items-center pb-2 mb-3 border-bottom">
      <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>
      <?php include_once ('./src/api/api_integration_view.php');?>
      <?php include_once ('./src/api/api_integration_update.php');?>
        <form class="needs-validation" action="" method="POST" novalidate="">
            <div class="row gx-1 d-flex flex-wrap">
                <div class="col-sm-auto">
                    <label for="Ticket" class="form-label pt-2">Ticket No:</label>
                    <div class="input-group input-group-sm has-validation">
                        <select class="form-select form-select-sm border-dark-subtle" name="ticket_type" id="Ticket" required>
                            <option value="<?php echo $Ticket_Types;?>" class="text-light bg-secondary" selected><?php if($Ticket_Types){echo $Ticket_Types;}else{echo ('Select Ticket');}?></option>
                            <option value="Traffic Ticket">Traffic Ticket</option>
                            <option value="Impounding Ticket">Impounding Ticket</option>
                            <option value="Towing Ticket">Towing Ticket</option>
                            <option value="LTO Ticket">LTO Ticket</option>
                        </select>
                        <input type="number" class="form-control form-control-sm border-dark-subtle" name="ticket_no" id="Ticket" value="<?php echo $Ticket_No;?>" placeholder="#" required>
                    </div>
                 </div>

                <div class="col-auto">
                    <label for="Full_Name" class="form-label pt-2">Full Name Violator:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="text" class="form-control border-dark-subtle text-capitalize" name="full_name" id="Full_Name" value="<?php echo $Full_Name;?>" placeholder="Full Name" required>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="ID_Register" class="form-label pt-2">ID Register:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="text" class="form-control border-dark-subtle" name="driver_license_no" id="ID_Register" value="<?php echo $Driver_License_No;?>" placeholder="Driver License No." required>
                            <input type="text" class="form-control border-dark-subtle" name="plate" id="ID_Register" value="<?php echo $Plate_No;?>" placeholder="Plate No." required>
                            <input type="text" class="form-control border-dark-subtle" name="province_city" id="ID_Register" value="<?php echo $City;?>" placeholder="Address Province/City." required>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="Vehicle_Register" class="form-label pt-2">Vehicle Register:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="text" class="form-control border-dark-subtle" name="brand_model" id="ID_Register" value="<?php echo $Vehicle_Model;?>" placeholder="Brand/Model." required>
                            <input type="text" class="form-control border-dark-subtle" name="color_brand_model"  id="ID_Register" value="<?php echo $Vehicle_Color;?>" placeholder="Color Brand/Model" required>
                            <select class="form-select form-select-sm border-dark-subtle" name="vehicle_type" id="ID_Register" required>
                              <option value="<?php echo $Type_Vehicle;?>" class="text-light bg-secondary" selected><?php if($Type_Vehicle){echo $Type_Vehicle;}else{echo ('Vehicle Select');}?></option>
                              <option value="Private">Private</option>
                              <option value="Single">Single</option>
                              <option value="Tricycle">Tricycle</option>
                              <option value="Truck">Truck</option>
                            </select>
                            <select class="form-select form-select-sm border-dark-subtle" name="public_transport_state" id="ID_Register">
                              <option value="<?php if($Public_Transport_State){echo $Public_Transport_State;}else{echo ('N/A');}?>" class="text-light bg-secondary" selected><?php if($Public_Transport_State){echo $Public_Transport_State;}else{echo ('Public Transport State Select');}?></option>
                              <option value="City Limit">City Limit</option>
                              <option value="Outside City Limit">Outside City Limit</option>
                            </select>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="Register_Officer" class="form-label pt-2">Register Officer:</label>
                        <div class="input-group input-group-sm has-validation">
                            <select class="form-select form-select-sm border-dark-subtle" name="officer" id="Register_Officer" required>
                              <option value="<?php echo $Officer_Name;?>" class="text-light bg-secondary" selected><?php if($Officer_Name){echo $Officer_Name;}else{echo ('Officer Select');}?></option>
                              <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                  <option value="<?php echo $row1['name'];?>"><?php echo $row1[1];?></option>
                                  <?php endwhile;?>
                            </select>
                            <select class="form-select form-select-sm border-dark-subtle" name="office" id="Register_Officer" required>
                              <option value="<?php echo $Office;?>" class="text-light bg-secondary" selected><?php if($Office){echo $Office;}else{echo ('Office Select');}?></option>
                              <option value="ACTDO">ACTDO</option>
                              <option value="PTRO">PTRO</option>
                              <option value="ACTMEU">ACTMEU</option>
                              <option value="BRGY">BRGY</option>
                            </select>
                            <input type="text" class="form-control border-dark-subtle" name="location_violation" id="Register_Officer" value="<?php echo $Location;?>" placeholder="Place of Violation." required>
                            <input type="date" class="form-control border-dark-subtle" name="date_apprehended" id="Register_Officer" value="<?php echo $Date_Apprehend;?>" required>
                            <input type="text" class="form-control border-dark-subtle" name="remarks" id="Register_Officer" value="<?php echo $Remarks;?>" placeholder="Remarks." required>
                        </div>
                </div>
                <div class="col-auto d-flex align-content-end flex-wrap">
                    <label for="Violation" class="form-label pt-2">Violation View:</label>
                        <div class="input-group input-group-sm has-validation">
                        <input type="text" class="form-control border-dark-subtle" name="violation" id="Violation"  value="<?php echo $Violation;?>" placeholder="No Violation Enter">
                        </div>
                </div>
            </div>

            <div class="justify-content-between align-items-center pb-2 pt-2">
              <div class="col-sm-auto col-md-auto">
                <div class="form-check px-auto">
                    <input type="checkbox" class="form-check-input border-dark-subtle" name="" id="required" required>
                    <label for="required" class="form-check-label">Please check the cycle if your done.</label>
                    <button type="submit" class="btn btn-secondary btn-sm mx-1" name="submit">Update button</button>
                </div>
              </div>
            </div>
            
        </form>
        
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Ticket</th>
              <th scope="col">Client Name</th>
              <th scope="col">Violation</th>
              <th scope="col">Date Apprehend</th>
              <th scope="col">Officer Name</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php include_once ('./src/components/integration/Table/integration_table.php');?>
            </tr>
          </tbody>
        </table>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link <?= ($page_no <=1) ?'disabled' : '';?>" <?= ($page_no >1) ? 'href=?page_no='.$previous_page : ''; ?>>Previous</a></li>

          <li class="page-item"><a class="page-link <?= ($page_no  >= $total_no_of_page) ? 'disabled' : ''; ?>" <?= ($page_no <$total_no_of_page) ? 'href=?page_no='.$next_page : ''; ?>>Next</a></li>
        </ul>
      </nav>
      <div class="p-10">
              <strong>Page <?=$page_no;?> of <?=$total_records_per_page;?></strong>
      </div>
      </div>
    </main>
