<?php 

include ('auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<?php include('sidenav.php'); ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include('nav.php'); ?>
                        <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Test Centres</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </thead>
                                        <?php 
        include('conn.php');
        $sql = "SELECT * FROM `test_center`";
        $query=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($query);
        if($num>0) {

        while($row=mysqli_fetch_array($query)){
        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['TC_id'] ?></td>
                                                <td><?php echo $row['Test_Center'] ?></td>
                                                <a href=""><td><button class="btn btn-info btn-fill">Delete</button></td></a>
                                            </tr>
                                            <?php 
        
    }
}
    else{
    echo "<tr>
<td colspan='6'><center>No Record</center></td></tr>";
    }
    ?>
                                       
                                        </tbody>
                                    </table>

<a href="AddtestCentre.php">                                  <button class="btn btn-info btn-fill pull-right">Add Test Centre</button></a>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Vaccine Centres</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </thead>
                                        <?php 
        include('conn.php');
        $sql = "SELECT * FROM `vacc_center`";
        $query=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($query);
        if($num>0) {

        while($row=mysqli_fetch_array($query)){
        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row['Vc_id'] ?></td>
                                                <td><?php echo $row['Vc_Center'] ?></td>
                                                <a href=""><td><button class="btn btn-info btn-fill">Delete</button></td></a>
                                            </tr>
                                            <?php 
        
    }
}
    else{
    echo "<tr>
<td colspan='6'><center>No Record</center></td></tr>";
    }
    ?>
                                       
                                        </tbody>
                                    </table>
                          <a href="AddVaccineCentre.php">          <button class="btn btn-info btn-fill pull-right"> Add Vaccine Centre</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
            <?php  
            include('footer.php');
            ?>
           </div>
    </div>
    <!--   -->
   <?php include('plugin.php'); ?>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
