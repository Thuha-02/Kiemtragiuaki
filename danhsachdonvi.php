<?php
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
      <h2 >DANH SÁCH CÁC ĐƠN VỊ</h2>
    <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên đơn vị</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Email</th>
      <th scope="col">Máy trực</th>
      <th scope="col">Website</th>
    </tr>
    </thead>
    <tbody>
      <?php
         $sql = "select * from don_vi";
         $query = mysqli_query($connect,$sql);
         $num_rows = mysqli_num_rows($query);
         if ($num_rows==0) {
           echo "<tr> <td colspan='6'>Không có dữ liệu</td></tr>";
         } else {
            while($row = mysqli_fetch_row($query)) {
              echo "<tr>
              <th scope='row'>".$row[0]."</th>
              <td>".$row[1]."</td>
              <td>".$row[2]."</td>
              <td>".$row[3]."</td>
              <td>".$row[4]."</td>
              <td>".$row[5]."</td>
            </tr>";
            }
         }

         mysqli_free_result($query);
         mysqli_close($connect);
      ?>
      
    </tbody>
  </table>
      </div>
   
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
      integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
      integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
