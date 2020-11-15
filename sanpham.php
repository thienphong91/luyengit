<!doctype html>
<html lang="en">

<head>
    <title>Website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- header  -->
    <div class="container">
        <div class="row">
            <div class="col-2 p-0">
                <img src="images/logo.jpg" class="img-fluid" alt="logo" />
            </div>
            <div class="col-10 p-0">
                <img src="images/banner.png" class="img-fluid" alt="banner" />
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- menu -->
    <div class="container">
        <div class="row">
            <div class="col p-0">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Action 1</a>
                                    <a class="dropdown-item" href="#">Action 2</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end  menu -->
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-0">
                <!-- categories -->
                <div class="categories py-3 text-center">
                    <h3>Danh mục</h3>
                    <div id="accordianId" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="section1HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId"
                                        aria-expanded="true" aria-controls="section1ContentId">
                                        Điện thoại
                                    </a>
                                </h5>
                            </div>
                            <div id="section1ContentId" class="collapse in" role="tabpanel"
                                aria-labelledby="section1HeaderId">
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="section2HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId"
                                        aria-expanded="true" aria-controls="section2ContentId">
                                        Laptop
                                    </a>
                                </h5>
                            </div>
                            <div id="section2ContentId" class="collapse in" role="tabpanel"
                                aria-labelledby="section2HeaderId">
                                <div class="card-body">
                                    Section 2 content
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="section3HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId"
                                        aria-expanded="true" aria-controls="section3ContentId">
                                        Đồng hồ
                                    </a>
                                </h5>
                            </div>
                            <div id="section3ContentId" class="collapse in" role="tabpanel"
                                aria-labelledby="section3HeaderId">
                                <div class="card-body">
                                    Section 2 content
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="section4HeaderId">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId"
                                        aria-expanded="true" aria-controls="section4ContentId">
                                        Phụ kiện
                                    </a>
                                </h5>
                            </div>
                            <div id="section4ContentId" class="collapse in" role="tabpanel"
                                aria-labelledby="section4HeaderId">
                                <div class="card-body">
                                    Section 2 content
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end categories -->
                <!-- bo loc -->

            </div>
            <div class="col-md-9 ">
                <!-- ds sản phẩm  -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h3>Danh sách sản phẩm(10)</h3>
                        <div class="row products">
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="images/sp/ssa1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Samsung 12</h4>
                                        <p class="card-text  text-danger text-center">15,000,000 đ</p>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-sm btn-primary">Đặt mua</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- phan trang -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <a href="trangchu.php">Trang chủ</a>
            </div>
            <div class="col-3">
                1
            </div>
            <div class="col-3">
                1
            </div>
            <div class="col-3">
                <div class="d-flex">
                    <a href="http://fb.com">
                        <img src="images/fb.png" width="30" class="img-fluid" />
                    </a>
                    <a href="http://yt.com"><img width="30" class="img-fluid" src="images/yt.png" /></a>
                    <a href="http://tw.com"><img width="30" class="img-fluid" src="images/tw.png" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src="owl/dist/owl.carousel.min.js">
    </script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</body>

</html>