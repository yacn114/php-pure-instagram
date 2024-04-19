<?php 
if (isset($user)){
	$user = $_COOKIE['loginUser'];
}else{
	$user = "";
}
include 'dbs/config.php';

$sql = mysqli_query($link,"select * from Posts");


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>explore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <!DOCTYPE html>
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
  <title>explore</title>
  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <nav style="direction: rtl;" class="navbar mt-3 navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">صفحه اصلی</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profile/">حساب کاربری</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link disabled"><?php if(isset($_COOKIE['loginUser'])){echo $_COOKIE['loginUser'];}else{echo "";}?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="panel.php">New Post</a>
          </li>
  
        </ul>
  
  
  
      </div>
    </div>
  </nav>
  <div class="row">
    
      <?php while ($fetch = mysqli_fetch_assoc($sql)) {
        $userasli = $fetch["userid"];
        $sql1 = mysqli_query($link,"select `username` from `Users` where `Personid` = '$userasli'");
        $fetchUsers = mysqli_fetch_assoc($sql1);
        ?>
  <div class="card" style="width: 18rem;margin: 20px">
  <img class="card-img-top" src=<?php echo $fetch['image']; ?> alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="/u?u=<?php echo $fetchUsers['username'] ?>"><?php echo $fetch['PostW']; ?></a></h5>
    <p class="card-text"><?php echo $fetch['caption']; ?></p>
    <a href="comment.php?id=<?php echo $fetch['PostID'] ?>" class="btn btn-primary">ادامه</a>
  </div>
</div>
<?php } ?>
</div>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="#">showgram</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>