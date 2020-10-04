<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'topbar.php'; ?>
<?php 
  if (isset($_POST['submit'])) {
    $nameOfInsured = $_POST['nameOfInsured'];
    $fathersName = $_POST['fathersName'];
    $mobile = $_POST['mobile'];
    $permanentAddress = $_POST['permanentAddress'];
    $companyName = $_POST['companyName'];
    $RegNo = $_POST['RegNo'];
    $hp_cc = $_POST['hp_cc'];
    $typeOfBody = $_POST['typeOfBody'];
    $ton_sets = $_POST['ton_sets'];
    $yearOfMgf = $_POST['yearOfMgf'];
    $engineNo = $_POST['engineNo'];
    $chassisNo = $_POST['chassisNo'];
    $startDate = $_POST['startDate'];
    $fees = $_POST['fees'];



    // insert data
    //insert into database with a prepared statement
    $stmt = $db->prepare('INSERT INTO insurance(name_of_insured, father_name, mobile_no, address, vehicle_brand, reg_no, hp_cc, type_of_body, sets_ton, year_of_model, engine_no, chassis_no, start_date, entry_date,entry_time, fees, entry_user_id, status) VALUES (:name_of_insured, :father_name, :mobile_no, :address, :vehicle_brand, :reg_no, :hp_cc, :type_of_body, :sets_ton, :year_of_model, :engine_no, :chassis_no, :start_date, :entry_date, :entry_time, :fees, :entry_user_id, :status)');
    $stmt->execute(array(
        ':name_of_insured' => $nameOfInsured,
        ':father_name' => $fathersName,
        ':mobile_no' => $mobile,
        ':address' => $permanentAddress,
        ':vehicle_brand' => $companyName,
        ':reg_no' => $RegNo,
        ':hp_cc' => $hp_cc,
        ':type_of_body' => $typeOfBody,
        ':sets_ton' => $ton_sets,
        ':year_of_model' => $yearOfMgf,
        ':engine_no' => $engineNo,
        ':chassis_no' => $chassisNo,
        ':start_date' => $startDate,
        ':entry_date' => date("d-m-Y"),
        ':entry_time' => date("H:i:s"),
        ':fees' => $fees,
        ':entry_user_id' => $_SESSION['memberID'],
        ':status' => "No"
    ));


    $msg = "Insurance submited complete Goto <a href='insuranceList.php'>Insurance List</a> for Download Online Copy";

  }





 ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Insurance</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">New Insurance</div>
                  <div class="card-body">
                      <?php if (isset($msg)) {
                        echo '<div class="alert alert-success text-sm-center shadow-lg border border-secondary">'.$msg.'</div>';
                      } ?>
                      <form action="" method="post" class="was-validated">
                          <div class="form-row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="small mb-1 font-weight-bold" for="nameOfInsured">Name Of Insured <i class="text-danger">*</i></label>
                                      <input class="form-control" placeholder="Name Of Insured" name="nameOfInsured" type="text" id="nameOfInsured" required>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputFathersName">Fathers Name <i class="text-danger">*</i></label>
                                    <input class="form-control" placeholder="Fathers Name" name="fathersName" type="text" id="fathersName" required>
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="small mb-1 font-weight-bold" for="inputMobile">Mobile No <i class="text-danger">*</i></label>
                                     <input class="form-control" placeholder="Mobile No" name="mobile" type="text" id="mobile" required>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputAddress">Address<i class="text-danger">*</i></label>
                                    <input type="text" class="form-control" placeholder="Address" name="permanentAddress" id="permanentAddress" required>      
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="small mb-1 font-weight-bold" for="inputVehicleBrand">Vehicle Brand <i class="text-danger">*</i></label>
                              <input class="form-control" placeholder="Vehicle Brand Name" name="companyName" type="text" id="companyName" required>
                          </div>
                          <div class="form-row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="small mb-1 font-weight-bold" for="inputRegNo">Reg No <i class="text-danger">*</i></label>
                                      <input class="form-control" placeholder="Reg No" name="RegNo" type="text" id="RegNo" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputHPCC">HP/CC <i class="text-danger">*</i></label>
                                    <input class="form-control" placeholder="HP/CC" name="hp_cc" type="text" id="hp_cc" required>    
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                     <label class="small mb-1 font-weight-bold" for="inputTypeOfBody">Type Of Body <i class="text-danger">*</i></label>
                                    <select class="form-control" id="typeOfBody" name="typeOfBody" required>
                                      <option selected="selected" value="">Type Of Body</option>
                                      <option value="1">Motor Cycle</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputSetsTon">Sets / Tonnes <i class="text-danger">*</i></label>
                                    <select class="form-control" id="inputTonSet" name="ton_sets" required>
                                      <option selected="selected" value="">Please Select</option>
                                      <option value="1">5 Tonnes</option>
                                    </select>    
                                  </div>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="small mb-1 font-weight-bold" for="inputfee">Fees<i class="text-danger">*</i></label>
                              <input class="form-control" placeholder="Fees" name="fees" type="text" id="companyName" required>
                          </div>
                          <div class="form-row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="small mb-1 font-weight-bold" for="inputYearOfModel">Year Of Model <i class="text-danger">*</i></label>
                                  <input class="form-control" placeholder="Year Of Model" name="yearOfMgf" type="text" id="yearOfMgf" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputEngineNo">Engine No <i class="text-danger">*</i></label>
                                    <input class="form-control" placeholder="Engine No" name="engineNo" type="text" id="engineNo" required>    
                                  </div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputChassisNo">Chassis No <i class="text-danger">*</i></label>
                                    <input class="form-control" placeholder="Chassis No" name="chassisNo" type="text" id="chassisNo" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="small mb-1 font-weight-bold" for="inputStartDate">Start Date <i class="text-danger">*</i></label>
                                     <input class="form-control datetimepicker-input" placeholder="Start Date"  type="date" id="startDate" name="startDate" required>    
                                  </div>
                              </div>
                          </div>
                          <div class="form-group mt-4 mb-0">
                            <input type="submit" name="submit" class="btn btn-primary px-5" value="Submit">
                          </div>
                      </form>

                  </div>
                  <div class="card-footer text-center">
                      <div class="small"><a href="insuranceList.php">Go to Insurance List</a></div>
                  </div>
              </div>
          </div>
            
          </div>


        </div>
        <!-- /.container-fluid -->
<?php include 'footer.php'; ?>