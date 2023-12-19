<?php 
session_start();
if(isset($_SESSION['role'])) {
  unset($_SESSION['role']);
  unset($_SESSION['username']);
}
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet" >
<div class="col-6 m-auto border border-secondary">
<form action="./admin/create-user-code.php" method="post" >
    <h4 class="bg-secondary text-white p-2 my-0 mx-n3">ĐĂNG KÝ THÀNH VIÊN</h4>
  <div class="form-group">
    <label for="username">Tên truy cập</label>
    <input type="text" class="form-control" id="username" name="username" >    
  </div>
  <div class="form-group">
    <label for="password">Mật khẩu</label>
    <input type="password" class="form-control" id="password" name="pass">
  </div>
  <div class="form-group">
    <label for="repass">Nhập lại mật khẩu</label>
    <input type="password" class="form-control" id="repass" name="repass">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" >    
  </div>
   <div class="form-group">
       <input name="dangki" type="submit" class="btn btn-primary py-2 px-5" value="Đăng ký"> 
       <input type="reset" class="btn btn-danger py-2 px-5" value="Làm lại">
  </div>
</form>
</div>