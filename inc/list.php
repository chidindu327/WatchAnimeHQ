<?php
include "dp.php";
$sql = "SELECT * FROM anime limit 10";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    //var_dump($row);
?>
    <div class="down-content">
        <span class="category"><?php echo $row['category']; ?></span>
        <h4><?php echo $row['name']; ?></h4>
        <a href="<?php echo $row['image']; ?>"><i class="fa fa-info-circle"></i></a>
    </div>
<?php
}
?>