<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminlogin</title>
<!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
    <script>
        var BASE_URL ="<?php echo base_url(); ?>";
    </script>
</head>
<body>
    <div class="row" style ="margin-top:200px">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" >
            <h3 class="text-center" >ADMIN LOGIN</h3>
            <form action="">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="email" name = "email" id ="email" required class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name = "password" id ="password"required class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button class="btn btn-info btn-sm" id ="loginbutton">Login Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <script src="<?php echo base_url('assets/frontend/js/jquery.js')?>"></script>
<script src="<?php echo base_url('assets/frontend/js/bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/frontend/js/admin-login.js')?>"></script>
</body>
</html>