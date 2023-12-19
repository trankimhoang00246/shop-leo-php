<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./assets/css/detail_product.css" rel="stylesheet" />
    <link href="./assets/css/style.css" rel="stylesheet" />
    <title>Sản phẩm</title>
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
    <div class="main-product">
        <div class="t__main-product">


            <div id="product-details">
                <!-- Product information will be displayed here -->
            </div>

            <script>
                // Retrieve the productId from the URL query parameter
                const urlParams = new URLSearchParams(window.location.search);
                const productId = urlParams.get("id");

                // Array of products
                const products = [
                    {
                        "id": 1,
                        "title": "Áo Đá Bóng Bồ Đào Nha",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/1.jpeg"
                    },
                    {
                        "id": 2,
                        "title": "Áo Đá Bóng Argetina",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/2.webp"
                    },
                    {
                        "id": 3,
                        "title": "Áo Đá Bóng Pics",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/3.jpg"
                    },
                    {
                        "id": 4,
                        "title": "Áo Đá Bóng Poncon",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/4.jpg"
                    },
                    {
                        "id": 5,
                        "title": "Áo Đá Bóng Sườn Xám",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/5.jpg"
                    },
                    {
                        "id": 6,
                        "title": "Áo Đá Bóng Tottanham",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/12.jpg"
                    },
                    {
                        "id": 7,
                        "title": "Áo Đá Bóng Bồ Sọc",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/7.png"
                    },
                    {
                        "id": 8,
                        "title": "Áo Đá Bóng Arsenal",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/8.jpg"
                    },
                    {
                        "id": 9,
                        "title": "Áo Đá Bóng Có Cổ Xanh",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/9.jpg"
                    },
                    {
                        "id": 10,
                        "title": "Áo Đá Bóng Đức",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/10.jpg"
                    },
                    {
                        "id": 11,
                        "title": "Áo Đá Bóng Pháp",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/11.jpg"
                    },
                    {
                        "id": 12,
                        "title": "Áo Đá Bóng Mu",
                        "price": "₫130,000",
                        "description": "Mô tả",
                        "image": "../assets/img/shirt/12.jpg"
                    }
                ];

                // Find the matching product
                const product = products.find((product) => product.id === parseInt(productId));

                // Display the product information
                if (product) {
                    const productDetailsContainer = document.getElementById("product-details");
                    productDetailsContainer.innerHTML = `
                        
            <div class="t__main__left">
                <div class="t__left__img">
                    <img src="${product.image}">
                </div>
            </div>
            <div class="t__main__right">
                
                <div class="text">
                    <div class="text__name-product">
                        ${product.title}<br>
                    </div>
                    <div class="text__price-product">
                        ${product.price}
                    </div>
                    <div class="text__inf-product">
                        ${product.description}
                        <br>
                    </div>
                    <div class="quality-product">
                        <div class="text__title">
                            <h>Chất lượng</h>
                            <ul>
                                <li>Mực in Korea, cho màu in lên Vải Sáng và Nổi bật x2 lần bình thường</li>
                                <li>Vải công nghệ Cool-HighBreath x2.67 lần độ mát và co giãn so với thị trường</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inf-promotion">
                        <h>Khuyến mãi - Ưu đãi</h>
                        <ul>
                            <li>Hỗ trợ 20k phí SHIP cho đơn từ 280k</li>
                            <li>Giao GẤP 2h Sài Gòn >> Gọi ngay 0902 979 384</li>
                            <li>Sẵn kho hàng ngàn bộ bóng đá >>> Quý khách cần đặt đồng phục Đội, Công ty.., nhấc máy
                                gọi ngay, Hattrick kiểm kho báo liền!</li>
                            <li>Đặc biệt: Mua càng nhiều - Giá càng giảm sâu!</li>
                        </ul>
                    </div>
                </div>
                <div class="click-size">
                    <button class="button-size">S</button>
                    <button class="button-size">M</button>
                    <button class="button-size">L</button>
                    <button class="button-size">XL</button>
                    <button class="button-size">XXL</button>
                </div>


                <div class="add-cart" onClick="addProductToCart(${product.id})">
                    <p>THÊM VÀO GIỎ HÀNG</p>
                </div>

                
                <div class="price-list">
                    <div class="l__price-list">
                        <h style="color: rgb(204, 6, 6);">Đặt càng nhiều - Giá càng rẻ</h>
                        <ul>
                            <li>Không áp dụng sản phẩm SALE OFF, không cộng dồn khuyến mãi.</li>
                            <li>Giá sản phẩm chưa bao gồm in ấn</li>
                        </ul>
                    </div>
                    <table>
                        <tr>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </tr>
                        <tr>
                            <td>5-9</td>
                            <td>100.000₫</td>
                        </tr>
                        <tr>
                            <td>10-19</td>
                            <td>90.000₫</td>
                        </tr>
                        <tr>
                            <td>20-29</td>
                            <td>80.000₫</td>
                        </tr>
                        <tr>
                            <td> >30</td>
                            <td>75.000₫</td>
                        </tr>
                    </table>
                </div>
            </div>
                
                
                `;
                } else {
                    // Handle the case when the product is not found
                    const productDetailsContainer = document.getElementById("product-details");
                    productDetailsContainer.innerHTML = "<p>Product not found.</p>";
                }
            </script>

        </div>
        <!-- voucher -->
        <div class="m__main-product">
            <div class="voucher">
                <div class="col-voucher">
                    <div class="title-voucher">
                        Nhập mã: Leo2023
                    </div>
                    <div class="text-voucher">
                        Giảm 20k ship cho đơn hàng giá trị từ 280k. (Không áp dụng sản phẩm SALE OFF)
                    </div>
                    <div class="copy-voucher">
                        <p1>Sao chép</p1>
                        <p2>Điều kiện</p2>
                    </div>
                </div>
                <div class="col-voucher">
                    <div class="title-voucher">
                        Nhập mã: Leo2023
                    </div>
                    <div class="text-voucher">
                        Giảm 20k ship cho đơn hàng giá trị từ 280k. (Không áp dụng sản phẩm SALE OFF)
                    </div>
                    <div class="copy-voucher">
                        <p1>Sao chép</p1>
                        <p2>Điều kiện</p2>
                    </div>
                </div>
                <div class="col-voucher">
                    <div class="title-voucher">
                        Nhập mã: Leo2023
                    </div>
                    <div class="text-voucher">
                        Giảm 20k ship cho đơn hàng giá trị từ 280k. (Không áp dụng sản phẩm SALE OFF)
                    </div>
                    <div class="copy-voucher">
                        <p1>Sao chép</p1>
                        <p2>Điều kiện</p2>
                    </div>
                </div>
                <div class="col-voucher">
                    <div class="title-voucher">
                        Nhập mã: Leo2023
                    </div>
                    <div class="text-voucher">
                        Giảm 20k ship cho đơn hàng giá trị từ 280k. (Không áp dụng sản phẩm SALE OFF)
                    </div>
                    <div class="copy-voucher">
                        <p1>Sao chép</p1>
                        <p2>Điều kiện</p2>
                    </div>
                </div>
            </div>
            <div class="similar-product">
                <hr>
                <h class="title-sim">
                    Sản phẩm tương tự
                </h>
                <div class="row-4-product">
                    <div class="column">
                        <div class="d-product">
                            <a href="./detail_product.php">
                                <img class="img-before" src="../assets/img/ao-bong-da-miami-2023-home-front.jpg">
                                <img class="img-after" src="../assets/img/ao-bong-da-miami-2023-home-back.jpg">
                                <div class="name-product">Áo Miami Hồng Mè 2023</div>
                                <div class="price-product">₫115,000</div>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="d-product">
                            <a href="./detail_product.php">
                                <img class="img-before" src="../assets/img/ao-bong-da-mc-2023-home-front.jpg">
                                <img class="img-after" src="../assets/img/ao-bong-da-mc-2023-home-back.jpg">
                                <div class="name-product">Áo M.City 2023-2024</div>
                                <div class="price-product">₫115,000</div>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="d-product">
                            <a href="./detail_product.php">
                                <img class="img-before" src="../assets/img/ao-bong-da-mc-2023-three-front.jpg">
                                <img class="img-after" src="../assets/img/ao-bong-da-mc-2023-three-back.jpg">
                                <div class="name-product">Áo M.City Away 2023-2024 </div>
                                <div class="price-product">₫115,000</div>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="d-product">
                            <a href="./detail_product.php">
                                <img class="img-before" src="../assets/img/ao-bong-da-mu-2023-home-front.jpg">
                                <img class="img-after" src="../assets/img/ao-bong-da-mu-2023-home-back.jpg">
                                <div class="name-product">Áo M.United Home 2023-24</div>
                                <div class="price-product">₫115,000</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b__main-product">
            <hr>
            <h1>ĐẶC ĐIỂM NỔI BẬT</h1>
            <h2> Áo bóng đá Barca 2023 - 2024</h2>
            <p>Áo Barca 2023 vừa ra mắt, có thiết kế đẹp với màu sắc thu hút.</p>
            <ul>
                <li>Chất liệu: vải thun lạnh thể thao, thoáng mát, đường may kỹ.</li>
                <li>Có thể in tên, số, logo Team với nhiều chất liệu: in lụa, in chuyển nhiệt, in decal.</li>
                <li>Phù hợp làm đồng phục đội bóng, đặt in áo bóng đá cho Team, áo bóng đá công ty, nhóm, hội.</li>
                <li>Nhiều ưu đãi - chiết khấu cao khi đặt đội</li>
            </ul>
            <h2>Đồ đá banh Barcelona 2023-24: Áo đấu sân nhà, sân khách và áo đấu thứ ba mới</h2>
            <div class="img-h2">
                <style>
                    .container {
                        text-align: center;
                        width: 550px;
                        margin: auto;
                        border: solid 20px silver;
                        padding-bottom: 5px;
                        background-color: silver;
                        border-radius: 10px;
                    }

                    #anh {
                        height: 500px;
                        width: 100%;
                        transition: opacity 1s;
                    }

                    .btn_container {
                        margin-top: 20px;
                    }

                    .btn_container button {
                        width: 90px;
                        height: 40px;
                        margin-right: 15px;
                    }

                    h3 {
                        text-align: center;
                        font-size: 1.5em;
                        width: 750px;
                        margin: 50px auto 5px auto;
                    }
                </style>

                <div class="container">
                    <img id="anh" src="./assets/img/slideshowdetail/0.jpg" />
                    <div class="btn_container">
                        <button onclick="first()">
                            << </button>
                                <button onclick="prev()">
                                    < </button>
                                        <button onclick="next()"> > </button>
                                        <button onclick="last()"> >> </button>
                    </div>

                </div>
                <script>
                    var images = [];
                    var index = 0;
                    var sohinh = 4;
                    for (var i = 0; i < sohinh; i++) {
                        images[i] = new Image();
                        images[i].src = "./assets/img/slideshowdetail/" + i + ".jpg";
                    }
                </script>
                <script>
                    function first() {
                        index = 0;
                        var anh = document.getElementById("anh");
                        anh.src = images[index].src;
                    }
                    function last() {
                        index = images.length - 1;
                        var anh = document.getElementById("anh");
                        anh.src = images[index].src;
                    }
                    function next() {
                        index++;
                        if (index >= images.length)
                            index = 0;
                        var anh = document.getElementById("anh");
                        anh.src = images[index].src;
                    }
                    function prev() {
                        index--;
                        if (index < 0)
                            index = images.length - 1;
                        var anh = document.getElementById("anh");
                        anh.src = images[index].src;
                    }
                </script>
            </div>
            <p>Hãng đã tiết lộ bộ quần áo bóng đá sân nhà hoàn toàn mới của Barcelona 2023-24 vào ngày 15 tháng 6 .
                Bộ quần áo bóng đá mới rất độc đáo vì đây là bộ quần áo bóng đá đầu tiên của Câu lạc bộ được lấy cảm
                hứng từ đội nữ.
                <br>
                Bộ quần áo bóng đá sân nhà có các sọc rộng cổ điển - đồng nghĩa với Barca - trong màu sắc nguyên bản của
                blaugrana,
                các chi tiết quan trọng đi kèm với huy hiệu được đặt trong một viên kim cương.
                <br>
                Viên kim cương đại diện cho đội nữ đầu tiên từng chơi một trận bóng đá tại Spotify Camp Nou,
                một ví dụ về tinh thần tiên phong của Barça, luôn đóng vai trò dẫn đầu trong cả thể thao và xã hội,
                liên kết với thành công liên tục.
                <br>
                Áo thi đấu sẽ có đối tác chính của đội nam và nữ, Spotify, có logo ở mặt trước,
                Các thương hiệu Ambilight TV và Bimbo sẽ lần lượt có trên tay áo thi đấu của đội một nam và nữ. Logo
                UNHCR/ACNUR
                sẽ lại xuất hiện phía trên số ở mặt sau.
            </p>
        </div>
    </div>
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
</body>

