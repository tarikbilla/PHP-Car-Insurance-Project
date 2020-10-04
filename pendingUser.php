<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'topbar.php'; ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pending Users</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

    
          <!-- Content Row -->
          <div class="row">
            <div class="col">
              <!-- DataTales -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($db->query("SELECT * FROM members WHERE active_status = 'No'") as $row) { ?> 
                      <tr>
                        <td><?php echo $row['memberID']; ?></td>
                        <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_no']; ?></td>
                        <td>
                          <form method="get">
                            <div class="input-group mb-3">
                              <input type="text" name="id" hidden="" value="<?php echo $row['memberID']; ?>">
                              <div class="input-group-prepend">
                                <select name="act" id="pendingUserStatus">
                                  <option value="accept" class="btn-success">Accept</option>
                                  <option value="block" class="btn-danger">Block</option>
                                </select>
                              </div>
                              <input type="submit" value="ok" class="btn-primary">
                            </div>
                          </form>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
            
          </div>



        </div>
        <!-- /.container-fluid -->
<?php include 'footer.php'; ?>