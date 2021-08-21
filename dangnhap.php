<?php
    session_start();
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="form-dang-nhap">
          <h3>ĐĂNG NHẬP</h3>
          <hr>
            <form action="./xuly_dangnhap.php" method="post">
              <div class="mb-3">
                <label for="tai_khoan" class="form-label">Tài khoản</label>
                <input
                  type="text"
                  class="form-control"
                  id="tai_khoan"
                  name="tai_khoan"
                />
              </div>
              <div class="mb-3">
                <label for="mat_khau" class="form-label">Mật khẩu</label>
                <input
                  type="password"
                  class="form-control"
                  id="mat_khau"
                  name="mat_khau"
                />
              </div>
              <button type="submit" class="btn btn-primary">Đăng nhập</button>
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
