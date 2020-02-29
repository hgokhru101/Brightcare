<?php include('../includes/header.php');?>

<?php include('sidebar.php');?>

<?php include('../includes/topbar.php');?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card mt-2">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-info mb-4">My Pofile</h4>
                    <div class="row">
                    <div class="col-md-4">
                    <img src="../vendor/img/person1.jpg" class="rounded-circle mx-auto d-block mb-4" alt="..."
                        width="100em" height="100em">
                    </div>
                    <div class="col-md-6">
                      <div class="row">
                        <div class="col-md-6">
                        <p class="text-danger">Name Surname</p>
                        <p class="text-dark"> <span>Email : </span>email@gmail.com</p>
                        </div>
                        <div class="col-md-6">
                        <p class="text-dark"> <span>Department : </span>Computer </p>
                        <p class="text-dark"> <span>Mobile No. : </span>1234567890</p>
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
                            <h3 class="mb-0">My account (part-1)</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-sm btn-primary">Edit</button>
                        </div>

                    </div>

                    <form class="forms-sample mt-4" action="">
                        <p class="card-description"> General Settings </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Age</label>
                                    <input type="number" class="form-control" id="exampleInputUsername1"
                                        placeholder="Age">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Gender
                                  </label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Height</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Height in cm">
                                </div>
                            </div>
                            <div class=" col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Blood Group
                                  </label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                  <option>A RhD positive (A+)</option>
                                      <option>A RhD negative (A-)</option>
                                      <option>B RhD positive (B+)</option>
                                      <option>B RhD negative (B-)</option>
                                      <option>O RhD positive (O+)</option>
                                      <option>O RhD negative (O-)</option>
                                      <option>AB RhD positive (AB+)</option>
                                      <option>AB RhD negative (AB-)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Allergies</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="If Any">
                                </div>
                            </div>
                            <div class=" col-md-6">

                               
                            </div>
                            <div class=" col-md-6">

                                <button type="submit" class=" btn btn-success btn-sm mr-2">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                <div class="col-md-12 grid-margin stretch-card mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">My account (part-2)</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-sm btn-primary">Edit</button>
                        </div>

                    </div>

                    <form class="forms-sample mt-4" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Mobile Number
                                  </label>
                                  <input type="number" class="form-control" id="exampleInputUsername1"
                                        placeholder="1234567890">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Relation</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        placeholder="Relation">
                                </div>
                            </div>
                            
                        </div>
                        <div class=" col-md-6">

                                <button type="submit" class=" btn btn-success btn-sm mr-2">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                </div>
                    <!-- card end(loop) -->
    </div>

</div>
<!-- /.container-fluid -->

<?php include('../includes/footer.php');
            include('../includes/scripts.php');
      ?>