<!doctype html>
<html lang="th">

<head>
    <title>RTB - products</title>
    @include('fontend.inc_header')

</head>

<body>
    @include('fontend.inc_navbar')

    <div class="bg-bannerTitleDetailFlag topBannerTitle">
        <div class="container-fluid">
            <div class="boxBannerTitle">
                <div class="titleBanner-center">
                    <h1>Jabra Elite85T Advanced ANC</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Jabra</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jabra Elite85T Advanced ANC</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="row my-3 my-lg-5">
                <div class="col-sm-4">
                    <div class="galleriesProduct">
                        <div class="mySlides">
                            <img src="images/Product/galleries1.png" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="images/Product/galleries2.png" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="images/Product/galleries3.png" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <img src="images/Product/galleries1.png" style="width:100%">
                        </div>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <div class="d-flex">
                            <div class="mx-1">
                                <img class="demo border" src="images/Product/galleries1.png" onclick="currentSlide(1)">
                            </div>
                            <div class="mx-1">
                                <img class="demo border" src="images/Product/galleries2.png" onclick="currentSlide(2)">
                            </div>
                            <div class="mx-1">
                                <img class="demo border" src="images/Product/galleries3.png" onclick="currentSlide(3)">
                            </div>
                            <div class="mx-1">
                                <img class="demo border" src="images/Product/galleries1.png" onclick="currentSlide(4)">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="py-3 py-lg-5 px-2 px-lg-5">
                        <div class="d-flex align-items-center">
                            <h4 class="text-green border-end border-green border-3 pe-2">Jabra </h4>
                            <h4 class="text-gray ms-2">Jabra True wireless</h4>
                        </div>
                        <h2 class="text-darkGray mt-2">Jabra Elite85T Advanced ANC</h2>
                        <p class="text-gray fs-18">หูฟังบลูทูธไร้สาย</p>
                        <h4 class="text-green">฿9,590</h4>
                        <p class="text-gray fw-medium fs-18 mb-2">DESCRIPTION</p>
                        <p class="text-gray">เป็น Gen 5 มาพร้อมกับฟังก์ชั่น ANC (Active Noise Canceelation)
                            และรองรับ Wireless Charge กับหูฟังที่ได้รับการพิสูจน์แล้วว่าเป็นหูฟัง
                            ไร้สายที่มีประสบการณ์ในการผลิตหูฟังบลูทูธมาอย่างยาวนาน...</p>
                        <p class="text-gray fw-medium fs-18">COLOR</p>
                        <div class="d-flex mt-0 mt-lg-3">
                            <div class="">
                                <label class="selectColor">
                                    <input type="radio" name="color" selected checked class="card-input-element" />
                                    <div class="card card-default card-input mx-2 rounded-0">
                                        <a class="bg-secondary px-4 py-2"></a>
                                    </div>
                                </label>
                            </div>
                            <div class="">
                                <label class="selectColor">
                                    <input type="radio" name="color" class="card-input-element" />
                                    <div class="card card-default card-input mx-2 rounded-0">
                                        <a class="bg-dark px-4 py-2"></a>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="input-group border rounded-3 w-100 mb-3">
                                    <button class="btn sub" type="button" id="sub">-</button>
                                    <input class="form-control border-0 text-center field" placeholder="" type="text" id="1" value="1">
                                    <button class="btn add" type="button" id="add">+</button>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <a class="btn btn-green w-100"><i class="fab fa-shopify"></i> ADD TO CART</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between my-2 my-lg-0">
                            <div class="text-gray">
                                <a>SHARE</a>
                                <a class="btn text-gray px-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn text-gray px-1" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn text-gray px-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn text-gray px-1" href="#"><i class="fab fa-line"></i></a>
                            </div>
                            <div>
                                <a class="btn text-gray px-1"><i class="fas fa-star"></i> FAVOURITE</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-3 my-lg-5">
            <div class="row bg-gray7">
                <div class="col-sm-12 col-md-5 px-0">
                    <div>
                        <img src="images/bannerTitleDetailflag2.png" class="w-100">
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="px-lg-5 px-2 pt-lg-4 pt-3">
                        <h3>คุณสมบัติสินค้า</h3>
                        <div class="row mt-4">
                            <div class="col-sm-5">
                                <p class="fw-medium">Type :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>Bluetooth Headphone</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Microphone Frequency Response :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>100Hz - 10 kHz</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Connector :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>Bluetooth</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Cord Length :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>N/A</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Color :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>Titanium Black</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Input Impedance :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>N/A</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Maximum Input Power :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>5V / 1A</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Sensitivity :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>N/A</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Warranty :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>2 Years</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="fw-medium">Option :</p>
                            </div>
                            <div class="col-sm-5">
                                <p>N/A</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3>รายละเอียด Jabra Elite85T Advanced ANC</h3>
            <div class="my-4">
                <iframe width="100%" height="578px" src="https://www.youtube.com/embed/V0dFrIeWRrY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="mt-3 mt-lg-5">
                <div>
                    <h4>Jabra Elite 85t</h4>
                    <p class="text-gray fs-18">ออกแบบมาเพื่อการโทรและฟังเพลงอย่างที่ไม่เคยมีมาก่อน Jabra Advanced Active Noise-Cancelling ที่ปรับได้อย่างเต็มที่การ
                        ออกแบบไร้สายที่กะทัดรัดอย่างแท้จริง</p>
                    <img src="images/accesary.png" class="w-100 my-3 my-lg-4 px-lg-5">
                </div>
                <div>
                    <h4>การตัดเสียงรบกวนระดับถัดไป</h4>
                    <p class="text-gray fs-18">หูฟัง Elite 85t ได้รับการออกแบบทางวิศวกรรมด้วยเทคโนโลยีตัดเสียงรบกวนที่ล้ำสมัยที่สุดในตลาดเพื่อให้คุณสามารถควบคุมวิธีที่
                        คุณได้ยินโลกรอบตัวคุณได้อย่างสมบูรณ์</p>
                    <img src="images/banner/productDetailFlag.png" class="w-100 my-3 my-lg-4 px-lg-5">
                </div>
                <div class="row my-3 my-lg-5">
                    <div class="col-sm-6 pe-lg-5">
                        <h4>ไมโครโฟนทั้งหมดไม่มีเสียงรบกวน</h4>
                        <p class="text-gray fs-18">ANC ดิจิทัลขั้นสูงของเราใช้ไมโครโฟนสองตัวในเอียร์บัดแต่ละ
                            อันเพื่อตัดเสียงรบกวนที่คุณไม่ต้องการได้ยินก่อนที่คุณจะได้ยิน</p>
                        <img src="images/banner/productDetailFlag2.png" class="w-100">
                    </div>
                    <div class="col-sm-6 ps-lg-5 mt-3 mt-lg-0">
                        <h4>ตัวเล็ก เสียงดัง</h4>
                        <p class="text-gray fs-18">ลำโพงขนาด 12 มม. อีควอไลเซอร์ที่ปรับแต่งได้และตัวแปลง
                            สัญญาณ AAC และ SBC เพื่อเสียงที่สมบูรณ์และมีราย
                            ละเอียดให้เสียงเบสที่ทรงพลังในตัวเครื่องขนาดเล็ก เสียง
                            หน้าต่างสั่นสะเทือนขนาดใหญ่มหึมาสั่นสะเทือนในปลอกเล็ก
                            มากคุณต้องเห็น (และได้ยิน) ถึงจะเชื่อ</p>
                        <img src="images/banner/productDetailFlag3.png" class="w-100">
                    </div>
                </div>
                <h4>แบตเตอรี่</h4>
                <p class="text-gray fs-18">เราใช้เทคโนโลยีประสิทธิภาพแบตเตอรี่ขั้นสูงเพื่อให้แน่ใจว่าเด็กน้อยเหล่านี้สามารถติดตามคุณได้นานถึง 5.5 ชั่วโมงต่อการชาร์จหนึ่ง
                    ครั้งโดยเปิด ANC โดยใช้เวลารวม 25 ชั่วโมงด้วยเคสชาร์จขนาดกะทัดรัด</p>
                <img src="images/banner/productDetailFlag4.png" class="w-100 my-1 my-lg-4">
            </div>
        </div>
        <div class="bottomFoot"></div>
    </div>
    @include('fontend.inc_footer')
    <script>
        $('#linkMenuTop .nav-item').eq(2).addClass('active');
    </script>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
    <script>
        var unit = 1;
        var total;
        // if user changes value in field
        $('.field').change(function() {
            unit = this.value;
        });
        $('.add').click(function() {
            unit++;
            var $input = $(this).prevUntil('.sub');
            $input.val(unit);
            unit = unit;
        });
        $('.sub').click(function() {
            if (unit > 0) {
                unit--;
                var $input = $(this).nextUntil('.add');
                $input.val(unit);
            }
        });
    </script>

</body>

</html>