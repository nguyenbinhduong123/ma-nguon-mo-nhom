
<?php include '../Admin/partials/header.php'; ?>
    <section>
        <div class="container-fluid">
            <div class="row">
            <?php include '../Admin/navigation.php'; ?>
                <div class="col-sm-9">
                <style>
    th{
        color:red
    }

    tr:nth-child(even) {
        background-color: #FEDFC2
    }
</style>
<?php
$servername ="localhost";
$username = "root";
$dbname = "quanly_ban_sua";
$conn = mysqli_connect($servername, $username,"", $dbname);
mysqli_set_charset($conn, 'utf8');
if(!$conn){
    die("connection failed:" . mysqli_connect_error());

}
else echo "ket noi thanh cong";
?>
<?php 
    $squery= 'SELECT * FROM `khach_hang`';
    $result = mysqli_query($conn, $squery);
    if(mysqli_num_rows($result)<>0)
    {
        echo "<p align ='center'> <font size ='10' color = 'black'> Thông tin khách hàng </font> </p>";
        echo "<table align = 'center' width = '100%' border = '1' cellpadding= '2' stype='border-collapse:collapse' ";
        echo "
        <tr>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        </tr>
        ";
            while ($row=mysqli_fetch_array($result))
            {
                echo "<tr>";
                for($i=0;$i<mysqli_num_fields($result)-1;$i++)
                    echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";
           
    }
    echo "</table>";

?>
                </div>
            </div>
        </div>
    </section>
<?php include '../Admin/partials/footer.php'; ?>    