<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'topbar.php'; ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Send Message</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <?php if(isset($_GET['act'])){ ?>
          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
              <!-- DataTales -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Send Message to <?php echo users_data($db,$_GET['id'],"email"); ?></h6>
              </div>
              <div class="card-body">
                <form action="" method="post">
                  <textarea class="form-control" rows="5" name="textMsg"></textarea>
                  <input type="submit" name="sensMsg" value="Send" class="btn btn-danger float-right mt-3 px-5">
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      
          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
              <!-- DataTales -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User List</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Send</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Send</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($db->query("SELECT * FROM members WHERE active_status = 'Yes'") as $row) {?>
                      <tr>
                        <td><?php echo '0000'.$row['memberID']; ?></td>
                        <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone_no'] ;?></td>
                        <td class="text-center">
                          <a href="?id=<?php echo $row['memberID']; ?>&act=msg">
                            <button class="btn btn-danger"><i class="fas fa-fw fa-envelope"></i> Send Message</button>
                          </a>
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