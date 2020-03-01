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
                    $sql = "SELECT * FROM patient WHERE uname = '{$_SESSION['login_user']}'";
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
                                    <label for="exampleInputUsername1">Age</label>
                                    <input type="number" class="form-control" id="exampleInputUsername1"
                                        placeholder="Age" name="age">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Gender
                                  </label>
                                  <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                  <option value="" disabled selected hidden>Choose your gender</option>
                                    <option value='male'>Male</option>
                                    <option value='female'>Female</option>
                                    <option value='others'>Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Height</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Height in cm" name="height">
                                </div>
                            </div>
                            <div class=" col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Blood Group
                                  </label>
                                  <select class="form-control" id="exampleFormControlSelect1" name="bgrp">
                                  <option value="" disabled selected hidden>Choose your blood group</option>
                                  <option>A RhD positive (A+)</option>
                                      <option value='A-negative'>A RhD negative (A-)</option>
                                      <option value='B-positive'>B RhD positive (B+)</option>
                                      <option value='B-negative'>B RhD negative (B-)</option>
                                      <option value='O-positive'>O RhD positive (O+)</option>
                                      <option value='O-negative'>O RhD negative (O-)</option>
                                      <option value='AB-positive'>AB RhD positive (AB+)</option>
                                      <option value='AB-negative'>AB RhD negative (AB-)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Weight</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name ="weight" placeholder="In kg">
                                </div>
                            </div>
                            <div class=" col-md-6">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Allergies</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="If Any" name="allergies">
                                </div>
                            </div>
                               
                            </div>
                            <div class=" col-md-6">

                                <button name="submit1" type="submit" class=" btn btn-success btn-sm mr-2">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <?php 
                if(isset($_POST['submit1']))
                {
                    $age=$_POST["age"];
                    $gender=$_POST["gender"];
                    $height=$_POST["height"];
                    $allergies=$_POST["allergies"];
                    $weight=$_POST["weight"];
                    $brgp=$_POST["bgrp"];
                    $sql = "insert into patient_bio(age,bloodgrp,height,weight,allergies,gender,uname) values({$age},'{$brgp}',{$height},{$weight},'{$allergies}','{$gender}','{$_SESSION['login_user']}')";
      $result = mysqli_query($conn,$sql);
                }
                ?>
                <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Emergency contact</h3>
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
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Mobile Number
                                  </label>
                                  <input type="number" class="form-control" id="exampleInputUsername1"
                                        placeholder="1234567890" name="mobile">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Relation</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Relation" name="relation">
                                </div>
                            </div>
                            
                        </div>
                        <div class=" col-md-6">

                                <button name="submit2" type="submit" class=" btn btn-success btn-sm mr-2">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <?php 
                if(isset($_POST['submit2']))
                {
                    $relation=$_POST['relation'];
                    $mobile=$_POST['mobile'];
                    $name=$_POST['name'];
                    $sql = "insert into emergency(name,contact,relation,uname) values('{$name}',{$mobile},'{$relation}','{$_SESSION['login_user']}')";
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