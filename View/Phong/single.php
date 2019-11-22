<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Room</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b3b63fc99.js" crossorigin="anonymous"></script>

    <style>
        #brand-name {
            color: #F2EEEB;
            font-family: 'Quicksand', sans-serif;
        }

        #room-hold-image img {
            width: 100%;
            height: 50%;
            opacity: 0.8;
            cursor: pointer;
        }

        #room-hold-image img:hover {
            opacity: 1;
        }

        #related-img img {
            width: 100%;
            height: 100%;
        }

        .btn-booking {
            background-color: #f6e58d;
            color: #535c68;

        }

        .btn-booking:hover {
            background-color: #f9ca24;

        }
    </style>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a id="brand-name" class="navbar-brand mx-auto" href="/index.php">The Dreamer Hotel</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul id="room-navbar" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#!">Single

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/View/Phong/double.php">Double</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/View/Phong/group.php">Group</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/View/Phong/king.php">King</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class="container-fluid">
            <!-- Portfolio Item Heading -->
			<?php
								
						if (isset($_GET["id"])) {
							$id = $_GET["id"];
							require_once("../../conn.php");
							$sql = "SELECT * FROM room WHERE id = $id";
							$result = $conn->query($sql);
							if ($result->num_rows == 1) {
								$row = $result->fetch_assoc();
							
								
								$image = $row["image"];
							}
					}
			?>

            <div class="row">

                <div class="col-xs-12 col-md-8">
                    <h1 class="my-4">Single Room
                        <small>Phòng dành cho 1 - 2 người</small>
                    </h1>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="/View/booking.php?id=<?php echo $row["id"] ?>" class="btn btn-lg btn-booking my-3 btn-block">
                        Đặt phòng này </a>
                </div>
            </div>

            <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                    <div class="container">
						<?php
            
								if (isset($_GET["id"])) {
								 echo '<img id="expandImg" style="width:100%; height: 500px ;" class="img-fluid" src="../../uploads/' . $image . '">';
								}
						?>
                      
                    </div>

                    
                </div>

                <div class="col-md-4">
                    <h3 class="my-3">Phòng đơn</h3>
                    <p>
                        <i class="fa fa-bath" aria-hidden="true"></i>Phòng tắm riêng <br><i
                            class="fas fa-parking    "></i> Chỗ đậu xe miễn phí <br>
                        <br>
                        Kích thước phòng 15 m²<br>
                        <br>
                    </p>
                    <h3 class="my-3">Tiện nghi phòng: ​</h3>
                    <ul>
                        <li>Vòi sen</li>
                        <li>Máy sấy tóc</li>
                        <li>Bàn ủi</li>
                        <li>Đồ vệ sinh cá nhân miễn phí</li>
                        <li>Quạt máy</li>
                        <li>Nhà vệ sinh</li>
                        <li>Sân trong</li>
                        <li>Dép</li>
                        <li>Tầm nhìn ra khung cảnh</li>
                        <li>Sàn lát gỗ</li>
                        <li>Tiện nghi BBQ</li>
                        <li>Nhìn ra núi</li>
                        <li>Không gây dị ứng</li>
                    </ul>
                </div>

            </div>
			
        </div>

        <!-- /.row -->


    </div>



    <div class="container">
        <!-- Related Room Row -->
        <h3 class="my-4">Related Projects</h3>

        <div id="related-img" class="row">

            <div class="col-md-4 col-sm-6 mb-4">
                <a href="/View/Phong/double.php">
                    <img class="img-fluid" src="/Image/phongdoi1.jpg" alt="">
                    <div class="text-center mt-1">
                        <h6>Phòng đôi</h6>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <a href="/View/Phong/king.php">
                    <img class="img-fluid" src="/Image/phongking2.jpg" alt="">
                    <div class="text-center mt-1">
                        <h6>Phòng king</h6>
                    </div>
                </a>

            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <a href="/View/Phong/group.php">
                    <img class="img-fluid" src="/Image/phongtapthe3.jpg" alt="">
                    <div class="text-center mt-1">
                        <h6>Phòng tập thể</h6>
                    </div>
                </a>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4 w-100">



        <div class="bg-dark p-3 text-light">
            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <button class="btn btn-facebook btn-link btn-icon-only btn-circle waves-effect ">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button class="btn btn-twitter btn-link btn-icon-only btn-circle waves-effect waves-teal text-info">
                        <i class="fab fa-twitter"></i>
                    </button>
                </li>
                <li class="list-inline-item">
                    <button
                        class="btn btn-google btn-link btn-icon-only btn-circle waves-effect waves-red btn-lg text-danger">
                        <i class="fab fa-google-plus-g"></i>
                    </button>
                </li>
            </ul>
            <!-- Social buttons -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3" style="color: #BDC581; ">© 2019 Copyright: Khách sạn
                người
                mơ
            </div>
            <!-- Copyright -->
        </div>
    </footer>
    <!-- Footer -->
    <script>
        function changePicture(imgs) {
            var source = imgs.src;
            $('#expandImg').attr("src", source);
            $('#expandImg').parent().css('display', 'block');
            $('#firstImg').parent().css('display', 'none');
        }
    </script>
</body>

</html>