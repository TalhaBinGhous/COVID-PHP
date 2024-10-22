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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Covid Test Appointment details</h4>
                                    <hr>
                                </div>
                                <?php 
        include('conn.php');
        $A_ID=$_GET['id'];

        $sql = "SELECT * FROM covid_appointments 
        JOIN test_center ON covid_appointments.TC_id = test_center.TC_id 
        JOIN ct_type ON covid_appointments.CT_id = ct_type.CT_id 
        WHERE covid_appointments.A_id = '$A_ID' AND   stratum = 'Pending'  "; // Filter by A_id
        $query=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($query);
        if($num>0) {

        while($row=mysqli_fetch_array($query)){
        ?>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Patient Name</label>
                                                    <input type="text" class="form-control" readonly="" placeholder="" value="<?php echo $row['P_Name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Patient Email</label>
                                                    <input type="text" class="form-control"  value="<?php echo $row['P_Email'] ?>" readonly>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <!-- <label></label> -->
                                                    <!-- <input type="text" class="form-control" placeholder="Username" value="michael23"> -->
                                                </div>
                                                
                                            </div>
                                           
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Test Centre</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="<?php echo $row['Test_Center'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Test Type</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $row['CT_Type'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <!-- <label></label> -->
                                                    <!-- <input type="text" class="form-control" placeholder="Username" value="michael23"> -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Test Date</label>
                                                    <input type="text" class="form-control" placeholder="City" value="<?php echo  $row['TestDate'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Test Time</label>
                                                    <input type="text" class="form-control" placeholder="Country" value="<?php echo  $row['AppointedAt'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><form action="send.php" method="POST">
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    

                                        <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="" value="<?php echo $row['P_Email']?>">
                                                </div>
                                                
                                            </div>
                                        </div>
                              
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"  >
                                                </div>
                                            </div>
                                    
                                            <div class="col-md-4 pr-1">
                                            <div class="form-group">
  <input class="form-control" placeholder="Report"type="text" name="message" id="message">
  <style>
    .cta {
  position: relative;
  margin: auto;
  padding: 12px 18px;
  transition: all 0.2s ease;
  border: none;
  background: none;
  cursor: pointer;
}

.cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 50px;
  background: #b1dae7;
  width: 45px;
  height: 45px;
  transition: all 0.3s ease;
}

.cta span {
  position: relative;
  font-family: "Ubuntu", sans-serif;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.05em;
  color: #234567;
}

.cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #234567;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
}

.cta:hover:before {
  width: 100%;
  background: #b1dae7;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active {
  transform: scale(0.95);
}

  </style>

<?php 
    $email = $row['A_id'];
    $sql2="UPDATE `covid_appointments` SET `stratum`='Approved' WHERE  A_id=$email";
    $QUERY2=mysqli_query($conn,$sql2);


?>
  <br><br>
  <button class="cta" type="submit" name="send">
  <span>Send</span>
  <svg width="15px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button>
</form>
</div>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        <?php 
        
    }
}
    else{
    echo "<tr>
<td colspan='6'><center>No Record</center></td></tr>";
    }
    ?>
                                    </form>
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
