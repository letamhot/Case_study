<div class="navbar-vertical">
    <div class="toggle">
        <i class="fa fa-bars menu"></i>
    </div>
    <ul>
        <img src="../../public/video/giphy.gif" style="width:80px; float:right">
        <!-- <br> -->
        <li><a href="../../welcome.php"><i class="fa fa-user-circle-o
" aria-hidden="true"></i>Home</a></li>
        <li><a href="../list_login/index.php"><i class="fa fa-address-book
" aria-hidden="true"></i>List Account</a></li>
        <li><a href="../product/index.php"><i class="fa fa-address-book
" aria-hidden="true"></i> List Shoes</a></li>
        <li><a href="../producer_type/producer_type.view.php"><i class="fa fa-address-book
" aria-hidden="true"></i> List </a></li>
        <li><a href="../producer/producer.view.php"><i class="fa fa-address-book
" aria-hidden="true"></i> List Producer </a></li>
        <li><a href="../type/type.view.php"><i class="fa fa-address-book
" aria-hidden="true"></i> List type </a></li>
        <hr>
        <li><a href="../login/reset_password.php"><i class="fa fa-home" aria-hidden="true"> Reset Your
                    Password</i></a></li>
        <li><a href="../login/logout.php"><i class="fa fa-leaf" aria-hidden="true"> Sign Out of Your
                    Account</i></a></li>
        <hr>

        <li>
            <div class="sideProfile center">
                <hr>
                <span>Xin chào:</span><br>

                <div class="clear"></div>
            </div>
            <div class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo htmlspecialchars($_SESSION["email"]); ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="../login/logout.php">Đăng xuất</a>
                </div>
            </div>
        </li>
    </ul>
</div>