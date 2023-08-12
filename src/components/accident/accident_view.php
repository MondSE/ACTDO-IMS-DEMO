<main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" id="integration">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Accident View</h1>
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
      <?php include_once ('./src/api/api_accident_view.php');?>
      <?php include_once ('./src/api/api_accident_update.php');?>
        <form class="needs-validation" action="" method="POST" novalidate="">
            <div class="row gx-1  flex flex-wrap">
                <div class="col-sm-auto">
                    <label for="accident_date_time" class="form-label pt-2">accident date/time:</label>
                    <div class="input-group input-group-sm has-validation">
                        <input type="text" class="form-control form-control-sm border-dark-subtle" name="code" id="accident_date_time" value="<?php echo $code;?>" placeholder="Code" required>
                        <input type="datetime-local" class="form-control form-control-sm border-dark-subtle" name="date" id="accident_date_time" value="<?php echo $date;?>" placeholder="#" required>
                        <input type="text" class="form-control form-control-sm border-dark-subtle" name="location" id="accident_date_time" value="<?php echo $location;?>" placeholder="Location" required>
                        <input type="text" class="form-control form-control-sm border-dark-subtle" name="property" id="accident_date_time" value="<?php echo $property;?>" placeholder="Damage to property" required>
                        <input type="number" class="form-control border-dark-subtle" name="injured" id="accident_date_time" value="<?php echo $injured;?>" placeholder="Injured" required>
                        <input type="number" class="form-control border-dark-subtle" name="fatality" id="accident_date_time" value="<?php echo $fatality;?>" placeholder="Fatality" required>
                    </div>
                 </div>

                <div class="col-auto">
                    <label for="Vehicle_Catagories" class="form-label pt-2">Vehicle Catagories:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="number" class="form-control border-dark-subtle" name="single" id="Vehicle_Catagories" value="<?php echo $single;?>" placeholder="single" required>
                            <input type="number" class="form-control border-dark-subtle" name="tricycle" id="Vehicle_Catagories" value="<?php echo $tricycle;?>" placeholder="Tricycle" required>
                            <input type="number" class="form-control border-dark-subtle" name="sedan" id="Vehicle_Catagories" value="<?php echo $sedan;?>" placeholder="Sedan" required>
                            <input type="number" class="form-control border-dark-subtle" name="suv" id="Vehicle_Catagories" value="<?php echo $suv;?>" placeholder="SUV" required>
                            <input type="number" class="form-control border-dark-subtle" name="puj" id="Vehicle_Catagories" value="<?php echo $puj;?>" placeholder="PUJ" required>
                            <input type="number" class="form-control border-dark-subtle" name="bus" id="Vehicle_Catagories" value="<?php echo $bus;?>" placeholder="BUS" required>
                            <input type="number" class="form-control border-dark-subtle" name="truck" id="Vehicle_Catagories" value="<?php echo $truck;?>" placeholder="Truck" required>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="Vehicle_Catagories" class="form-label pt-2">Monitoring Base:</label>
                        <div class="input-group input-group-sm has-validation">
                            <select name="involved" id="">
                            <option value="<?php echo $involved;?>" class="text-light bg-secondary" selected><?php if($involved){echo $involved;}else{echo ('Select Involved');}?>
                              <option value="One Vehicle">One Vehicle</option>
                              <option value="Both Vehicle">Both Vehicle</option>
                              <option value="Multiple Vehicle">Multiple Vehicle</option>
                          </select>
                            <select name="cctv" id="">
                            <option value="<?php echo $cctv;?>" class="text-light bg-secondary" selected><?php if($cctv){echo $cctv;}else{echo ('Select Caught on camera');}?>
                              <option value="Positive">Positive</option>
                              <option value=">Negative">Negative</option>
                            </select>
                            <input type="text" class="form-control border-dark-subtle" name="full_name" id="Vehicle_Catagories" value="<?php echo $full_name;?>" placeholder="Operator Name" required>
                        </div>
                </div>
            </div>

            <div class="justify-content-between align-items-center mt-2 pb-2">
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
              <th scope="col">#</th>
              <th scope="col">Code No.</th>
              <th scope="col">Date-Time</th>
              <th scope="col">Involved</th>
              <th scope="col">Cctv</th>  
              <th scope="col">Operators</th>  
              <th scope="col">Details</th>            
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php include_once ('./src/components/accident/Table/accident_table.php');?>
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
