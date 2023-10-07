<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/custom.css?date='.date("s"))?>">
</head>
<body>
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
<div class="container" style="margin-top: 100px;">
    <form action="<?php echo base_url('home/booking/'.$id)?>" method="post">
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" required placeholder="Enter Name" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobile" required placeholder="Enter Mobile Number" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="name" required placeholder="Enter Email" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label>Number Of Seats</label>
                <input type="text" name="numberofmember" placeholder="Enter Number of seats" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
               <button class="btn btn-danger" type="submit"> Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>

</body>
</html>