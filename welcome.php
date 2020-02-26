<?php include './views/login/access.php';
echo accessIndex();
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
    <nav class="navbar navbar-primary bg-primary" style="width: auto; height: 50px;">
        <marquee width="500%" behavior="scroll" direction="right" style="font-size: 300%;
">Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome To Website Shoe Sale Manager</marquee>
    </nav>
    <div class="text-center">
        <h1>Shop Giày Bán Online Toàn Quốc</h1>
        <h2>Chuyên Sỉ, Lẻ Giày Bóng Chuyền</h2>
        <h3>Asics & Mizuno Chính Hãng Nhật Bản</h3>
    </div>
</body>
<?php include "./views/partials/footer.php" ;?>

</html>