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
                        Form
                        <form>
                            text: <input type="text" /><br>
                            password: <input type="password" /><br>
                            textarea: <textarea rows="10"></textarea><br>
                            radio: <input name="gt" type="radio" /> nam <input name="gt" type="radio" /> nu<br>
                            checkbox: <input type="checkbox" /> nam <input type="checkbox" /> nu<br>
                            select:
                            <select>
                                <option>item 1</option>
                                <option>item 2</option>
                                <option>item 3</option>
                                <option>item 51</option>
                            </select><br>
                            multi select: <select size="2" multiple="multiple">
                                <option>item 1</option>
                                <option>item 2</option>
                                <option>item 3</option>
                                <option>item 51</option>
                            </select><br>
                            button: <input type="button" value="click vao day" /><br>
                            <input type="reset" value="click vao day" /><br>
                            <input type="submit" value="click vao day" /><br>
                            <button type="button">click vao day</button><br>
                            <button type="reset">click vao day</button>
                            <button type="submit">click vao day</button>
                        </form>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </form>
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
 

</body>

</html>
