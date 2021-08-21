<?php

    if (isset($_POST['submitAdd'])) {
        include_once('./connect.php');

        $ho_ten = $_POST['ho_ten'];
        $chuc_vu_id = $_POST['chuc_vu_id'];
        $sdt_co_quan = $_POST['sdt_co_quan'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];

        if (!$ho_ten || !$chuc_vu_id || !$sdt_co_quan || !$email || !$sdt) {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        } else {
            $sql = "insert into can_bo values('','$ho_ten','$chuc_vu_id','$sdt_co_quan','$email','$sdt')";
            $query = mysqli_query($connect,$sql);
            if($query) {
                echo "Them moi THANH CONG. <a href='javascript: history.go(-1)'>Trở lại</a>";
            } else {
                echo "Them moi THAT BAI. <a href='javascript: history.go(-1)'>Trở lại</a>";
            }
                
        }
    }