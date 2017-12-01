
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kendali Lampu</title>
    <link href="<?php echo base_url(); ?>manifest/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>manifest/css/bootstrap-theme.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kendali Lampu</a>
        </div>
        <!-- <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div> -->
      </div>
    </nav>
    <div class="container-fluid" style="margin-top: 60px;">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">Login Administrator</div>
            </div>
            <div class="panel-body">
              
              <form method="POST" action="<?php echo base_url(); ?>index.php/Apps/login">
              <?php
              $info = $this->session->flashdata('msg');
              if ($info) {
                # code... ?>
               <div class="alert alert-danger"><?php echo $info; ?></div>
              <?php }
               ?>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control"  name="username" placeholder="Username" aria-describedby="basic-addon1" required autofocus="">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-eye-close"></span></span>
                  <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1" required>
                </div>
                <br>
                <input type="submit" class="btn btn-primary form-control"  aria-describedby="basic-addon1" value="Login">
                <br>  
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>/manifest/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/manifest/js/bootstrap.min.js"></script>
  </body>
</html>
