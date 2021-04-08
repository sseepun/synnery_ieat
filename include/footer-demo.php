<section class="client-01 img-fill" style="background-image:url('public/assets/app/images/bg/15.jpg');">
    <div class="container">
        <h2 class="d-none">Client 01</h2>
        <h3 class="d-none">Client 01 Description</h3>
        <div class="slide-container">
            <div class="slides">
                <?php
                    for($j=0; $j<2; $j++){
                        foreach([
                            'สำนักงานส่งเสริมวิสาหกิจ<br>ขนาดกลางและขนาดย่อม(สสว.)',
                            'สำนักงานคณะกรรมการ<br>ข้อมูลข่าวสารของราชการ',
                            'สำนักงานคณะกรรมการพัฒนา<br>ระบบราชการ',
                            'ฐานข้อมูลหน่วยงานของรัฐ',
                            'กระทรวงอุตสาหกรรม',
                            'กรมส่งเสริมอุตสาหกรรม'
                        ] as $i=>$d){
                ?>
                    <div class="slide">
                        <a class="wrapper" href="#">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img src="public/assets/app/images/client/0<?= $i+1 ?>.png" alt="Client" />
                                </div>
                            </div>
                            <p><?= $d ?></p>
                        </a>
                    </div>
                <?php }}?>
            </div>
            <div class="arrows"></div>
        </div>
    </div>
</section>

<section class="call-01">
    <div class="container">
        <div class="contents">
            <div class="content">
                <h4>
                    ลงทะเบียนรับข้อมูลข่าวสาร
                </h4>
                <p>
                    ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ
                </p>
            </div>
            <div class="content">
                <div class="btns mt-0">
                    <a class="btn btn-action" href="#">
                        <span>สมัครรับข่าวสาร</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chatbot -->
<a class="chatbot" href="#">
    <div class="wrapper">
        <img src="public/assets/app/images/icon/chatbot.png" alt="Icon" />
    </div>
</a>

<!-- Back to Top -->
<a class="back-to-top" href="#">
    <div class="wrapper">
        <img src="public/assets/app/images/icon/border.png" alt="Border" >
        <em class="zmdi zmdi-chevron-up"></em>
    </div>
</a>

<!-- Footer -->
<nav class="footer style-demo bg-10 pt-4">
    <div class="container">
        <div class="hero-container">
            <a class="logo" href="#">
                <img src="public/assets/app/images/logo.png" alt="Image Logo" />
            </a>
            <div class="text-container">
                <div class="grids">
                    <div class="grid xl-60 lg-50 sm-100 mt-0">
                        <h3 class="title color-03">
                            การนิคมอุตสาหกรรมจังหวัดนครศรีธรรมราช
                        </h3>
                        <p class="desc">
                            618 ถนนนิคมมักกะสัน เเขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร 10400
                        </p>
                        <div class="d-flex fw-wrap jc-space-between">
                            <div class="footer-link">
                                <em class="zmdi zmdi-smartphone-iphone"></em>
                                <span class="color-03 fw-600">โทรศัพท์</span>
                                <a class="fw-500 color-white h-color-03" href="#">
                                    02 2530561
                                </a>
                            </div>
                            <div class="footer-link">
                                <em class="zmdi zmdi-print"></em>
                                <span class="color-03 fw-600">โทรสาร</span>
                                <a class="fw-500 color-white h-color-03" href="#">
                                    02 2526582</a>, 
                                <a class="fw-500 color-white h-color-03" href="#">
                                    02 2534086
                                </a>
                            </div>
                            <div class="footer-link">
                                <em class="zmdi zmdi-email"></em>
                                <span class="color-03 fw-600">อีเมล</span>
                                <a class="fw-500 color-white h-color-03" href="#">
                                    contact@ieat.mail.go.th
                                </a>
                            </div>
                        </div>
                        <div class="btns">
                            <a class="btn-social-white in" href="#">
                                <em class="zmdi zmdi-linkedin"></em>
                            </a>
                            <a class="btn-social-white tw" href="#">
                                <em class="zmdi zmdi-twitter"></em>
                            </a>
                            <a class="btn-social-white fb" href="#">
                                <em class="zmdi zmdi-facebook"></em>
                            </a>
                            <a class="btn-social-white yt" href="#">
                                <em class="zmdi zmdi-youtube-play"></em>
                            </a>
                        </div>
                    </div>
                    <div class="grid xl-40 lg-50 sm-100 mt-0">
                        <div class="pull-right">
                            <div class="content">
                                <a class="color-white h-color-03" href="#">
                                    เงื่อนไขการใช้งานเว็บไซต์
                                </a> 
                                <span class="mx-2">|</span> 
                                <a class="color-white h-color-03" href="#">
                                    ข้อตกลงด้านสิทธิ์ใช้งาน
                                </a> 
                                <span class="mx-2">|</span> 
                                <a class="color-white h-color-03" href="#">
                                    นโยบายความเป็นส่วนตัว
                                </a>  
                            </div>
                            <div class="content">
                                <div class="count-container">
                                    จำนวนผู้เข้าชม 
                                    <div class="count" style="background-image:url('public/assets/app/images/bg/16.jpg');">
                                        000<span class="color-03">72700</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ss-sep op-60"></div>
                <div class="bottom-container">
                    <div class="content">
                        Copyright © 2020 การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)
                    </div>
                    <div class="content">
                        <img class="hero" src="public/assets/app/images/hero/02.png" alt="Hero" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
