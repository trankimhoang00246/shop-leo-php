<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link href="./assets/css/gioHang.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <!-- thanh điều hướng -->
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
    <div class="c_container">
        <div class="l_container">
            <div id="cart">
                <div class="title-cart">
                    <h2>SẢN PHẨM ĐÃ CHỌN</h2>
                </div>

                <div id="product-cart">
                    <!-- Product information will be displayed here -->
                </div>
            </div>
        </div>
        <div class="r_container">
            <div class="r_top_comtainer">
                <div class="text-pay">
                    <p>Tạm tính: <span id="tong">0</span></p>
                    <p style="padding-bottom: 10px;">Giảm giá: <span id="voucher">20000</span></p>
                    <hr>
                    <p>Thành tiền: <span id="thanhTien">0</span></p>
                </div>
                <div class="btn-pay">
                    <button class="pay"> THANH TOÁN NGAY</button>
                    <button id="continueChosen">Tiếp tục mua hàng</button>
                </div>

            </div>
            <div class="r_bottom_container">
                <button id="clearAll" onclick="removeAllRows()">Xóa tất cả sản phẩm</button>
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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9319.359337965549!2d106.61292152262905!3d10.86416742653209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b2a11844fb9%3A0xbed3d5f0a6d6e0fe!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBHaWFvIFRow7RuZyBW4bqtbiBU4bqjaSBUaMOgbmggUGjhu5EgSOG7kyBDaMOtIE1pbmggLSBDxqEgc-G7nyAz!5e0!3m2!1svi!2s!4v1698210425281!5m2!1svi!2s"
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
    <script src="./assets/js/gioHang.js"></script>

    <script>
        const storedProducts = JSON.parse(localStorage.getItem("storedProducts"));

        // Kiểm tra và sử dụng dữ liệu
        if (storedProducts !== null) {

            const productListContainer = document.getElementById("product-cart");
            console.log(productListContainer);

            storedProducts.forEach((product) => {
                const productItem = document.createElement("div");
                productItem.classList.add("product-item");

                productItem.innerHTML = `
                    
                    <div class="table-cart" id="${product.id}">
                        <div><input type="checkbox" class="chon" checked onchange="toggleRowStatus(this)"></div>
                            <div class="img_cart">
                                <img src="${product.image}" alt="lỗi">
                            </div>
                        <div>${product.title}</div>
                        <div class="price">${product.price}</div>
                        <div>
                            <div class="buy-amount">
                                <button class="minus-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                      </svg>
                                </button>
                                <input class="amount" type="text" name="amount" id="amount2" value="1">
                                <button class="plus-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="delete-p">
                                <button class="trash" onclick="removeRow(${product.id})">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                                      </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    `;

                productListContainer.appendChild(productItem);
            });

        } else {
            const productDetailsContainer = document.getElementById("product-cart");
            productDetailsContainer.innerHTML = `
                    <h3>Giỏ hàng trống</h3>
                `
        }
        
    </script>
</body>

</html>