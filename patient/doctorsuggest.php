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
            <?php 
            $sql = "SELECT * FROM doctor";
            $result = mysqli_query($conn,$sql);
            //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            
            $count = mysqli_num_rows($result);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-6">
                                <p class="text-dark"><span>Name : </span><?php echo $row['name']; ?></p>
                                <p class="text-dark"> <span>Specialist : </span>Neurology</p>  
                            </div>
                            <div class="col-md-6">
                                <p class="text-dark"> <span>Email : </span><?php echo $row['email']?></p>
                                <p class="text-dark"> <span>Mobile No. : </span><?php echo $row['contact']; ?></p>
                                 <p class="text-dark"> <a href="http://localhost:3000/chat?name=<?php echo $row['name'];?>&room=<?php echo $row['contact'];?>"><span>Chat</span></a></p>
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