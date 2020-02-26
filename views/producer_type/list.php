<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <link rel="icon" href="../../public/image/b1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/css/welcome.css">
    <link rel="stylesheet" href="../../public/css/responsive.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar-vertical">
        <div class="toggle">
            <i class="fa fa-bars menu"></i>
        </div>
        <ul>
            <hr>
            <li><a href="../login/reset_password.php"><i class="fa fa-home" aria-hidden="true"> Reset Your
                        Password</i></a></li>
            <li><a href="../login/logout.php"><i class="fa fa-leaf" aria-hidden="true"> Sign Out of Your
                        Account</i></a></li>
            <hr>
            <li><a href="../list_login/index.php"><i class="fa fa-user-circle-o
" aria-hidden="true"></i>List Account</a></li>
            <li><a href="../product/index.php"><i class="fa fa-address-book
" aria-hidden="true"></i> List Shoes</a></li>
            <li><a href="../producer_type/producer_type.view.php"><i class="fa fa-address-book
" aria-hidden="true"></i> List </a></li>
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
    <h2 style="margin: 20px;text-align: center;">List Producer_Type</h2>
    <div class="container">
        <div class="md-form mt-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="tableSearch" style="width: 25%; float: right; margin: 15px;">
        </div>
        <br>
    <a href="producer_type.view.php?page=add" class="btn btn-success btn-sm" style="float:left">ADD</a>
    <a href="producer_type.view.php?page=show_backuppro_type" class="btn btn-warning btn-sm" style="float:right">Backup
        File</a>
    <br>
    <!-- <table class="table" > -->
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>ID_Producer</th>
                <th>Producer</th>
                <th>ID_Type_product</th>
                <th>Type_product</th>
                <th>Amount</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <br>
        <tbody id="myTable">
            <?php foreach ($protypes as $key => $protype): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $protype->id_producer?></td>
                <td><?php echo $protype->name_producer?></td>
                <td><?php echo $protype->id_type?></td>
                <td><?php echo $protype->name_type?></td>
                <td><?php echo $protype->amount ?></td>
                <td> <a href="producer_type.view.php?page=edit&id1=<?php echo $protype->id_producer; ?>&id2=<?php echo $protype->id_type; ?>"
                        class="btn btn-info btn-sm">Update</a>
                </td>
                <td> <a href="producer_type.view.php?page=delete&id1=<?php echo $protype->id_producer; ?>&id2=<?php echo $protype->id_type; ?>"
                        class="btn btn-warning btn-sm">Delete</a></td>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>


</html>