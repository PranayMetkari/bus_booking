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
                    <li><a href="<?php echo base_url("bus-booking/home")?>">HOME</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">HELP</a></li>
                </ul>
            </div>
</nav>
<div class="contaner" style="margin-top: 100px;">
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .f-card{
        margin-top: 20px;
        background: white;
        padding: 25px;
        border-radius: 5px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>Your Seat is Book Successfuly;<br/>For Bill Cheak Your Email</p>
      </div>
    </body>
    <footer>
        <div class="f-card">
            <h3>Thank you for Visiting Our Website</h3>
        </div>
    </footer>
</html>
</div>