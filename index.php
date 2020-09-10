<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepper Store</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/customize.css">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-future">
        <div class="container">
            <a href="index.php" class="navbar-brand">Pepper Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">สินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">ช่วยเหลือ</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">ติดตามสินค้า</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">ลงชื่อเข้าใช้</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">สมัครสมาชิก</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="carousel slide" data-ride="carousel" id="imgSildes">
        <ul class="carousel-indicators">
            <li data-target="#imgSildes" data-slide-to="0" class="active"></li>
            <li data-target="#imgSildes" data-slide-to="1"></li>
            <li data-target="#imgSildes" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.mos.cms.futurecdn.net/LvNXk2LvkwfFxhgUk2j5WL.jpg" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA</p>
                </div>
            </div>
        </div>
        <a href="#imgSildes" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#imgSildes" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="container">
        <h3 class="mt-5">เทรดฮิต</h3>
        <hr>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="https://img1.cgtrader.com/items/2403715/0b62c5daa1/minecraft-steve-character-3d-model-rigged-max-obj-3ds-fbx.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-text">OnePlus</h5>
                        <h4 class="text-price-future">฿8,900.00</h4>
                        <p>฿<S class="text-secondary">39000</S> -99%</p>
                        <a href="" class="btn btn-future btn-block">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <h3 class="mt-5">ร้านค้าทางการ</h3>
        <hr>
        <div class="row">
            <div class="col-lg-3 mb-3">
                <div class="card">
                    <img src="" class="card-img-top">
                </div>
            </div>
        </div>
        <hr>
    </div>


    <div class="container">
        <h3 class="mt-5">แบรนด์สินค้า</h3>
        <hr>
        <div class="row">
            <div class="col-lg-2 mb-3">
                <div class="card">
                    <img src="https://www.macthai.com/wp-content/uploads/2013/02/apple_rainbow_logo.jpeg" class="card-img-top" height="150">
                    <div class="card-body">
                        <h4 class="text-center">APPLE</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card">
                    <img src="https://www.macthai.com/wp-content/uploads/2013/02/apple_rainbow_logo.jpeg" class="card-img-top" height="150">
                    <div class="card-body">
                        <h4 class="text-center">APPLE</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card">
                    <img src="https://www.macthai.com/wp-content/uploads/2013/02/apple_rainbow_logo.jpeg" class="card-img-top" height="150">
                    <div class="card-body">
                        <h4 class="text-center">APPLE</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 mb-3">
                <div class="card">
                    <img src="https://www.macthai.com/wp-content/uploads/2013/02/apple_rainbow_logo.jpeg" class="card-img-top" height="150">
                    <div class="card-body">
                        <h4 class="text-center">APPLE</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/font-awesome.min.js"></script>
    <script src="assets/js/sweetalert2@10.js"></script>
</body>
</html>