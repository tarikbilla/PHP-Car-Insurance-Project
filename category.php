<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'topbar.php'; ?>


<?php 
  if (isset($_POST['create'])) {
    $catname = $_POST['catname'];
    $catParents = $_POST['catParents'];
    $amount = $_POST['amount'];


   //insert into database with a prepared statement
    $stmt = $db->prepare('INSERT INTO categories(name, parents, amount, created_date, created_user) VALUES (:name, :parents, :amount, :created_date, :created_user)');
    $stmt->execute(array(
        ':name' => $catname,
        ':parents' => $catParents,
        ':amount' => $amount,
        ':created_date' => date("d-m-Y"),
        ':created_user' => $_SESSION['memberID']
      ));

     $msg = "New Category Added!";

  }

 ?>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          
          <div class="row">
            <div class="col p-4">
              <a href="?add" class="btn btn-sm btn-primary shadow"><i class="fas fa-plus fa-sm text-white-50"></i> Add New Categorie</a>
            </div>
          </div>


          <?php if (isset($_GET['add'])) {?>
          <div class="row">
            <div class="col-6">
              <!-- add Categories -->
              <div class="card shadow mb-4">
                <?php 
                if (isset($msg)) {
                  echo '<div class="card-header text-success">'.$msg.'</div>';
                } ?>
                <div class="card-body">
                  <form action="" method="post" >
                    <div class="form-group">
                      <label class="small mb-1 font-weight-bold" for="inputCategorie">Categorie Name</label>
                      <input class="form-control" name="catname" id="inputCategorie" type="text" placeholder="Enter Categorie Name" required/>
                    </div>
                    <div class="form-group">
                      <label class="small mb-1 font-weight-bold" for="inputPassword">Select Parents</label>
                      <select name="catParents" class="form-control" id="inputCatParents">
                        <option value="" selected>Please Select</option>
                        <?php foreach ($db->query("SELECT * FROM categories") as $row) { ?>
                        <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                         <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="small mb-1 font-weight-bold" for="inputAmount">Amount (৳)</label>
                      <input class="form-control" name="amount" id="inputAmount" type="test" placeholder="Enter Amount " required/>
                    </div>
                      <button type="submit" class="btn btn-primary mb-2" name="create">Create</button>

                  </form>
                </div>
              </div>
            </div>
        </div>
        <?php } ?> 
          <!-- Content Row -->
          <div class="row">
            <div class="col">
              <!-- DataTales -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Parents</th>
                        <th>Amount</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Parents</th>
                        <th>Amount</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php foreach ($db->query("SELECT * FROM categories") as $row) { ?>
                      <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['parents']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td class="text-center"><a href="?id=<?php echo $row['id'];?>&act=edit"><i class="fas fa-edit"></i></a></td>
                        <td class="text-center"><a href="?id=<?php echo $row['id'];?>&act=del"><i class="fas fa-trash text-danger"></i></a></td>
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