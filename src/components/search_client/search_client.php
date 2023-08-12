<main class="col-md-9 ms-sm-auto col-lg-10 px-md-3" id="integration">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Search Client</h1>
      </div>

      <div class="justify-content-between align-items-center pb-2 mb-3 border-bottom">
        <form class="" action="" method="POST">
            <div class="row gx-1  flex flex-wrap">
                <div class="col-auto">
                    <label for="Search" class="form-label">Input Information:</label>
                        <div class="input-group input-group-sm">
                            <input type="search" class="form-control border-dark-subtle" name="search_client" id="Search" placeholder="&#128269">
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
              <th scope="col">Ticket</th>
              <th scope="col">Client Name</th>
              <th scope="col">Violation</th>
              <th scope="col">Date Apprehend</th>
              <th scope="col">Officer Name</th>
              <th scope="col">Date Transaction</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php include_once ('./src/api/api_search.php');?>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
