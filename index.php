<?php require 'header.php'; ?>
<?php require 'sidebar.php'; ?>
<?php require 'topbar.php'; ?>

        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->  
          </div>

          <?php if (is_admin()){?>
          <!--=========== Admin Panel ==============-->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo total_users($db); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Balance</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo total_balance($db); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">New Insurance</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">22</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo pending_users($db); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Content Row Guideline -->
          <div class="row">
            <div class="col">
            <!-- Guideline-->
            <form>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">
                    <input type="text" name="guideTitle" class="form-control" value="এজেন্টদের গাইড লাইন এবং ব্যালেন্স নেওয়ার মাধ্যমঃ-">
                  </h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="color: #000;line-height: 30px;">
                    <textarea name="guideText" class="form-control" rows="30">
                      এজেন্ট প্রতিটা ইনস্যুরেন্সের জন্য গ্রহকের নিকট হতে ২৩৫/- টাকা নিবে (প্রতিটা ইনস্যুরেন্সে এজেন্টের কমিশন থাকবে ১০%  যা এজেন্টের একাউন্টে সাথে সাথে যোগ হয়ে যাবে), এজেন্টগণ ইনস্যুরেন্স সাবমিট করে ১৫ মিনিট পরে  অনলাইন কপি প্রিন্ট করে ৫ টাকার ডাক টিকিট লাগিয়ে গ্রাহককে দিবে, অনলাইন ইনস্যুরেন্স কপিতে কোন স্বাক্ষরের প্রয়োজন নেই এবং অনলাইন ইনস্যুরেন্স কপির সাথে কোন খাম দেওয়া হয় না। বীমার তথ্য নির্ভুল ভাবে পূরণ করার জন্য এজেন্টদেরকে অনুরোধ করা হলো। ছুটির দিন ব্যাতীত সকাল ৯:০০টা থেকে বিকাল ৪:০০ টা পর্যন্ত ইনস্যুরেন্স ডাউনলোড করা যাবে, অন্য সময় করে থাকলে পরবর্তী কার্য দিবসে কপি ডাউনলোড করতে হবে। সার্ভিসটি চালু করার জন্য আপনার ফেসবুক প্রফাইলে 'অনলাইনে মটর সাইকেলের ইনস্যুরেন্স করা হয়' মর্মে একটা বিজ্ঞাপন দিন,  আর  সাদা কাগজে লেখাটি প্রিন্ট করে প্রতিষ্ঠানে টাঙিয়ে রাখুন। আপনাদের সকল প্রকার টেকনিক্যাল সাপোর্ট দেওয়ার জন্য আমরা ২৪ ঘন্টাই প্রস্তুত রয়েছি। যেকোন সমস্যা সমাধানের জন্য নির্দিধায় আমাদের সাথে যোগাযোগ করুন।

                    এখানে নমুনা কপি দেখুনঃ (Click here) <br>



                    এজেন্ট ব্যলেন্স নেওয়ার জন্য ব্যাংক একাউন্ট সমূহঃ <br>

                    বিকাশ পারসোনাল----- 01735958695  --  (বিকাশে লেনদেন করলে কোন খরচ দিতে হবে না) ( সেন্ড মানি করতে হবে)<br>

                    মধুমতি ব্যাংক- --------111318200001831<br>

                    ব্যাংক এশিয়া----------- 1083481024152<br>

                    এনআরবি ব্যাংক------- 9981990009995<br>

                    ব্যালেন্স নেওয়ার সময় আপনার এজেন্ট আইডি সহ- 01735958695 এই নাম্বারে যোগাযোগ করুন অথবা ফেসবুক পেইজে ম্যাসেজ দিন। সাথে সাথে ব্যালেন্স পেয়ে যাবেন।<br>

                    আপনার একাউন্টে ব্যালেন্স না থাকলে ইনস্যুরেন্স করতে পারবেন না। <br>

                    ফেজবুক পেইজ লিংকঃ-   এখানে ক্লিক করুন<br>

                    এই সফটওয়্যারটি সম্পূর্ন ভাবে ইউনিয়ন ডিজিটাল সেন্টার থেকে পরিচালিত, আমাদের এজেন্ট হওয়ার জন্য কোন টাকা পয়সা নেওয়া হয় না, বাহিরের  কোন ব্যক্তি দ্বারা প্রতারিত না হওয়ার জন্য এজেন্টদেরকে সতর্ক হওয়ার জন্য বলা হলো, ভবিষ্যৎ প্রয়োজনে ব্যাংকের লেনদেনের ডকুমেন্টগুলো সংরক্ষনে রাখুন, ব্যালেন্স সংক্রান্ত জটিলতা প্রমাণে প্রয়োজন হতে পারে।<br>
                    </textarea>

                    <input type="submit" name="save" value="Save" class="btn btn-primary mt-5 px-5 float-right">
                  </div>
                </div>
              </div>
            </form>
            </div>
            
          </div>

          <?php }else {?>

          <!-- ============User Panel ================-->
          <div class="row">
            <!-- Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">My ID</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo "000".$_SESSION['memberID']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">My Balance (৳)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">500</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <a href="insuranceList.php">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Insurance List</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo total_insurance($db); ?></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            </a>

            <!-- Card  -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <a href="message.php">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">New Message</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo total_unseen_meg($db); ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            
          </div>


          <!-- Content Row Guideline -->
          <div class="row">
            <div class="col">
            <!-- Guideline-->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">এজেন্টদের গাইড লাইন এবং ব্যালেন্স নেওয়ার মাধ্যমঃ-</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive" style="color: #000;line-height: 30px;">
                  এজেন্ট প্রতিটা ইনস্যুরেন্সের জন্য গ্রহকের নিকট হতে ২৩৫/- টাকা নিবে (প্রতিটা ইনস্যুরেন্সে এজেন্টের কমিশন থাকবে ১০%  যা এজেন্টের একাউন্টে সাথে সাথে যোগ হয়ে যাবে), এজেন্টগণ ইনস্যুরেন্স সাবমিট করে ১৫ মিনিট পরে  অনলাইন কপি প্রিন্ট করে ৫ টাকার ডাক টিকিট লাগিয়ে গ্রাহককে দিবে, অনলাইন ইনস্যুরেন্স কপিতে কোন স্বাক্ষরের প্রয়োজন নেই এবং অনলাইন ইনস্যুরেন্স কপির সাথে কোন খাম দেওয়া হয় না। বীমার তথ্য নির্ভুল ভাবে পূরণ করার জন্য এজেন্টদেরকে অনুরোধ করা হলো। ছুটির দিন ব্যাতীত সকাল ৯:০০টা থেকে বিকাল ৪:০০ টা পর্যন্ত ইনস্যুরেন্স ডাউনলোড করা যাবে, অন্য সময় করে থাকলে পরবর্তী কার্য দিবসে কপি ডাউনলোড করতে হবে। সার্ভিসটি চালু করার জন্য আপনার ফেসবুক প্রফাইলে 'অনলাইনে মটর সাইকেলের ইনস্যুরেন্স করা হয়' মর্মে একটা বিজ্ঞাপন দিন,  আর  সাদা কাগজে লেখাটি প্রিন্ট করে প্রতিষ্ঠানে টাঙিয়ে রাখুন। আপনাদের সকল প্রকার টেকনিক্যাল সাপোর্ট দেওয়ার জন্য আমরা ২৪ ঘন্টাই প্রস্তুত রয়েছি। যেকোন সমস্যা সমাধানের জন্য নির্দিধায় আমাদের সাথে যোগাযোগ করুন।

                  এখানে নমুনা কপি দেখুনঃ (Click here) <br>



                  এজেন্ট ব্যলেন্স নেওয়ার জন্য ব্যাংক একাউন্ট সমূহঃ <br>

                  বিকাশ পারসোনাল----- 01735958695  --  (বিকাশে লেনদেন করলে কোন খরচ দিতে হবে না) ( সেন্ড মানি করতে হবে)<br>

                  মধুমতি ব্যাংক- --------111318200001831<br>

                  ব্যাংক এশিয়া----------- 1083481024152<br>

                  এনআরবি ব্যাংক------- 9981990009995<br>

                  ব্যালেন্স নেওয়ার সময় আপনার এজেন্ট আইডি সহ- 01735958695 এই নাম্বারে যোগাযোগ করুন অথবা ফেসবুক পেইজে ম্যাসেজ দিন। সাথে সাথে ব্যালেন্স পেয়ে যাবেন।<br>

                  আপনার একাউন্টে ব্যালেন্স না থাকলে ইনস্যুরেন্স করতে পারবেন না। <br>

                  ফেজবুক পেইজ লিংকঃ-   এখানে ক্লিক করুন<br>

                  এই সফটওয়্যারটি সম্পূর্ন ভাবে ইউনিয়ন ডিজিটাল সেন্টার থেকে পরিচালিত, আমাদের এজেন্ট হওয়ার জন্য কোন টাকা পয়সা নেওয়া হয় না, বাহিরের  কোন ব্যক্তি দ্বারা প্রতারিত না হওয়ার জন্য এজেন্টদেরকে সতর্ক হওয়ার জন্য বলা হলো, ভবিষ্যৎ প্রয়োজনে ব্যাংকের লেনদেনের ডকুমেন্টগুলো সংরক্ষনে রাখুন, ব্যালেন্স সংক্রান্ত জটিলতা প্রমাণে প্রয়োজন হতে পারে।<br>
                </div>
              </div>
            </div>
            </div>
            
          </div>

          <?php } ?>
          
        </div>
        <!-- /.container-fluid -->
<?php include 'footer.php'; ?>