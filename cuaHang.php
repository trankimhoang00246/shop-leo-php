<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet"/>
    <link href="./assets/css/cuaHang.css" rel="stylesheet"/>
    <title>Hệ thống cửa hàng - LEO SPORT</title>
</head>
<body>
    <!-- Thanh điều hướng -->
    <div class="navigation">
        <ul class="main-menu">
            <li><a href="./index.php">Trang chủ</a></li>
            <li><a href="./nav__foot-shirt.php">Áo bóng đá</a></li>
            <li><a href="./nav__shoes.php">Giày bóng đá</a></li>
            <li><a href="./nav__balo.php">Balo túi xách</a></li>
            <li><a href="./nav__ball.php">Quả bóng đá</a></li>
            <li><a href="#">Phụ kiện khác</a>
                <ul class="sub-menu">
                    <li><a href="./nav__vo.php">Vớ</a></li>
                    <li><a href="./nav__gangtay.php">Găng tay thủ môn</a></li>
                    <li><a href="./nav__bocongdong.php">Bọc ống đồng</a></li>
                </ul>
            </li>
            <li><a href="./cuaHang.php">Hệ thống cửa hàng</a></li>
            <li><a href="./lienhe.php">Liên hệ</a></li>
        </ul>
    </div>
    <!-- main -->
    <div class="container">
        <h>Hệ thống cửa hàng</h>
        <hr>
        <div class="m__container">
            <div class="l__container">
                <div class="form">
                    <select class="opt" name="lang" id="provinceSelect">
                        <option value="all">--Tỉnh/Thành phố--</option>
                        <option value="hn">Hà Nội</option>
                        <option value="hcm">TP. Hồ Chí Minh</option>
                        <option value="dn">Đà Nẵng</option>
                        <option value="bd">Bình Định</option>
                        <option value="qn">Quảng Ngãi</option>
                    </select>
                    <!-- Danh sách cửa hàng -->
                    <div id="storeList">
                        <h2>Danh Sách Cửa Hàng</h2>
                        <ul id="filteredStoreList">
                            <li data-province="hcm">
                                <div class="storeInf">
                                    <div class="storeName">BÌNH THẠNH - TP HỒ CHÍ MINH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 202 Nguyễn Gia Trí, Bình Thạnh, TP. HCM</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0908925220</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 8h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="hcm">
                                <div class="storeInf">
                                    <div class="storeName">QUẬN 12 - TP HỒ CHÍ MINH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 42 - 44 Nguyễn Ảnh Thủ, Quận 12, TP. HCM</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0938078036</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 8h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="hcm">
                                <div class="storeInf">
                                    <div class="storeName">QUẬN TÂN PHÚ - TP HỒ CHÍ MINH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 90 Huỳnh Văn Một, Phường Hiệp Tân, Q. Tân Phú, TP. HCM</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 19008098</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 8h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="hcm">
                                <div class="storeInf">
                                    <div class="storeName">QUẬN 7 - TP HỒ CHÍ MINH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 210A Nguyễn Thị Thập, Quận 7, TP. HCM</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0789643115</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 8h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="hcm">
                                <div class="storeInf">
                                    <div class="storeName">GÒ VẤP - TP HỒ CHÍ MINH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 645 Quang Trung, Gò Vấp, TP. HCM</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0908925220</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 8h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="hcm">
                                <div class="storeInf">
                                    <div class="storeName">BÌNH THẠNH - TP HỒ CHÍ MINH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 202 Nguyễn Gia Trí, Bình Thạnh, TP. HCM</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0908925220</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 8h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="bd">
                                <div class="storeInf">
                                    <div class="storeName">QUY NHƠN - BÌNH ĐỊNH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 480-482 Trần Hưng Đạo, Lê Hồng Phong, Quy Nhơn, Bình Định</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0901800888</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 7h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="bd">
                                <div class="storeInf">
                                    <div class="storeName">PHÙ CÁT - BÌNH ĐỊNH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 387 Quang Trung, Phù Cát, Bình Định</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0901800888</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 7h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="bd">
                                <div class="storeInf">
                                    <div class="storeName">QUY NHƠN - BÌNH ĐỊNH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 68 Ngô Mây, Ngô Mây, Quy Nhơn, Bình Định</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0901800888</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 7h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                            <li data-province="bd">
                                <div class="storeInf">
                                    <div class="storeName">AN NHƠN - BÌNH ĐỊNH</div>
                                    <div class="storeAddress">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/marker.svg" alt="địa chỉ">
                                        </div>
                                        <div class="text">: 247 Trần Phú, Nhơn Thọ, An Nhơn, Bình Định</div>
                                    </div>
                                    <div class="storeNum">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/ic_phone.svg" alt="sdt">
                                        </div>
                                        <div class="text">: 0901800888</div>
                                    </div>
                                    <div class="storeTime">
                                        <div class="smallIcon">
                                            <img src="./assets/img/icon/time-delivery.svg" alt="thời gian">
                                        </div>
                                        <div class="text">: 7h00 - 23h00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="r__container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9319.359337965549!2d106.61292152262905!3d10.86416742653209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b2a11844fb9%3A0xbed3d5f0a6d6e0fe!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBHaWFvIFRow7RuZyBW4bqtbiBU4bqjaSBUaMOgbmggUGjhu5EgSOG7kyBDaMOtIE1pbmggLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1698210425281!5m2!1svi!2s"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>  
            </div>
        </div>
        
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="block-features">
            <div class="block-features-list">
                <div class="block-features-item">
                    <div class="block-features-icon">
                        <img src="./assets/img/icon-doi-tra.jpg" height="48" alt="Đổi trả trong 90 ngày">
                    </div>
                    <div class="block-features-content">
                        <div class="block-features-title">Đổi trả trong 90 ngày</div>
                        <div class="block-features-subtitle">Leo Sport có chính sách đổi trả trong 90 ngày chưa qua sử
                            dụng</div>
                    </div>
                </div>
                <div class="block-features-divider"></div>
                <div class="block-features-item">
                    <div class="block-features-icon">
                        <img src="./assets/img/icon-giao-hang.jpg" height="48" alt="Giao hàng nhanh">
                    </div>
                    <div class="block-features-content">
                        <div class="block-features-title">GIAO HÀNG SIÊU NHANH</div>
                        <div class="block-features-subtitle">Leo Sport giao hàng siêu nhanh nội thành TP.HCM chỉ trong
                            2H</div>
                    </div>
                </div>
                <div class="block-features-divider"></div>
                <div class="block-features-item">
                    <div class="block-features-icon">
                        <img src="./assets/img/icon-bao-hanh.jpg" height="48" alt="Bảo hành trọn đời">
                    </div>
                    <div class="block-features-content">
                        <div class="block-features-title">BẢO HÀNH TRỌN ĐỜI</div>
                        <div class="block-features-subtitle">Leo Sport bảo hành miễn phí keo trọn đời suốt quá trình quý
                            khách sử dụng</div>
                    </div>
                </div>
                <div class="block-features-divider"></div>
                <div class="block-features-item">
                    <div class="block-features-icon">
                        <img src="./assets/img/icon-chinh-hang.jpg" height="48" alt="cam kết chính hãng">
                    </div>
                    <div class="block-features-content">
                        <div class="block-features-title">HÀNG CHÍNH HÃNG 100%</div>
                        <div class="block-features-subtitle">Leo Sport cam kết bán hàng chính hãng 100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-container-fluid">
                <div class="footer-col">
                    <h class="title">VỀ CHÚNG TÔI</h>
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./lh_gioiThieu.php">Giới thiệu</a></li>
                        <li><a href="./lienhe.php">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h class="title">CHÍNH SÁCH</h>
                    <ul>
                        <li><a href="./cs__dieuKhoan.php">Điều khoản dịch vụ</a></li>
                        <li><a href="./cs__baoMat.php">Chính sách bảo mật</a></li>
                        <li><a href="./cs__vanChuyen.php">Chính sách vận chuyển</a></li>
                        <li><a href="./cs__doiTra.php">Chính sách đổi trả</a></li>
                        <li><a href="./cs__baoHanh.php">Chính sách bảo hành</a></li>
                        <li><a href="./cs__thanhToan.php">Chính sách thanh toán</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h class="title">HỖ TRỢ KHÁCH HÀNG</h>
                    <ul>
                        <li><a href="./hd__chonSize.php">Hướng dẫn chọn size</a></li>
                        <li><a href="./hd__chung.php">Hướng dẫn mua hàng</a></li>
                        <li><a href="./hd__chung.php">Hướng dẫn thanh toán</a></li>
                        <li><a href="./hd__chung.php">Hướng dẫn giao nhận</a></li>
                        <li><a href="./hd_cauHoi.php">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h class="title">LIÊN KẾT</h>
                    <p>Hãy kết nối với chúng tôi</p>
                </div>   
            </div>
            <div class="footer-map">
                <h class="title">Bản đồ</h>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9319.359337965549!2d106.61292152262905!3d10.86416742653209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b2a11844fb9%3A0xbed3d5f0a6d6e0fe!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBHaWFvIFRow7RuZyBW4bqtbiBU4bqjaSBUaMOgbmggUGjhu5EgSOG7kyBDaMOtIE1pbmggLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1698210425281!5m2!1svi!2s"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
            <div class="footer-address">
                <div class="footer-add_logo">
                    <a href="./index.php"><img src="./assets/img/banner/hinh-nen-messi-an-mung-4k_081533033.jpg"></a>
                </div>
                <div class="footer-add_inf">
                    <ul>
                        <li>Địa chỉ: 90 Huỳnh Văn Một, Phường Hiệp Tân, Quận Tân Phú, Thành phố Hồ Chí Minh.</li>
                        <li>Email: leosport.hcm@gmail.com - leosportstore@gmail.com</li>
                        <li>Hotline (Hỗ trợ 24/7): 19008098</li>
                        <li>Website: leosport.vn - leosport.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                Copyright 2023 © Leo Sport
            </div>
        </div> 
    </div>
<script src="./assets/js/cuaHang.js"></script>
</body>
</html>