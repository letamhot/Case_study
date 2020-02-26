<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
</head>

<body>
    <h2>Danh sách khách hàng</h2>
    <a href="producer.view.php?page=add" class="btn btn-success btn-sm" style="float:right">ADD</a>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name_Producer</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Tax_Code</th>
                <th>Image</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producers as $key => $producer): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $producer->name_producer ?></td>
                <td><?php echo $producer->address ?></td>
                <td><?php echo $producer->phone ?></td>
                <td><?php echo $producer->tax_code ?></td>
                <td><img src="<?= 'data:image;base64,'.base64_encode($producer->image)?> " width="60px" height="60px"
                        alt="<?= $producer->name_producer ?>" class="img-thumnail"></td>
                <td> <a href="producer.view.php?page=backupfile&id=<?php echo $producer->id; ?>"
                        class="btn btn-warning btn-sm">Backup File</a></td>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>