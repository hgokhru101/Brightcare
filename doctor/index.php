<?php include('../includes/header.php');
include('../config.php');
session_start();
?>

<?php include('sidebar.php');?>

<?php include('../includes/topbar.php');?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card mt-2">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-info mb-4">My Profile</h4>
                    <div class="row">
                    <div class="col-md-4">
                    <img src="../vendor/img/person1.jpg" class="rounded-circle mx-auto d-block mb-4" alt="..."
                        width="100em" height="100em">
                    </div>
                    <?php 
                    $sql = "SELECT * FROM doctor WHERE uname = '{$_SESSION['login_user']}'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);
                    if($count==1)
                    {
                    ?>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                        <p class="text-danger"><?php 
                        echo"{$row['name']}";
                        ?></p>
                        <p class="text-dark"> <span>Email : </span><?php echo"{$row['email']}";?></p>
                        </div>
                        <div class="col-md-6">
                        <p class="text-dark"> <span>Mobile No. : </span><?php echo"{$row['contact']}";}?></p>
                        </div>
                      </div>
                    
                   
                    </div>
                    </div>
                    
                  


                </div>
            </div>
            
            </div>
       
       
        <div class="col-md-12 grid-margin stretch-card mt-2">
        <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">My Account</h3>
                        </div>
                       

                    </div>
                    </div>
                    </div>
                    </div>
        <!-- card start(loop) -->
        </div>
        <div class="row">
        <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">General Info</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-sm btn-primary">Edit</button>
                        </div>

                    </div>

                    <form class="forms-sample mt-4" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Age">Age</label>
                                    <input type="number" name="age" class="form-control" id="age"
                                        placeholder="Age">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="form-group">
                                <label for="gender">Gender
                                  </label>
                                  <select name="gender" class="form-control" id="gender">
                                  <option value="" disabled selected hidden>Choose your Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="speciality">Speciality</label>
                                    <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Specialist in ?">
                                </div>
                            </div>
                            <div class=" col-md-6">
                            <div class="form-group">
                                <label for="about">About Me</label>
                                <input type="text" name="aboutus" class="form-control" id="aboutus" placeholder="About Us">
                            </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                           
                            
                            <div class=" col-md-6">

                                <button type="submit" class=" btn btn-success btn-sm mr-2" name="submit1">Save</button>
                            </div>
                        </div>
                    </form>
                    <?php 
                if(isset($_POST['submit1']))
                {
                    $age=$_POST["age"];
                    $gender=$_POST["gender"];
                    $speciality=$_POST["speciality"];
                    $aboutme=$_POST["aboutus"];
                    $sql = "insert into doctor_bio(age,gender,specialty,aboutme,uname) values({$age},'{$gender}','{$speciality}','{$aboutme}','{$_SESSION['login_user']}')";
      $result = mysqli_query($conn,$sql);
                }
                ?>

                </div>
                </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card mt-2 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Contact Information</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-sm btn-primary">Edit</button>
                        </div>

                    </div>

                    <form class="forms-sample mt-4" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Clinic/Hospital Name">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Mobile Number
                                  </label>
                                  <input type="number" name="mobile" class="form-control" id="mobile"
                                        placeholder="Clinic/Office number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                                        
                            <div class=" col-md-6">
                            <div class="form-group">
                                <label for="timings">Start Timings</label>
                                <input type="text" class="form-control" id="starttime" placeholder="Start Time" name="stime">
                            </div>
                               
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="timings">Close Timings</label>
                                    <input type="text" class="form-control" id="endtime" placeholder="End Time" name="etime">
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-6">

                                <button type="submit" class=" btn btn-success btn-sm mr-2" name="submit2">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <?php 
                if(isset($_POST['submit2']))
                {
                    $etime=$_POST["etime"];
                    $stime=$_POST["stime"];
                    $mobile=$_POST['mobile'];
                    $name=$_POST['name'];
                    $sql = "insert into doctorinfo(name,contact,stime,etime,uname) values('{$name}',{$mobile},'{$stime}','{$etime}','{$_SESSION['login_user']}')";
                    $result = mysqli_query($conn,$sql);
                }
                ?>    
                    <!-- card end(loop) -->
    </div>

</div>
<!-- /.container-fluid -->

<?php include('../includes/footer.php');
            include('../includes/scripts.php');
      ?>