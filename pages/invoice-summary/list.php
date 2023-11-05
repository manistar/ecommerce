    <!-- BEGIN: Content-->
    <div class="">
      <div class="content-header row">
        <div class="content-header-dark bg-img col-12">
          <div class="row">
            <div class="content-header-left col-md-9 col-12 mb-2">
              <h3 class="content-header-title white">Invoice Summary</h3>
              <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Invoice</a>
                    </li>
                    <li class="breadcrumb-item active">Invoice Summary
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="content-header-right col-md-3 col-12">
              <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item" href="component-progress.html"> Progress</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-body"><section id="invoice-summary">
  <!-- Total Receivables -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Total Receivables</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content collapse show">
      <div class="card-body overflow-hidden row">
        <div class="col-md-9 col-sm-12 border-right-grey border-right-lighten-2">
          <div id="invoice-total-recievables" class="height-400"></div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 1200.00</h5>
              <p class="list-group-item-text">Current</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 450.00</h5>
              <p class="list-group-item-text">Overdue by 1-15 days</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 250.00</h5>
              <p class="list-group-item-text">Overdue by 16-30 days</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 150.00</h5>
              <p class="list-group-item-text">Overdue by 31-45 days</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 50.00</h5>
              <p class="list-group-item-text">Overdue by 45+ days</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Receivables -->
  <!--/ Sales and Expenses -->
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Sales and Expenses</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
      <div class="heading-elements">
        <div class="dropdown">
          <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            This Fiscal Year
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Previous Fiscal Year</a>
            <a class="dropdown-item" href="#">Last 12 Months</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body overflow-hidden row">
        <div class="col-md-9 col-sm-12 border-right-grey border-right-lighten-2">
          <div id="sales-and-expenses" class="height-300"></div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 12080.00</h5>
              <p class="list-group-item-text primary">Total Sales</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 8500.00</h5>
              <p class="list-group-item-text success">Total Receipts</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h5 class="list-group-item-heading">$ 560.00</h5>
              <p class="list-group-item-text warning">Total Expenses</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Sales and Expenses -->
  <div class="row">
    <!-- Your Top Expenses -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Your Top Expenses</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
          <div class="heading-elements">
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                This Fiscal Year
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <a class="dropdown-item" href="#">Previous Fiscal Year</a>
                <a class="dropdown-item" href="#">Last 12 Months</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-content">
          <div class="card-body ">
            <div id="your-top-expenses" class="height-250"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Your Top Expenses -->
    <!-- Sales, Receipts and Dues -->
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sales, Receipts and Dues</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body  px-0 py-0">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>Sales</th>
                    <th>Receipts</th>
                    <th>Due</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Today</th>
                    <td>$ 250.00</td>
                    <td>$ 200.00</td>
                    <td>$ 50.00</td>
                  </tr>
                  <tr>
                    <th scope="row">This Week</th>
                    <td>$ 450.00</td>
                    <td>$ 300.00</td>
                    <td>$ 150.00</td>
                  </tr>
                  <tr>
                    <th scope="row">This Month</th>
                    <td>$ 800.00</td>
                    <td>$ 600.00</td>
                    <td>$ 200.00</td>
                  </tr>
                  <tr>
                    <th scope="row">This Quarter</th>
                    <td>$ 1200.00</td>
                    <td>$ 950.00</td>
                    <td>$ 250.00</td>
                  </tr>
                  <tr>
                    <th scope="row">This Year</th>
                    <td>$ 1500.00</td>
                    <td>$ 1200.00</td>
                    <td>$ 300.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sales, Receipts and Dues -->
  </div>
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->