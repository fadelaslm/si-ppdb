<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url();?>assets/public/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/public/css/config-login.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/plugin/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css" />
       <script type="text/javascript" src="<?php echo base_url();?>assets/plugin/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            var base_url = "<?php echo base_url();?>";
        </script>
    </head>
   <body>
    <div class="container animated fadeIn">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url();?>assets/public/img/logo.png" />
            <p class="judul">Login App</p><hr>
            <?php echo form_open(base_url( 'app/auth' ), array( 'class' => 'form-signin'));?>
                <span id="auth" class="auth"></span>
                <?php echo $eror; ?>
                <input type="username" name="username" class="form-control frm-mtr" placeholder="Username" required autofocus><br>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="capcay">
                <?php echo$this->recaptcha->render(); ?>
                </div>
                <button type="submit" class="btn btn-primary " id="app-login">Login</button>
            <?php echo form_close();?>
            <br>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url();?>assets/public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/public/js/custom.js"></script>
</body>
</html>
