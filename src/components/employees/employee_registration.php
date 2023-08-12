<main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" id="integration">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Employee registration</h1>
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
      <?php include_once ('./src/api/api_employee_create.php');?>
        <form class="needs-validation" action="" method="POST" novalidate="" enctype="multipart/form-data">
            <div class="row gx-1 d-flex">
                <div class="col-sm-auto">
                <img src="./src/assets/profile_image/profiledefault.jpg" alt="" srcset="" height="200px" width="100%">
                    <div class="input-group input-group-sm has-validation">
                    <input class="form-control form-control-sm" name="file_image" id="formFileSm" type="file" required>
                    </div>
                 </div>

                <div class="col-auto d-flex align-content-end flex-wrap">
                    <label for="Full_Name" class="form-label">Full Name Employee:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="text" class="form-control border-dark-subtle" name="full_name[]" id="Full_Name" value="" placeholder="Last Name" required>
                            <input type="text" class="form-control border-dark-subtle" name="full_name[]" id="Full_Name" value="" placeholder="First Name" required>
                            <input type="text" class="form-control border-dark-subtle" name="full_name[]" id="Full_Name" value="" placeholder="Middle Name" required>
                        </div>
                </div>

                <div class="col-auto d-flex align-content-end flex-wrap">
                    <label for="contact" class="form-label">Contacts:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="email" class="form-control border-dark-subtle" name="email" id="contact" value="" placeholder="Email" required>
                            <input type="number" class="form-control border-dark-subtle" name="phone_no" id="contact" value="" placeholder="Phone #" required>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="designation_date" class="form-label">Designation Date:</label>
                        <div class="input-group input-group-sm has-validation">
                          <select class="form-select form-select-sm border-dark-subtle" name="designation" id="designation_date" required>
                                <option value="" disabled selected>Designation Select</option>
                                <option value="Administrative">Administrative</option>
                                <option value="Enforcement">Enforcement</option>
                                <option value="Engineering">Engineering</option>
                              </select>
                              <input type="number" class="form-control border-dark-subtle" name="salary_rate" id="designation_date" value="" placeholder="Salary Rate" required>
                              <input type="date" class="form-control border-dark-subtle" name="date_hired" id="designation_date" value="" placeholder="" required>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="valid_id" class="form-label">Valid ID`s:<span class="text-muted"> (Optional)</span></label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="number" class="form-control border-dark-subtle" name="sss_no" id="valid_id" value="" placeholder="SSS #">
                            <input type="number" class="form-control border-dark-subtle" name="phil_health_no" id="valid_id" value="" placeholder="Phil-Heath #">
                            <input type="number" class="form-control border-dark-subtle" name="gsis_no" id="valid_id" value="" placeholder="GSIS #">
                            <input type="number" class="form-control border-dark-subtle" name="pag_ibig_no" id="valid_id" value="" placeholder="Pag-Ibig #">
                            <input type="number" class="form-control border-dark-subtle" name="tin_no" id="valid_id" value="" placeholder="TIN #">
                        
                        </div>
                </div>
            </div>

            <div class="justify-content-between align-items-center pb-2 pt-3">
              <div class="col-sm-auto col-md-auto">
                <div class="form-check px-auto">
                    <input type="checkbox" class="form-check-input border-dark-subtle" name="" id="required" required>
                    <label for="required" class="form-check-label">Please check the cycle if your done.</label>
                    <button type="submit" class="btn btn-secondary btn-sm mx-1" name="submit">Submit button</button>
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
              <th scope="col">Employee Name</th>
              <th scope="col">Designation</th>
              <th scope="col">Email</th>
              <th scope="col">Contact #</th>
              <th scope="col">Date Hired</th>
              <th scope="col">Status</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php include_once ('./src/components/employees/Table/employee_registration_table.php');?>
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
