<?php
    session_start();
    if (!isset($_POST['tai_khoan'])){
        die('');
    };

    include_once('./connect.php');

    $tai_khoan = $_POST['tai_khoan'];
    $mat_khau = $_POST['mat_khau'];

    if (!$tai_khoan || !$mat_khau)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } else {
        $sql = "select * from nguoi_dung where tai_khoan = '$tai_khoan' and mat_khau = '$mat_khau' ";
        $query = mysqli_query($connect,$sql);

        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo "Tên đăng nhập hoặc mật khẩu không đúng !";
        }else{
            $_SESSION['tai_khoan'] = $tai_khoan;
            header('Location: index.php');
        }
    }

    mysqli_close($connect);
?>
