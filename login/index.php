    <!DOCTYPE html>
    <html>
    <head>

        <title>login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="font-family:sans-serif;">
<div class="container">
    
    
            <div class="row">
                <div class="col-md-11 mt-60 mx-md-auto">
                    <div class="login-box bg-white pl-lg-5 pl-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-md-6">
                                <div class="form-wrap bg-white">
                                    <h4 class="btm-sep pb-3 mb-5">Login</h4>

<?php
if (isset($_GET['box'] )== "empty") {
    ?>
<div class="alert alert-danger" dir="rtl" role="alert">
  آخ! همه رو پر نکردی که !!!
</div>
<?php
}


if (isset($_GET['ok'] )) {
    ?>
<div class="alert alert-success" dir="rtl" role="alert">
  خب خب مثل اینکه شما مراحل ثبت نام رو تموم کردید تبریک میگم 
  حالا وارد سایت شید !
</div>
<?php
}

if (isset($_GET['security'] )) {
    ?>
<div class="alert alert-danger" dir="rtl" role="alert">
  متاسفانه شما دارید مشکل امنیتی ایجاد میکنید و ما این اجازه رو به شما نمیدیم :)
</div>
<?php
}
?>
                                    <form class="form" method="post" action="check2.php">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  style="margin-top: -10px;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></span>

                                                    <input type="text" id="email" class="form-control" name="username" placeholder="ایمیل یا رمز عبور">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group position-relative">
                                                    <span class="zmdi"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-key-fill" style="margin-top: -10px;" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></span>
                                                    <input name="password" type="password" id="password" class="form-control" placeholder="رمز عبور">
                                                </div>
                                            </div>
                                            <div class="col-12 text-lg-right">
                                                <a href="#" class="c-black">فراموشی رمز؟</a>
                                            </div>
                                            <div class="col-12 mt-30">
                                                <br>
                                                <button type="submit" name="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">ورود
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content text-center">
                                    <div class="border-bottom pb-5 mb-5">
                                        <h3 class="c-black" dir="rtl" style="font-family: sans-serif;">اولین بارته میای اینجا؟</h3>
                                        <a style="font-family: sans-serif;" href="sign-up.php" class="btn btn-custom">ثبت نام</a>
                                    </div>
                                    <h5 style="font-family: sans-serif;" class="c-black mb-4 mt-n1">شبکه های اجتماعی </h5>
                                    <div class="socials">
                                        <a href="#" class="zmdi zmdi-facebook"></a>
                                        <a href="#" class="zmdi zmdi-twitter"></a>
                                        <a href="https://instagram.com/yacn_1414" class="zmdi zmdi-instagram"></a>
                                    </div>
                                </div>
                            </div>
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