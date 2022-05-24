<?php
if (!isset($_COOKIE['loginUser'])) {
    header("location:../login/");
}
$user =$_COOKIE['loginUser'];
include '../dbs/config.php';

$sql = mysqli_query($link,"select * from Users where username = '$user'");
$fetch = mysqli_fetch_assoc($sql);
?>
<html>
<head>
	<style type="text/css">
		body {
    background: #654ea3;
    background: url('https://i.pinimg.com/originals/39/ea/27/39ea275e1a9bc71dd03925b6ddc755bc.jpg');
    min-height: 100vh;
    overflow-x: hidden
}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit - <?php echo $_COOKIE['loginUser']; ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.css" integrity="sha512-ZHFuHiK3EA1uh2tx7nB0j9HyXR/IAFW24KVNFGjY8QIjtDKHmcowjUyObXF40wYrG25+kECHEbH8rL+HbvRwYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="font-family:vazir;">
	
	<div id="back" style="height:auto;margin: auto; width: 70%;background: whitesmoke; border-radius:10px">
<div class="container bootstrap snippets bootdey">
    
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src=<?php echo $fetch['image']; ?> class="avatar img-circle img-thumbnail" style="border-radius:10px" alt="avatar">
          <br>
          <br>
          <h6>اونجایی که عکس پروفایل میذارن اینجاست</h6>
          
<form class="form-horizontal" method="post" role="form" action="check.php" enctype="multipart/form-data">
  <div class="form-group">
    
    <input type="file" name="fileimg" class="form-control-file" id="exampleFormControlFile1">
  </div>

        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          لطفا سعی کنید همه ی کادر ها را پر کنید
        </div>
        <h4 style="text-align: center;">ویرایش حساب کاربری</h4>
        
        
          <div class="form-group">
            <label class="col-lg-3 control-label">username : </label>
            <div class="col-lg-8">
              <input class="form-control" name="username" type="text" value=<?php echo $fetch['username']; ?> placeholder="username..." >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">about : </label>
            <div class="col-lg-8">
              <textarea class="form-control" name="about" placeholder="about..."><?php echo $fetch['about']; ?></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">password</label>
            <div class="col-lg-8">
              <input class="form-control" type="password" name="password" value=<?php echo $fetch['passowrd']; ?> placeholder="password">
            </div>
          </div>
            <button type="submit" name="submit" class="btn btn-primary mb-2">Save Changes</button>
        </form>
            <a href="index.php"><button class="btn btn-secondary mb-2">Cancel</button></a>
      </div>
  </div>
</div>
<hr>
</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>