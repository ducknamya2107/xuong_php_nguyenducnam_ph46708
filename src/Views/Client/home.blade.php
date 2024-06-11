<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/client/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/client/sp.css')}}">
    <!-- <script src="{{ asset('assets/admin/js/custom.js') }}"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<!-- <body> -->
<!-- <div class="container">
        <div class="row">
            <h1 class="mt-5">Welcome {{ $name }} to my website!</h1>

            <nav>
                @if (!isset($_SESSION['user']))
                    <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                @endif

                @if (isset($_SESSION['user']))
                    <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                @endif
            </nav>

        </div> -->

<!-- <div class="row">

            @foreach ($products as $product)
                <div class="col-md-4 mb-2 mt-2">
                    <div class="card">
                        <a href="{{ url('products/' . $product['id']) }}">
                            <img class="card-img-top" style="max-height: 200px"
                                src="{{ asset($product['img_thumbnail']) }}" alt="Card image">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ url('products/' . $product['id']) }}">
                                    {{ $product['name'] }}</a>
                            </h4>

                            <a href="{{ url('cart/add') }}?quantity=1&productID={{ $product['id'] }}" 
                                class="btn btn-primary">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div> -->
<!-- </div>
</body> -->

<body>
    <header>
        <div class="logo">
            <a href="#">
                <img src="{{ asset('assets/client/img/logo_coolmate.png')}}" alt="" width="100px">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="">Sản phẩm</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="">Đồ lót</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="">Mặc hàng ngày</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="">Đồ thể thao</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="">Care&Share</a>
                </li>
            </ul>
        </div>
        <div class="list-icon">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass" style="color: aliceblue;"></i>
            </div>
            <div class="search-bar">
                <a href="">
                    <p> Tìm sản phẩm...</p>
                </a>
            </div>
            <div class="user">
            @if (!isset($_SESSION['user']))
                    <a class="btn btn-primary" href="{{ url('login') }}">Login</a>
                @endif
                <!-- <a href="{{ asset('assets/client/user.html')}}"><i class="fa-solid fa-user" style="color: aliceblue;"></i></a> -->
            </div>
            <div class="bag">
                <a href="sp.html"><i class="fa-solid fa-bag-shopping" style="color: aliceblue;"></i></a>
            </div>
        </div>
    </header>
    <main>
        <img src="{{ asset('assets/client/img/banner.avif ')}}" alt="" width="100%">
        <div class="click-button">
            <div class="spnew">
                <a href="">
                    <h1>Sản phẩm mới</h1>
                </a>
            </div>
            <div class="gach">
                <a href="">
                    <h1>|</h1>
                </a>
            </div>
            <div class="sphot">
                <a href="">
                    <h1>Bán chạy nhất</h1>
                </a>
            </div>
        </div>
        <div class="list-sp">
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/spmoi1.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>

                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src=" {{ asset('assets/client/img/spmoi2.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/spmmoi3.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/spmoi4.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/spmoi5.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
        </div>
        <div class="banner1">
            <div class="image-container">
                <img src="{{ asset('assets/client/img/banner4.webp')}}" alt="" width="100%">
                <div class="image-text">ĐỒ MẶC HÀNG NGÀY</div>
                <div class="image-text2">Sẵn sàng mặc ngay khi mới mang về</div>
                <div class="image-text3">Mua 2 giảm 10%</div>
                <a href="">
                    <button class="khamphangay" style="background-color: black; color: white;width: 200px; height: 40px;">Khám Phá Ngay</button>
                </a>

            </div>
        </div>
        <div class="list-sp" style="margin-top: 10px">

            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/hangngay1.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/hangngay2.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/hangngay3.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/hangngay4.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/hangngay5.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
        </div>
        <div class="banner2" style="margin-top: 10px">
            <div class="image-container">
                <img src="{{ asset('assets/client/img/banner3.avif')}}" alt="" width="100%">
                <div class="image-text">QUẦN LÓT NAM</div>
                <div class="image-text2">3 triệu chiếc quần đã đến tủ đồ các chàng</div>
                <div class="image-text3">Mua combo 3 nhận ngay quà tặng</div>
            </div>
        </div>
        <div class="list-sp" style="margin-top: 10px">

            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/dolot1.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/dolot2.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/dolot3.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
           <div class="box-shirt">
                <img src="{{ asset('assets/client/img/dolot4.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton <h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/dolot4.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton <h4>
                <h4>269.000đ</h4>
            </div>
            <!-- <div class="box-shirt"> đến sự thoáng mát trên suốt đường chạy</div> -->
            <div class="image-text3">Tặng áo essential cho đơn 499k</div>
        </div>

        </div>
        <div class="banner5" style="margin-top: 10px">
                <div class="image-container">
                    <img src="{{ asset('assets/client/img/banner5.webp')}}" alt="" width="100%">
                    <!-- {{ asset('assets/client/img/banner5.webp')}} -->
                    <div class="image-text">RUNNING COLLECTION</div>
                    <div class="image-text2">Mang đến sự thoáng mát trên suốt đường chạy</div>
                    <div class="image-text3">Tặng áo essential cho đơn 499k</div>
                </div>
            </div>
        <div class="list-sp" style="margin-top: 10px">

            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/chay1.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/chay2.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/chay3.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/chay4.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
            <div class="box-shirt">
                <img src="{{ asset('assets/client/img/chay5.jpg')}}" alt="" width="300px">
                <div class="selectcolor">
                    <button style="background-color: aliceblue;"> </button>
                    <button style="background-color: rgb(0, 0, 0);"> </button>
                    <button style="background-color: rgb(20, 113, 193);"> </button>
                    <button style="background-color: rgb(164, 22, 39);"> </button>
                </div>
                <h4>Áo dài tay Cotton </h4>
                <h4>269.000đ</h4>
            </div>
        </div>

    </main>
    <footer>
        <div class="fist-foot">
            <div class="noidung">
                <h4>COOLMATE lắng nghe bạn!</h4>
                <p>chúng tôi luôn trân trọng và đợi nhận được mọi ý kiến đóng góp từ khách hàng
                    để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.</p>
                <a href="#">ĐÓNG GÓP Ý KIẾN</a>
            </div>
            <div class="hotline">
                <p>Hotline: 1900.272.373 - 028.7777.2737 </p>
                <p>Email: namndph46708@fpt.edu.con</p>
            </div>
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-tiktok"></i>
            </div>
        </div>
        <hr class="gach">
        <div class="last-foot">
            <div class="duoi">
                <div class="content">
                    <h4>CoolClub</h4>
                    <p>Đăng ký thành viên</p>
                    <p>ưu đãi & đặc quền</p>
                </div>
                <div class="content">
                    <h4>Chính sách</h4>
                    <p>Chính sách đổi trả 60 ngày</p>
                    <p>Chính sách khuyến mãi</p>
                </div>
                <div class="content">
                    <h4>Chăm sóc khách hàng</h4>
                    <p>hỏi đáp -FAQs</p>
                    <p>Trải nghiệm mua sắm</p>
                </div>
                <div class="content">
                    <h4>tài liệu - tuyển dụng</h4>
                    <p>Tuyển dụng</p>
                    <p>Đăng ký bản quyền</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>

</html>