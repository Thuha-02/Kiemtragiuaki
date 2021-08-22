<?php

    if (isset($_POST['submitEdit'])) {
        include_once('./connect.php');
        $id = $_REQUEST['id'];
        $ho_ten = $_POST['ho_ten'];
        $chuc_vu_id = $_POST['chuc_vu_id'];
        $sdt_co_quan = $_POST['sdt_co_quan'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];

        if (!$id || !$ho_ten || !$chuc_vu_id || !$sdt_co_quan || !$email || !$sdt) {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        } else {
            $sql = "update can_bo set ho_ten='$ho_ten',chuc_vu_id=$chuc_vu_id, sdt_co_quan='$sdt_co_quan', email='$email', sdt='$sdt' where id=$id";
            $query = mysqli_query($connect,$sql);
            if($query) {
                echo "Cap nhat THANH CONG. <a href='javascript: history.go(-1)'>Trở lại</a>";
            } else {
                echo "Cap nhat THAT BAI. <a href='javascript: history.go(-1)'>Trở lại</a>";
            }
                
        }
    }