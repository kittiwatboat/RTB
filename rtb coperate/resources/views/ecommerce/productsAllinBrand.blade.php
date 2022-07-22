<!doctype html>
<html lang="th">

<head>
    <title>RTB - products</title>
    <?php require('inc_header.php'); ?>
</head>

<body>
    <?php require('inc_navbar.php'); ?>
    <div class="bg-bannerTitleProducts topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Jabra</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jabra</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="border-bottom my-4">
            <div class="container">
                <div class="row py-3">
                    <div class="col-sm-6">
                        <h2>หมวดหมู่ : <span class="text-green h2">Jabra Mobiles</span></h2>
                    </div>
                    <div class="col-sm-3 mb-3 mb-lg-0">
                        <select id="" class="form-select text-gray mx-2">
                            <option selected>Jabra Mobiles</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="" class="form-select text-gray mx-2">
                            <option selected>All Category</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <div class="">
                        <p class="fw-medium"><i class="fas fa-filter"></i> กรองข้อมูล</p>
                        <div class="border" id="sortBy">
                            <button class="accordion">ช่วงราคา</button>
                            <div class="panel">
                                <label class="form-label">ช่วงราคา</label>
                                <select id="" class="form-select mb-3">
                                    <option selected>-เลือก-</option>
                                    <option>low-high</option>
                                    <option>high-low</option>
                                </select>
                            </div>

                            <button class="accordion">มีสาย/ไร้สาย</button>
                            <div class="panel">
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>มีสาย
                                    <label class="form-check-label" for="radio1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">ไร้สาย
                                    <label class="form-check-label" for="radio2"></label>
                                </div>
                            </div>

                            <button class="accordion">ไมโครโฟน</button>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <button class="accordion">การเชื่อมต่อหูฟัง</button>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <button class="accordion">ระดับการกันน้ำ</button>
                            <div class="panel">
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>IPX4
                                    <label class="form-check-label" for="radio1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">IPX7
                                    <label class="form-check-label" for="radio2"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">IP67
                                    <label class="form-check-label" for="radio2"></label>
                                </div>
                            </div>

                            <button class="accordion">การเชื่อมต่อลำโพง</button>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-9 mt-4 mt-lg-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fw-medium mb-0">Jabra <span class="text-gray">(สินค้า 44 ชิ้น)</span></p>
                        <div>
                            <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-sort-amount-down-alt"></i> สินค้าใหม่
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">ลดราคา</a></li>
                                <li><a class="dropdown-item" href="#">ยอดนิยม</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="productsCate">
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder5.png" class="w-100">
                                    <a class="btn rounded-pill" href="products-detailFlag.php">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder6.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder7.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-3 py-3">
                                    <img src="images/Product/listOrder8.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder9.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder10.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder12.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder11.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder12.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder13.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder14.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <img src="images/Product/listOrder15.png" class="w-100">
                                    <a class="btn rounded-pill" href="#">View Products</a>
                                    <div class="text-center my-3 px-3">
                                        <h6>Jabra Elite3</h6>
                                        <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                        <p>฿2,490</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-lg-5 mt-2">
                        <a class="btn btn-gray rounded-pill px-5" href="#">ดูเพิ่มเติม</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="bottomFoot"></div>
    </div>
    <?php require('inc_footer.php'); ?>
    <script>
        $('#linkMenuTop .nav-item').eq(3).addClass('active');
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

</body>

</html>