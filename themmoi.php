<?php include_once('./connect.php'); ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <title>Đại học Thuỷ Lợi</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-dang-nhap">
        <h2>THÊM MỚI CÁN BỘ</h2>
        <form action="xuly_them.php" method="POST">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Họ và tên</label
            >
            <input
              type="text"
              class="form-control"
              id="ho_ten"
              name="ho_ten"
            />
          </div>
          <div class="mb-3">
            <label for="chuc_vu_id" class="form-label"
              >Chức vụ</label
            >
            <select
              type="text"
              class="form-select"
              id="chuc_vu_id"
              name="chuc_vu_id"
            >
            <option value="" selected disabled>-- Lựa chọn chức vụ --</option>
            <?php 
               $sql = "select * from chuc_vu";
               $query = mysqli_query($connect,$sql);
               $num_rows = mysqli_num_rows($query);
               echo $num_rows;
               if ($num_rows) {
                var_dump($num_rows);
                  while($row = mysqli_fetch_row($query)) {
                    var_dump($row);
                    echo "<option value='".$row[0]."'>".$row[2]."</option>";
                  }                
               }
               mysqli_free_result($query);
               mysqli_close($connect);
            ?>
            
          </select>
          </div>
          <div class="mb-3">
            <label for="sdt_co_quan" class="form-label"
              >Số điện thoại cơ quan</label
            >
            <input
              type="text"
              class="form-control"
              id="sdt_co_quan"
              name="sdt_co_quan"
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label"
              >Email</label
            >
            <input
              type="text"
              class="form-control"
              id="email"
              name="email"
            />
          </div>
          <div class="mb-3">
            <label for="sdt" class="form-label"
              >Số di động</label
            >
            <input
              type="text"
              class="form-control"
              id="sdt"
              name="sdt"
            />
          </div>
          <button type="submit" name="submitAdd" class="btn btn-primary">Thêm mơi</button>
        </form>
      </div>
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
