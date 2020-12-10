<section class="client-01 img-fill" style="background-image:url('public/assets/app/images/bg/15.jpg');">
    <div class="container">
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

<!-- Footer -->
<nav class="footer bg-02">
    <div class="container">

        <div class="tag">
            <i class="zmdi zmdi-close"></i>
            <p>ลิงก์ที่เกี่ยวข้อง</p>
        </div>

        <div class="grids">
            <div class="grid xl-20 lg-1-3 sm-50 mt-0">
                <h4 class="title color-white">Link ภายใน</h4>
                <ul class="ss-list color-white fw-200">
                    <li><a href="#">ช่องทางร้องเรียน</a></li>
                    <li><a href="#">รับสมัครงาน</a></li>
                    <li><a href="#">จัดซื้อจัดจ้าง</a></li>
                    <li><a href="#">การจิดการความรู้ (KM)</a></li>
                    <li><a href="#">Intranet</a></li>
                    <li><a href="#">VPN</a></li>
                    <li><a href="#">ข้อบังคับ PSM</a></li>
                    <li><a href="#">นิคมของเรา</a></li>
                    <li><a href="#">มูลนิธินิคมอุตสหากกรรมไทย</a></li>
                    <li><a href="#">มูลนิธิเพื่อการอนุรักษ์-พื้นฟูปะการังและชายหาด</a></li>
                </ul>
            </div>
            <div class="grid xl-20 lg-1-3 sm-50 mt-0">
                <h4 class="title color-white">กระทรวงอุตสาหกรรม</h4>
                <ul class="ss-list color-white fw-200">
                    <li><a href="#">กระทรวงอุตสาหกรรม</a></li>
                    <li><a href="#">กรมโรงงานอุตสาหกรรม</a></li>
                    <li><a href="#">กรมส่งเสริมอุตสาหกรรม</a></li>
                    <li><a href="#">กรมอุตสาหกรรมพื้นฐานและการเหมืองแร่</a></li>
                    <li><a href="#">สำนักงานคณะกรรมการอ้อยและ</a></li>
                    <li><a href="#">น้ำตาลทราย</a></li>
                    <li><a href="#">สำนักงานมาตรฐานผลิตภัณฑ์อุตสาหกรรม</a></li>
                    <li><a href="#">สำนักงานเศรษฐกิจอุตสาหกรรม</a></li>
                </ul>
            </div>
            <div class="grid xl-20 lg-1-3 sm-50 mt-0">
                <h4 class="title color-white">สถาบันเครือข่าย</h4>
                <ul class="ss-list color-white fw-200">
                    <li><a href="#">สถาบันเพิ่มผลผลิตแห่งชาติ (สพช.)</a></li>
                    <li><a href="#">สถาบันไทย-เยอรมัน (สกย.)</a></li>
                    <li><a href="#">สถาบันอาหาร (สอห.)</a></li>
                    <li><a href="#">สถาบันพัฒนาอุตสหกรรมสิ่งทอ (สสท.)</a></li>
                    <li><a href="#">สถามันรับรองมาตรฐานไอเอสโอ (สรอ.)</a></li>
                    <li><a href="#">สถาบันไฟฟ้าและอิเล็กทรอนิกส์ (สฟอ.)</a></li>
                    <li><a href="#">สถาบันพัฒนาวิสาหกิจขนาดกลาง</a></li>
                    <li><a href="#">และขนาดย่อย (สพว.)</a></li>
                    <li><a href="#">สถาบันเหล็กและเหล็กกล้าแห่งประเทศไทย (สลท.)</a></li>
                    <li><a href="#">สถาบันพลาสติก (สพต.)</a></li>
                    <li><a href="#">สถาบันการก่อสร้างแห่งประเทศโหย (สกส.)</a></li>
                    <li><a href="#">สถาบันยานยนต์</a></li>
                </ul>
            </div>
            <div class="grid xl-20 lg-1-3 sm-50 mt-0">
                <h4 class="title color-white">หน่วยงานที่เกี่ยวข้อง</h4>
                <ul class="ss-list color-white fw-200">
                    <li><a href="#">สำนักงานคณะกรรมการส่งเสริมการลงุทน</a></li>
                    <li><a href="#">กรมชลประทาน</a></li>
                    <li><a href="#">กรมสรรพากร</a></li>
                    <li><a href="#">สำนักงานคณะกรรมการพัฒนาการเศรษฐกิจและสังคมแห่งชาติ</a></li>
                    <li><a href="#">สำนักงานทรัพยากรนํ้าเเห่งชาติ (สทนช.) จาก สถาบันนํ้า</a></li>
                    <li><a href="#">กรมเจ้าท่า</a></li>
                    <li><a href="#">กรมพัฒนาพลังงานทดแทนและอนุรักษ์พลังงาน กระทรวงพลังงาน</a></li>
                    <li><a href="#">กระทรวงการต่างประเทศ</a></li>
                    <li><a href="#">สภาที่ปรึกษาเศรษฐกิจและสังคมแห่งชาติ</a></li>
                    <li><a href="#">กรมทรัพยากรน้ำ</a></li>
                    <li><a href="#">สถาบันมาตรวิทยาแห่งชาติ</a></li>
                    <li><a href="#">กรมฝนหลวงและการบินเกษตร</a></li>
                    <li><a href="#">มูลนิธิสถาบันสิ่งแวดล้อมไทย</a></li>
                    <li><a href="#">Digital Government Development Agency (Publlic Organization)</a></li>
                </ul>
            </div>
            <div class="grid xl-20 lg-1-3 sm-50 mt-0">
                <h4 class="title color-white">บริษัทร่วมทุน</h4>
                <ul class="ss-list color-white fw-200">
                    <li><a href="#">บริษัท จัดการและพัฒนาทรัพยากรน้ำ ภาคตะวันออก จำกัด (มหาชน) (East Water)</a></li>
                    <li><a href="#">บริษัท บางปะอินโคเจนเนอเรชั่น จำกัด (BIC)</a></li>
                    <li><a href="#">บริษัท โกลบอล ยูทิลิตี้ เซอร์วิส จำกัด (GUSCO)</a></li>
                    <li><a href="#">บริษัท เจม เอ็นไวรันเมนทัล แมเนจเม้นท์ จำกัด (GEM)</a></li>
                    <li><a href="#">บริษัท อีสเทิร์น ฟลูอิด ทรานสปอร์ต จำกัด (EFT)</a></li>
                    <li><a href="#">บริษัท โพเอ็ม โกลบอล จำกัด (POEM)</a></li>
                    <li><a href="#">บริษัทบริหารเพื่อการพัฒนาเพื่ออนุรักษ์</a></li>
                    <li><a href="#">สิ่งแวดล้อม จำกัด (มหาขน) (GENGO)</a></li>
                </ul>
            </div>
        </div>
        <div class="ss-sep"></div>

        <h3 class="title color-03 pt-1">การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)</h3>
        <p class="desc">618 ถนนนิคมมักกะสัน เเขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร 10400</p>
        <div class="grids">
            <div class="grid xl-80 lg-75 sm-100 mt-0">
                <div class="grids">
                    <div class="grid xl-1-3 mt-0">
                        <div class="footer-link">
                            <i class="zmdi zmdi-smartphone-iphone"></i>
                            <span class="color-03">Telephone.</span>
                            <a class="fw-500 color-white h-color-03" href="#">
                                02 2530561
                            </a>
                        </div>
                    </div>
                    <div class="grid xl-1-3 mt-0">
                        <div class="footer-link">
                            <i class="zmdi zmdi-print"></i>
                            <span class="color-03">Fax.</span>
                            <a class="fw-500 color-white h-color-03" href="#">
                                02 2526582</a>, 
                            <a class="fw-500 color-white h-color-03" href="#">
                                02 2534086
                            </a>
                        </div>
                    </div>
                    <div class="grid xl-1-3 mt-0">
                        <div class="footer-link">
                            <span class="icon">
                                <img src="public/assets/app/images/icon/call-center.png" alt="Icon" />
                            </span>
                            <span class="color-03">Call Center</span>
                            <a class="fw-500 color-white h-color-03" href="#">
                                02 2072700
                            </a>
                        </div>
                    </div>
                    <div class="grid xl-1-3 mt-0">
                        <div class="footer-link">
                            <i class="zmdi zmdi-email"></i>
                            <span class="color-03">Contact Us</span>
                            <a class="fw-500 color-white h-color-03" href="#">
                                contact@ieat.mail.go.th
                            </a>
                        </div>
                    </div>
                    <div class="grid xl-1-3 md-50 sm-100 mt-0">
                        <div class="footer-link">
                            <span class="color-03">For Investment</span>
                            <a class="fw-500 color-white h-color-03" href="#">
                                investment.1@ieat.mail.go.th
                            </a>
                        </div>
                    </div>
                    <div class="grid xl-100 md-50 sm-100 mt-0">
                        <div class="footer-link">
                            <span class="color-03">E-mail: สารบรรณกลาง</span>
                            <a class="fw-500 color-white h-color-03" href="#">
                                general_affairs@ieat.mail.go.th
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid xl-20 lg-25 sm-100 text-center mt-3">
                <h4 class="title color-03 fw-200 mt-0 mb-0">Social Media</h4>
                <div class="btns mt-0">
                    <a class="btn-social" href="#">
                        <img src="public/assets/app/images/icon/twitter.png" alt="Icon" />
                    </a>
                    <a class="btn-social" href="#">
                        <img src="public/assets/app/images/icon/youtube.png" alt="Icon" />
                    </a>
                    <a class="btn-social" href="#">
                        <img src="public/assets/app/images/icon/facebook.png" alt="Icon" />
                    </a>
                </div>
            </div>
        </div>
        <div class="ss-sep"></div>

        <div class="bottom-container">
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
                <br> Copyright © 2020 การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)
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
</nav>
