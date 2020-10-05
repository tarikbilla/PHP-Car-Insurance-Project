<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'topbar.php'; ?>
<?php 
  if (isset($_POST['sensMsg'])) {

    $msgTitle = $_POST['msgTitle'];
    $msg = $_POST['textMsg'];

    //insert into database with a prepared statement
    $stmt = $db->prepare('INSERT INTO message(user_id, sender_id, msg_title, msg_description, msg_date, msg_time,seen_status) VALUES (:user_id, :sender_id, :msg_title, :msg_description, :msg_date, :msg_time,:seen_status)');
    $stmt->execute(array(
        ':user_id' => $_GET['id'],
        ':sender_id' => $_SESSION['memberID'],
        ':msg_title' => $msgTitle,
        ':msg_description' => $msg,
        ':msg_date' => date("d-m-Y"),
        ':msg_time' => date("H:i:s"),
        ':seen_status' => 'No',
      ));
     $msg = "Message Send Successfull!";
  }
 ?>



      <?php if (is_admin()){?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Send Message</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
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
                <?php 
                if (isset($msg)) {
                  echo '<div class="card-header text-success">'.$msg.'</div>';
                } ?>
                <form action="" method="post">
                  <div class="form-group">
                    <label class="small mb-1 font-weight-bold" for="inputPassword">Title</label>
                    <input class="form-control " name="msgTitle" id="inputTitle" type="text" placeholder="Enter Title" required/>
                </div>
                  <div class="form-group">
                    <label class="small mb-1 font-weight-bold" for="inputMessege">Messege</label>
                  <textarea class="form-control" rows="5" name="textMsg" placeholder="Messege Here..."></textarea>
                </div>
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
                  <table class="table table-striped table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Total Sent</th>
                        <th>Send</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Total Sent</th>
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
                        <td><?php echo total_meg_send($db,$row['memberID']) ;?></td>
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

      <?php }else{ ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">My Message</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
      
          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
              <?php foreach ($db->query("SELECT * FROM message WHERE user_id=".$_SESSION['memberID']." ORDER BY id DESC") as $row) { ?>
              <!-- single Message -->
            <div class="card shadow mb-4">
              <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary d-inline">
                  <i class="fas fa-fw fa-envelope text-danger"></i> <?php echo $row['msg_title'] ?>
                </h6>
                <h6 class="m-0 font-weight-bold d-inline float-right"><?php echo $row['msg_date']." / ".$row['msg_time'] ?></h6>
              </div>
              <div class="card-body">
                <?php echo $row['msg_description'] ?>
              </div>
            </div>
            <?php } ?>
            </div>
            
          </div>

        </div>
        <!-- /.container-fluid -->

      <?php } ?>
<?php include 'footer.php'; ?>