<script>
    function addProductToCart(productId) {
        var products = [
            {
                "id": 1,
                "title": "Áo Đá Bóng Bồ Đào Nha",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/1.jpeg"
            },
            {
                "id": 2,
                "title": "Áo Đá Bóng Argetina",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/2.webp"
            },
            {
                "id": 3,
                "title": "Áo Đá Bóng Pics",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/3.jpg"
            },
            {
                "id": 4,
                "title": "Áo Đá Bóng Poncon",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/4.jpg"
            },
            {
                "id": 5,
                "title": "Áo Đá Bóng Sườn Xám",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/5.jpg"
            },
            {
                "id": 6,
                "title": "Áo Đá Bóng Tottanham",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/12.jpg"
            },
            {
                "id": 7,
                "title": "Áo Đá Bóng Bồ Sọc",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/7.png"
            },
            {
                "id": 8,
                "title": "Áo Đá Bóng Arsenal",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/8.jpg"
            },
            {
                "id": 9,
                "title": "Áo Đá Bóng Có Cổ Xanh",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/9.jpg"
            },
            {
                "id": 10,
                "title": "Áo Đá Bóng Đức",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/10.jpg"
            },
            {
                "id": 11,
                "title": "Áo Đá Bóng Pháp",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/11.jpg"
            },
            {
                "id": 12,
                "title": "Áo Đá Bóng Mu",
                "price": 130000,
                "description": "Mô tả",
                "image": "../assets/img/shirt/12.jpg"
            }
        ]
        products.forEach((product) => {
            if (product.id === productId) {
                console.log("Add product to cart: ");
                console.log(product);

                // Thêm sản phẩm đã chọn vào danh sách JSON
                const storedProducts = JSON.parse(localStorage.getItem("storedProducts")) || [];
                storedProducts.push(product);
                localStorage.setItem("storedProducts", JSON.stringify(storedProducts));

            }
        })
    }
</script>

</html>