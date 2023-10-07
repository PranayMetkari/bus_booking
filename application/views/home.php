<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css?date='.date("s"))?>">
</head>
<body style="height: 1500p;">
<nav class="navbar navbar-expand-sm- bg-dark navbar-dark fixed-top">
     <a style="font-size: 30px;"  class="navbar-brand"  href="#">PM^2 Travales</a>
     <div class="nav-links" id="navLinks">
                <!-- <i class="fa-solid fa-xmark" onclick="hideMenu()"></i> -->
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">HELP</a></li>
                </ul>
            </div>
</nav>
<div ba>
<img style="height: 550px; width: 100%;" src="assets\frontend\images\img1.jpg" alt="image">
<div style="background: grey;"class="form-container">
    <form action="<?php  echo base_url("/")?>" method="get">
        <div style="background: #808080;
                    margin-right: 5%;
                    margin-left: 5%;
                    padding-bottom: 2%;
                    padding-top: 2%;
                    border-radius: 20px;"  class="row ">
            <div class="col-sm-4">
             <div class="form-group">
                <label style="font-weight: bold;"> Select From Location</label>
                <select name="start" class="form-control" required>
                    <option value=""> Select From Location</option>
                    <?php
                    foreach($locations as $loc) {
                    ?>
                       <option value="<?php echo $loc['id']?>"><?php echo $loc['name']?></option> 
                    <?php      
                    }     
                    ?>
                </select>
             </div>
            </div>
            <div class="col-sm-4">
             <div class="form-group">
                <label style="font-weight: bold;"> Select To Location</label>
                <select name="end"  class="form-control" required>
                    <option value=""> Select To  Location</option>
                    <?php
                    foreach($locations as $loc) {
                    ?>
                       <option value="<?php echo $loc['id']?>"><?php echo $loc['name']?></option> 
                    <?php      
                    }     
                    ?>
                </select>
             </div>
            </div>
            <div class="col-sm-3">
             <div class="form-group">
                <label style="font-weight: bold;"> Date</label>
                <input type="Date" name="date" class="form-control" required >
             </div>
            </div>
            <div class="col-sm-1 pt-4 ">
             <div class="form-group pt-2">
                   <button  type="submit" class="btn btn-danger">SEARCH</button>
             </div>
            </div>
        </div>
    </form>    
</div>
</div>
<div class="container" style="margin-top: 80px; margin-bottom:20px">
<?php
if(count($schedules) > 0){
foreach($schedules as $schedule) {
?>
<div class="card custom-card" style=" margin-bottom:10px;">
    <div style="padding-top: 33px; padding-left: 33px; display:flex;">
        <div style="width: 30%;"><h3 style="font-size:30px;"><?php echo $schedule['bus_number']?></h3>
          <p><?php echo $schedule['date']?></p></div>
        <div style="width: 20%;">From : <?php 
        foreach($locations as $loc){
            if($loc['id'] == $schedule['start']){
                echo $loc['name']; 
            }
        }
        ?></div>
        <div style="width: 15%;">To : <?php
          foreach($locations as $loc){
            if($loc['id'] == $schedule['end']){
                echo $loc['name']; 
            }
        }?></div>
        <div style="width: 20%;"><?php echo $schedule['amount']?></div>
        <div style="width: 20%;"><a href="<?php echo base_url("home/booking/".$schedule['id'])?>" class="btn btn-danger">Book Now</a></div>
    </div>
</div>
<?php
} } else {
?>
    <div class="card custom-card">
        <div style="padding-top: 33px; padding-left: 33px; text-align: center;">
        <h3 >Result No Found | Please Search Location For More !!!!</h3>
    </div>
<?php   
}
?>
</body>
</html>