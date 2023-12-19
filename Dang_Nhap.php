<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/dang_nhap-dangki.css" rel="stylesheet" />
    <title>Đăng nhập</title>
</head>

<body>
    <div class="section">
        <form class="box" method="post" action="#">
            <H1>ĐĂNG NHẬP TÀI KHOẢN</H1>
            <input id="email" type="text" placeholder="Email">
            <input id="password" type="password" placeholder="Password">
            <button type="sum" name="dangnhap" onclick="return kiemtra()">ĐĂNG NHẬP</button>
            <div id="kq"></div>
        </form>
    </div>

</body>
<script>
    function kiemtra(){
        thanhcong = true;
        thongbao = "";

        //kiem tra ten email
        var em = document.getElementById("email");
        if(em.value.length == 0){
            thongbao+="Vui lòng nhập Email <br>";
            thanhcong=false;
        }
        //kiem tra passwd
        var pswd = document.getElementById("password");
        if(pswd.value.length == 0){
            thongbao+="Vui lòng nhập Password";
            thanhcong=false;
        }

        if(thongbao=="") thongbao = "Nhập đúng dữ liệu";
        document.getElementById("kq").innerHTML=thongbao;
        return thanhcong;
    }
</script>
</html>