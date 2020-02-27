<?php include './views/login/access.php';
echo accessIndex();
?>
<?php
include "connect.php";
?>
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <?php include "./views/partials/header.php" ;?>

</head>

<body>
    <?php include './views/partials/navbar_welcome.php';?>
    <!-- <h4 style="text-align: center;">Giới Thiệu Về Công Nghệ Gel Trong Giày Asics:</h4> -->
    <nav class="navbar navbar-expand-sm bg-light justify-content-center" id="video">

    </nav>
    </br>
    <h4 style="text-align: center;">List Product:</h4>
    <div class="container">
        <div class="row images-shoes" style="background-color: white">
            <hr class="clearfix w-100 d-md-none">
            <div class="thumbnail">
                <a target="_blank" href="./public/image/asics.png">
                    <img class="img-thumbnail" src="./public/image/asics.png" alt="Cinque Terre" style=" height:250px">
                </a>
                <div class="desc">Asics Gel Swift MT<p>Giá: 2.500.000 VNĐ</p>
                </div>
            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/as1.jpg">
                    <img class="img-thumbnail" src="./public/image/as1.jpg" alt="Forest" style=" height:250px">
                </a>
                <div class="desc">Asics Gel Nova MT<p>Giá: 2.400.000 VNĐ</p>
                </div>
            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/as3.jpg">
                    <img class="img-thumbnail" src="./public/image/as3.jpg" alt="Mountains" style=" height:250px">
                </a>
                <div class="desc">Asics Gel Netburner FF<p>Giá: 2.800.000 VNÐ</p>
                </div>
            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/as4.jpg">
                    <img class="img-thumbnail" src="./public/image/as4.jpg" alt="Cinque Terre" style=" height:250px">
                </a>
                <div class="desc">Asics Swift FF<p>Giá: 2.500.000 VNĐ</p>
                </div>
            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/asics4.jpg"><img class="img-thumbnail"
                        src="./public/image/asics4.jpg" alt="Cinque Terre" style=" height:250px"></a>
                <div class="desc">Asics Gel Netburner Ballistic FF MT<p>Giá: 2.300.000 VNĐ</p>
                </div>
            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/bra.jpg"><img class="img-thumbnail" src="./public/image/bra.jpg"
                        alt="Cinque Terre" style=" height:250px"></a>
                <div class="desc">
                    <p>Giá: 2.200.000 VNĐ</p>
                </div>

            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/bdn.jpg"><img class="img-thumbnail" src="./public/image/bdn.jpg"
                        alt="Cinque Terre" style=" height:250px"></a>
                <div class="desc">
                    <p>Giá: 2.300.000 VNĐ</p>
                </div>

            </div>
            <div class="thumbnail">
                <a target="_blank" href="./public/image/cbm.jpg"><img class="img-thumbnail" src="./public/image/cbm.jpg"
                        alt="Cinque Terre" style=" height:250px"></a>
                <div class="desc">
                    <p>Giá: 2.300.000 VNĐ</p>
                </div>

            </div>
        </div>
    </div>
    <br>

    <?php include "./views/partials/footer.php" ;?>
</body>

</html>