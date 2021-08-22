<?php
    include_once('./connect.php');
    if(isset($_REQUEST['id']) && isset($_REQUEST['id']) != "") {
        $id = $_REQUEST['id'];
        $sql = "delete from can_bo where id = $id";
        $query = mysqli_query($connect,$sql);
        if($query) {
            echo "Xoa THANH CONG. <a href='javascript: history.go(-1)'>Trở lại</a>";
        } else {
            echo "Xoa THAT BAI. <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    }