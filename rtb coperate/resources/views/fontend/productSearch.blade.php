<!doctype html>
<html lang="th">

<head>
    <title>RTB - products</title>
    @include('fontend.inc_header')
</head>

<body>
    @include('fontend.inc_navbar')
    <div class="bg-bannerTitleProductsSearch topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>ผลการค้นหาสินค้า</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Search</li>
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
                        <h2>ผลการค้นหาสินค้า</h2>
                        <p>จำนวน 5 ชิ้น</p>
                    </div>
                    <div class="col-sm-3 mb-3 mb-lg-0">
                        <select id="" class="form-select text-gray mx-2">
                            <option selected>All</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="" class="form-select text-gray mx-2">
                            <option selected>All</option>
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
                                    <input type="checkbox" class="form-check-input" id="checkbox1" name="optcheckbox" value="option1" checked>มีสาย
                                    <label class="form-check-label" for="checkbox1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">ไร้สาย
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                            </div>

                            <button class="accordion">ไมโครโฟน</button>
                            <div class="panel">
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox1" name="optcheckbox" value="option1" checked>1 ตัว
                                    <label class="form-check-label" for="checkbox1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">2 ตัว
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">3 ตัว
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">ทุกแบบ
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                            </div>

                            <button class="accordion">การเชื่อมต่อหูฟัง</button>
                            <div class="panel">
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox1" name="optcheckbox" value="option1" checked>Bluetooth
                                    <label class="form-check-label" for="checkbox1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">USB
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">Type C
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                            </div>

                            <button class="accordion">ระดับการกันน้ำ</button>
                            <div class="panel">
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox1" name="optcheckbox" value="option1" checked>IPX4
                                    <label class="form-check-label" for="checkbox1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">IPX7
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">IP67
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                            </div>

                            <button class="accordion">การเชื่อมต่อลำโพง</button>
                            <div class="panel">
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox1" name="optcheckbox" value="option1" checked>Bluetooth
                                    <label class="form-check-label" for="checkbox1"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">USB
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="checkbox2" name="optcheckbox" value="option2">Type C
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-lg-9 mt-4 mt-lg-0">
                    <div class="row" id="productsCate">
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <div class="figure">
                                        <img src="images/Product/listOrder5.png" class="w-100 img-main" srcset="images/Product/listOrder5.png">
                                        <img src="images/Product/listOrder14.png" class="w-100 image-hover" srcset="images/Product/listOrder14.png">
                                        <a class="btn rounded-pill" href="products-detail.php">View Products</a>
                                        <div class="text-center my-3 px-3">
                                            <h6>Jabra Elite3</h6>
                                            <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            <p>฿2,490</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <div class="figure">
                                        <img src="images/Product/listOrder5.png" class="w-100 img-main" srcset="images/Product/listOrder5.png">
                                        <img src="images/Product/listOrder6.png" class="w-100 image-hover" srcset="images/Product/listOrder6.png">
                                        <a class="btn rounded-pill" href="products-detail.php">View Products</a>
                                        <div class="text-center my-3 px-3">
                                            <h6>Jabra Elite3</h6>
                                            <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            <p>฿2,490</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <div class="figure">
                                        <img src="images/Product/listOrder5.png" class="w-100 img-main" srcset="images/Product/listOrder5.png">
                                        <img src="images/Product/listOrder7.png" class="w-100 image-hover" srcset="images/Product/listOrder7.png">
                                        <a class="btn rounded-pill" href="products-detail.php">View Products</a>
                                        <div class="text-center my-3 px-3">
                                            <h6>Jabra Elite3</h6>
                                            <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            <p>฿2,490</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <div class="figure">
                                        <img src="images/Product/listOrder5.png" class="w-100 img-main" srcset="images/Product/listOrder5.png">
                                        <img src="images/Product/listOrder8.png" class="w-100 image-hover" srcset="images/Product/listOrder8.png">
                                        <a class="btn rounded-pill" href="products-detail.php">View Products</a>
                                        <div class="text-center my-3 px-3">
                                            <h6>Jabra Elite3</h6>
                                            <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            <p>฿2,490</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="item">
                                <div class="px-lg-3 px-0 py-lg-3 py-0">
                                    <div class="figure">
                                        <img src="images/Product/listOrder5.png" class="w-100 img-main" srcset="images/Product/listOrder5.png">
                                        <img src="images/Product/listOrder9.png" class="w-100 image-hover" srcset="images/Product/listOrder9.png">
                                        <a class="btn rounded-pill" href="products-detail.php">View Products</a>
                                        <div class="text-center my-3 px-3">
                                            <h6>Jabra Elite3</h6>
                                            <p class="text-gray fs-14">Jabra True wireless Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                            <p>฿2,490</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <div class="bottomFoot"></div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(2).addClass('active');
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