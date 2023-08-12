<main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" id="integration">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Transaction View</h1>
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
      <?php include_once ('./src/api/api_transaction_view.php');?>
      <?php include_once ('./src/api/api_transaction_update.php');?>
        <form class="needs-validation" action="" method="POST" novalidate="">
            <div class="row gx-1  flex flex-wrap">
                <div class="col-auto">
                    <label for="invoice" class="form-label">Invoice:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="number" class="form-control border-dark-subtle" name="ticket_no" id="invoice" value="<?php echo $Ticket_No;?>" placeholder="Ticket No." required>
                            <input type="number" class="form-control border-dark-subtle" name="official_receipt_no" id="invoice" value="<?php echo $Official_Receipt_No;?>" placeholder="Official Receipt" required>
                            <input type="date" class="form-control border-dark-subtle" name="data_transaction" id="invoice" value="<?php echo $Date_Transaction;?>" placeholder="Date Transaction" required>
                        </div>
                </div>

                <div class="col-auto">
                    <label for="payment_transaction" class="form-label">Payment Transaction:</label>
                        <div class="input-group input-group-sm has-validation">
                            <input type="number" class="form-control border-dark-subtle" name="original_amount_payment" id="payment_transaction" value="<?php echo $Amount_Payment;?>" placeholder="Original Amount" required>
                            <input type="number" class="form-control border-dark-subtle" name="discounted_amount_payment" id="payment_transaction" value="<?php echo $Discount_Amount_Payment;?>" placeholder="Discounted Amount" required>
                            <input type="text" class="form-control border-dark-subtle" name="discount_serial_no" id="payment_transaction" value="<?php echo $Discount_Ticket_No;?>" placeholder="Discount Serial No." required>
                            <select class="form-select form-select-sm border-dark-subtle" name="transact_type" id="payment_transaction" required>
                            <option value="<?php echo $Transaction;?>" class="text-light bg-secondary" selected><?php if($Transaction){echo $Transaction;}else{echo 'Transact select';}?></option>
                            <option value="Paid">Paid Original Price</option>
                            <option value="Discounted M.O.">Discounted M.O.</option>
                            <option value="Released">Released</option>
                            <option value="Surrender Muffler">Surrender Muffler</option>
                            </select>
                        </div>
                </div>
            </div>

            <div class="justify-content-between align-items-center pb-2 pt-3">
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
              <th scope="col">Amount Payment</th>
              <th scope="col">Discount Payment</th>
              <th scope="col">Discount Ticket</th>
              <th scope="col">Official Receipt</th>
              <th scope="col">Transaction</th>
              <th scope="col">Date Transaction</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php include_once ('./src/components/transaction/table/transaction_table.php');?>
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
