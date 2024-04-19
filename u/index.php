<?php
if (!isset($_COOKIE['loginUser'])) {
    header("location:../login/");
}
$user2=$_COOKIE['loginUser'];
$user =$_GET['u'];
include '../dbs/config.php';

$sql = mysqli_query($link,"select * from Users where username = '$user2'");
$fetch = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile - <?php echo $user ?> </title>
    
<link rel="stylesheet" type="text/css" href="../profile/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="row py-5 px-4">
    <div class="col-md-11 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head" >
                    <div class="profile mr-3" ><img src=<?php echo "../profile/".$fetch['image']; ?>  alt="..." width="130" class="rounded mb-2 img-thumbnail"><form action="follow.php?user=<?php echo "$user&user2=$user2" ?>" method="post"><button type="submit" class="btn btn-outline-dark btn-sm btn-block" name="follow">دنبال کردن</button></form></div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"><?php echo $fetch['username']; ?></h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>user</p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"><?php echo $fetch['Tpost']; ?></h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Posts</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"><?php echo $fetch['follower']; ?></h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block"><?php echo $fetch['following']; ?></h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">About</h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0"><?php echo $fetch['about']; ?></p>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent posts</h5>
                </div>
                <div class="row">
                    <?php 
                    $usere = $_GET['u'];
                    $userid = $fetch['PersonID'];
                    $query = mysqli_query($link,"SELECT * FROM posts where userid = '$userid'");
                    while ($fetch = mysqli_fetch_assoc($query)) {
                    	
                    	?>
                    	<div class="col-4 mb-2"><a href=<?php echo "../comment.php/?id=".$fetch['PostID'];?> alt="" ><img src=<?php echo "../".$fetch['image']; ?> alt="" class="img-fluid rounded shadow-sm"></a></div>
                    	<?php
                    }
                     ?>
              
                </div>

            </div>
        </div>
    </div>
</div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>