<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commments</title>
  <link rel="stylesheet" href="dist/css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  
  <!-- template rtl version -->
  <link rel="stylesheet" href="dist/css/custom-style.css">

</head>
<body style=" background: url('https://i.pinimg.com/originals/39/ea/27/39ea275e1a9bc71dd03925b6ddc755bc.jpg') fixed;">
<div class="col-md-12" id="menu" style=" width: 100%;height: auto; background: url('https://i.pinimg.com/originals/39/ea/27/39ea275e1a9bc71dd03925b6ddc755bc.jpg') fixed; ">
</div>
<!-- end menu -->
  <div class="container mb-5 mt-5">
    <div class="card">
      <div class="row">
        <center>
                <div class="col-md-12"> <div class="container-fluid" style="display: flex;">
                    <div class="row" style="direction: ltr;">
                <!-- start menu -->
                
      <?php 
      include 'dbs/config.php';
      $id = $_GET['id'];
      $sql = mysqli_query($link,"SELECT * FROM Posts where PostID = '$id'");
      while ($fetch = mysqli_fetch_assoc($sql)) {
        $userasli = $fetch["userid"];
        $sql1 = mysqli_query($link,"select * from `Users` where `PersonID` = '$userasli'");
        $fetchUsers = mysqli_fetch_assoc($sql1);
        ?>
  <div class="card col-12" style="width: 18rem;margin: 20px">
  <img class="card-img-top" src=<?php echo $fetch['image']; ?> alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><a href="/u?u=<?php echo $fetchUsers['username'] ?>"><?php echo $fetch['PostW']; ?></a></h5>
    <p class="card-text"><?php echo $fetch['caption']; ?></p>
    
  </div>
</div>
<?php $pos = $fetch['PostID'];

} ?>
                    </div>
                  </center>
                  
            <div class="col-1"></div>
      <div style="background-color: whitesmoke;height: auto; padding: 50px" class="col-7">
             <form method="post" action="check2.php?postid=<?php echo $pos ?>">
            <input type="text" id="addANote" name="commentbox" class="form-control" placeholder="Type comment..."/>
                        </form>
                        <div class="card card-widget" id="xbox" style="border-radius: 5%; margin-top: 50px; padding: 20px;">
                          <?php 
                          $sq = mysqli_query($link,"SELECT * FROM comment where PostID = $pos  ORDER BY time DESC");
                          while ($f= mysqli_fetch_assoc($sq)) {
$o = $f['commentW'];
$r = mysqli_query($link,"SELECT * FROM Users where username = '$o'");
$ok = mysqli_fetch_assoc($r);
                          
                           ?>
                          <div class="col-12">
<center><img class="img-circle col-md-4" id="img" src=
<?php
echo "profile/".$ok['image'] ?> alt="User Image"><br><br><a href="/u?u=<?php echo $f['commentW']; ?>"><?php echo $f['commentW']; ?></a></center>

                            <p> <br>
<?php echo $f['commentText']; ?>

</p>
                        <form action="check3.php?id=<?php echo $f['commentID']."&idpos=".$f['PostID'] ?>" method="post">

                          <button style="float: right; background-color:white;border: none;" name="like" type="submit"><img width="50" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/50/000000/external-like-blogger-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png"/></button><br>
                          <label style="float: left;">Likes <?php echo $f['Tlike']; ?></label>
                          </form>
                        </div>
<hr>
<?php } ?>

      </div>
  <script>
                            
                              const box =document.getElementById('box');
                              if(innerWidth<500){
                                document.getElementById('img').style.width="64px";
                                document.getElementById('img').style.height="64px";
                                document.getElementById("xbox").innerHTML=` <center>
                                <img class="img-circle col-md-4" id="img" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" style="height:auto;" alt="User Image">
                                </center>
                                
                            <p><br>کامنت اول تصرف شد</p>
                        <form>

                          <button style="float: right; background-color:white;border: none;" type="submit"><img width="50" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/50/000000/external-like-blogger-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png"/></button><br>
                          <label style="float: left;">Likes 0</label>
                          </form>
                            `;

                                box.style.margin='7px';
                                  
                              }else{
                                box.style.margin='30px';
                              }
                              
                  menu.innerHTML= `
                  <div class="collapse" style="width:100%" id="navbarToggleExternalContent">
  <div class="bg-light p-4" id="menuu">
    <center>
  
  <br>
  
  <img src="https://i.pinimg.com/originals/3c/7a/f3/3c7af3c03a1fc34f679d6cb8d1af703a.png" style="width: 20%;" alt="icon"><br><br><br>
  <h2><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
  </svg>&nbsp;Home</a></h2>
  
  
  <h2><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-inbox" viewBox="0 0 16 16">
    <path d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z"/>
  </svg>&nbsp;Inbox</a></h2>

  </center>
  </div>
</div>
<nav class="navbar navbar-dark" id="menuuu">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
`;
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>