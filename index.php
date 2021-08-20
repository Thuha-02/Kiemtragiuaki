<?php
session_start();
include_once('./connect.php');
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Đại học Thuỷ Lợi</title>
</head>

<body>
  <div class="container">
    <h2>DANH SÁCH CÁN BỘ</h2>
    <?php
    if (isset($_SESSION['tai_khoan'])) {
      echo "<a href='themmoi.php' type='button' class='btn btn-primary'>Thêm mới</a> | ";
      echo "<a href='dangxuat.php' type='button' class='btn btn-primary'>Dang xuat</a>";
    } else {
      echo "<a href='dangnhap.php' type='button' class='btn btn-primary'>Đăng nhập</a>";
    }
    ?>
    <hr>
    <form class='d-flex'>
      <input style="width: 30%;" class="form-control me-2" name="s" type="search" placeholder="Tim kiem..." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Tim Kiem</button>
    </form>
    <hr>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Họ tên</th>
          <th scope="col">Chức vụ</th>
          <th scope="col">Số điện thoại cơ quan</th>
          <th scope="col">Email</th>
          <th scope="col">Số di động</th>
          <?php
          if (isset($_SESSION['tai_khoan'])) {
            echo "<th scope='col'>Chức năng</th>";
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_REQUEST["s"])){
          $search = $_REQUEST["s"];
          $sql = "select * from can_bo where ho_ten like '%$search%'";
        } else {
          $sql = "select * from can_bo";
        }
        $query = mysqli_query($connect, $sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows == 0) {
          echo "<tr> <td colspan='6'>Không có dữ liệu</td></tr>";
        } else {
          while ($row = mysqli_fetch_row($query)) {

            $sql2 = "select ten_chuc_vu from chuc_vu where id = ".$row[2];
            $query2 = mysqli_query($connect, $sql2);
            $row2 = mysqli_fetch_assoc($query2);

            echo "<tr>
              <th scope='row'>" . $row[0] . "</th>
              <td>" . $row[1] . "</td>
              <td>" . $row2['ten_chuc_vu'] . "</td>
              <td>" . $row[3] . "</td>
              <td>" . $row[4] . "</td>
              <td>" . $row[5] . "</td>";
            if (isset($_SESSION['tai_khoan'])) {
              echo "<td>
                  <a href='sua.php?id=" . $row[0] . "'>Sửa</a> |
                  <a href='xoa.php?id=" . $row[0] . "'>Xoá</a>
                  </td>";
            }
            echo "</tr>";
          }
        }

        mysqli_free_result($query);
        mysqli_close($connect);
        ?>

      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>