
<?php include '../Admin/partials/header.php'; ?>

    <section>
        <div class="container-fluid">
            <div class="row">
            <?php include '../Admin/navigation.php'; ?>
                <div class="col-sm-9">
                <?php


    if (isset($_POST['submit'])) {
        $B = $_POST['B'];
        $K = $_POST['K'];
        $TT = $_POST['TT'];
        $kq1 = (17 < $K) ? ((17 - 10) * 20000 + ($K - 17) * 45000) : ($K - 10) * 20000;
        $kq2 = (17 < $K) ? ((17 - $B) * 20000 + ($K - 17) * 45000) : ($K - $B) * 20000;
        if ($B < 10 || $K < 10)
            $TT = $kq1 > 0 ? $kq1 : "Giờ nghỉ";
        elseif ($B > 24 || $K > 24)
            $TT = "Nhập sai giờ";
        elseif ($B >= $K)
            $TT = "Giờ kết thúc phải > giờ bắt đầu";
        else $TT = $kq2;
    }
    ?>
    <form action="" method="post">
        <table align="center" style="background-color: darkcyan">
            <tr style="background-color:cadetblue; text-align:center">
                <td colspan="3">
                    <h1>Tính tiền Karaoke</h1>
                </td>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu:
                </td>
                <td>
                    <input type="text" name="B" value="<?php if (isset($B)) echo $B;
                                                        else echo ""; ?>">
                </td>
                <td>
                    (h)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc:
                </td>
                <td>
                    <input type="text" name="K" value="<?php if (isset($K)) echo $K;
                                                        else echo ""; ?>">
                </td>
                <td>
                    (h)
                </td>

            </tr>

            <tr>
                <td>
                    Tiền thanh toán:
                </td>
                <td>
                    <input type="text" name="TT" value="<?php if (isset($TT)) echo $TT ?>" readonly>
                </td>
                <td>
                    (VND)
                </td>

            </tr>

            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Tính tiền" name="submit">
                    <input type="submit" value="clear" name="reset">
                </td>

            </tr>
        </table>
    </form>
                </div>
            </div>
        </div>
    </section>
<?php include '../Admin/partials/footer.php'; ?>    