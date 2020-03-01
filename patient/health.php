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
                <h4 class="card-title text-info mb-4">Health Issues</h4>
                    <div class="modal-body">
                    <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mental Illness</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Rare Disease</a>
                    </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="" method="post">
                                                            <div class="form-row mt-4">
                                                                    <div class="form-group col-md-6">
                                                                    <label for="exampleFormControlSelect1">Illness
                                                                    </label>
                                                                    <select class="form-control" id="exampleFormControlSelect1" name="disease">
                                                                        <option value="" disabled selected hidden>Choose your Illness</option>
                                                                        <option value="anxiety">Anxiety</option>
                                                                        <option value="alzheimers">Alzheimers</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="symptoms">Symptoms</label>
                                                                        <input type="text" class="form-control"
                                                                            id="symptoms" placeholder="Specific the symptoms that you are having?" name='symptom'>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="semester">Years</label>
                                                                        <input type="tel" class="form-control"
                                                                            id="years" placeholder="For how many years you are having this disease?" name='year'>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name">Doctor's Name</label>
                                                                        <input type="text" class="form-control" id="name"
                                                                            placeholder="Name of the Doctor that diagnosed you with the disease" name='doctor'>
                                                                    </div>

                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="treatment">Treatment</label>
                                                                        <input type="text" class="form-control" id="treatment"
                                                                            placeholder="Sepcify the reatment that you are currently undergoing" name='treatment'>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="text">More</label>
                                                                        <input type="text" class="form-control" id="more"
                                                                            placeholder="Anything you want to add?" name='more'>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <button type="submit"
                                                                class="btn btn-primary" name="submit3">Seen</button>
                                                                <button type="submit"
                                                                class="btn btn-secondary" name="submit4">Not Seen</button>
                                                        </form>
                    </div><!-- tab 1-->
                    <?php 
                    if(isset($_POST['submit3'])||isset($_POST['submit4']) )
                    {
                        $disease=$_POST['disease'];
                        $symptom=$_POST['symptom'];
                        $year=$_POST['year'];
                        $treatment=$_POST['treatment'];
                        $more=$_POST['more'];
                        $doctor=$_POST['doctor'];
                        if(isset($_POST['submit3']))
                        {
                            $seen=1;
                        }
                        else
                        {
                            $seen=0;
                        }
                        $sql = "insert into health(disease,symptoms,years,dname,treaatment,more,seen) values('{$disease}','{$symptom}',{$year},'{$doctor}','{$treatment}','{$more}',{$seen})";
                        $result = mysqli_query($conn,$sql);
                    }
                    ?>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form action="" method="post">
                                                            <div class="form-row mt-4">
                                                                    <div class="form-group col-md-6">
                                                                    <label for="exampleFormControlSelect1">Illness
                                                                    </label>
                                                                    <select class="form-control" id="exampleFormControlSelect1" name="disease">
                                                                        <option value="" disabled selected hidden>Choose your Illness</option>
                                                                        <option value="psoriasis">Psoriasis</option>
                                                                        <option value="obesity">Obesity</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="symptoms">Symptoms</label>
                                                                        <input type="text" class="form-control"
                                                                            id="symptoms" placeholder="Specific the symptoms that you are having?" name="symptom">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="semester">Years</label>
                                                                        <input type="tel" class="form-control"
                                                                            id="years" placeholder="For how many years you are having this disease?" name="year">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name">Doctor's Name</label>
                                                                        <input type="text" class="form-control" id="name"
                                                                            placeholder="Name of the Doctor that diagnosed you with the disease" name="doctor">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="treatment">Treatment</label>
                                                                        <input type="text" class="form-control" id="treatment"
                                                                            placeholder="Sepcify the reatment that you are currently undergoing" name="treatment">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="text">More</label>
                                                                        <input type="text" class="form-control" id="more" name="more"
                                                                            placeholder="Anything you want to add?">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <button type="submit"
                                                                class="btn btn-primary" name="submit1">Seen</button>
                                                                <button type="submit"
                                                                class="btn btn-secondary" name="submit2">Not Seen</button>
                                                           
                                                        </form>
                    </div>
                    </div><!-- main content-->
                    <?php 
                    if(isset($_POST['submit1'])||isset($_POST['submit2']) )
                    {
                        $disease=$_POST['disease'];
                        $symptom=$_POST['symptom'];
                        $year=$_POST['year'];
                        $treatment=$_POST['treatment'];
                        $more=$_POST['more'];
                        $doctor=$_POST['doctor'];
                        if(isset($_POST['submit1']))
                        {
                            $seen=1;
                        }
                        else
                        {
                            $seen=0;
                        }
                        $sql = "insert into health(disease,symptoms,years,dname,treaatment,more,seen) values('{$disease}','{$symptom}',{$year},'{$doctor}','{$treatment}','{$more}',{$seen})";
                        $result = mysqli_query($conn,$sql);
                    }
                    ?>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Would you like to talk to another patient?</button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='doctorsuggest.php';">Would you like to refer doctor?</button>
                        </div>
                    </div>
                </div>
                  
                    <!-- card end(loop) -->
                </div>
            </div>
        </div>
    </div>
<!-- /.container-fluid -->

<?php include('../includes/footer.php');
            include('../includes/scripts.php');
      ?>