<?php include('../includes/header.php');
include('../config.php');
session_start();
?>

<?php include('sidebar.php');?>

<?php include('../includes/topbar.php');?>

<!-- Begin Page Content -->
<?php 
$sql="SELECT patient.name,patient.contact,patient.email,patient.rname FROM docpatient,patient where docuname='{$_SESSION['login_user']}' AND patuname=patient.uname";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {
?>
<div class="container-fluid">

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card mt-2">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-6">
                                <p class="text-dark"><span>Name : </span><?php echo $row['name'];?></p>
                                <p class="text-dark"> <span>Email : </span><?php echo $row['email']?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-dark"> <span>Mobile No. : </span><?php echo $row['contact']; ?></p>
                                <p class="text-dark"> <a href="http://localhost:3000/chat?name=<?php echo $row['name'];?>&room=<?php echo $row['rname']; ?>"> <span>Chat</span></a></p>
                                <p class="text-dark"> <a href="http://localhost:3000/chat?name=<?php echo $_SESSION['login_user'];?>&room=<?php echo $row['rname']; ?>" target="_blank"> <span>Chat</span></a></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
</div>
<?php }?>
</div>

<!-- /.container-fluid -->

<?php include('../includes/footer.php');
            include('../includes/scripts.php');
      ?>