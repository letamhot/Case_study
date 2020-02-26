<?php
include '../../connect.php';
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Update Shoes</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $pro->id; ?>" />
                <input type="hidden" name="type" value="<?php echo $pro->type_product; ?>" />
                <input type="hidden" name="producer" value="<?php echo $pro->producer; ?>" />
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $pro->name; ?>" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Type_product</label>
                    <select class="form-control" name="type">
                        <?php
                        $sql = "SELECT * FROM type_product";
                        $result = $pdo->query($sql);
                        foreach ($result as $row) {
                            if($row['id'] === $pro->type_product )
                            {
                                echo "<option value=" . $row['id'] . " selected>" . $row['id'] . " - " . $row['name_type'] . "</option>";
                            } else{
                                echo "<option value=" . $row['id'] . ">" . $row['id'] . " - " . $row['name_type'] . "</option>";
                            }
                            
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Producer</label>
                    <select class="form-control" name="producer">
                        <?php
                $sql = "SELECT * FROM producer";
                $result = $pdo->query($sql);
                foreach ($result as $row) {
                    if($row['id'] === $pro->producer){
                        echo "<option value=" . $row['id'] . " selected>" . $row['id'] . " - " . $row['name_producer'] . "</option>";
                    }
                    else{
                        echo "<option value=" . $row['id'] . " >" . $row['id'] . " - " . $row['name_producer'] . "</option>";
                    }
                    
                    
                }
            ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <textarea name="amount" class="form-control"><?php echo $pro->amount; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                        <img src="<?= 'data:image;base64,'.base64_encode($pro->image)?> " width="60px" height="60px" >
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary" />
                    <a href="index.php" class="btn btn-default">Cancel</a>
                </div>

            </form>