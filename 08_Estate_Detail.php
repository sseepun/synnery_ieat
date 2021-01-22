<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข้อมูลนิคมฯ/ท่าเรือฯ/โรงงานฯ' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรม' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรมในประเทศไทย' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding">
        <div class="container">
            <h5 class="h1 color-black" data-aos="fade-up" data-aos-delay="0">
                นิคมอุตสาหกรรมบางปู
            </h5>
            <div class="grids mt-2" data-aos="fade-up" data-aos-delay="150">
                <div class="grid lg-25 sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-share"></em> 
                            </div>
                            <p>
                                <span class="fw-600 mr-2">ปีที่ก่อตั้ง:</span>
                                2520
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid lg-25 sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-account"></em>
                            </div>
                            <p>
                                <span class="fw-600 mr-2">ผู้อำนวยการนิคมฯ:</span>
                                นางพจนี ศิลารัคน์
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-account"></em>
                            </div>
                            <p>
                                <span class="fw-600 mr-2">ผู้พัฒนานิคมฯ:</span>
                                การนิคมอุตสาหกรรมแห่งประเทศไทย
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid lg-25 sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-smartphone-iphone"></em>
                            </div>
                            <p>
                                <span class="fw-600 mr-2">โทรศัพท์:</span>
                                0 2709 3450-3
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid lg-25 sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-phone"></em>
                            </div>
                            <p>
                                <span class="fw-600 mr-2">โทรสาร:</span>
                                0 2709 8193
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid lg-25 sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-email"></em>
                            </div>
                            <p>
                                <span class="fw-600 mr-2">Email:</span>
                                BangPoo.1@ieat.go.th
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid lg-25 sm-50 mt-2">
                    <div class="ss-stat width-full">
                        <div class="stat fit-text icon-only ai-start ws-normal mt-0">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-globe-alt"></em>
                            </div>
                            <p>
                                <span class="fw-600 mr-2">เว็บไซต์:</span>
                                www.ieat.go.th/bangpoo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map-container" data-aos="fade-up" data-aos-delay="300">
        <div class="fit img-fill" style="background-image:url('public/assets/app/images/bg/map-1.jpg');"></div>
    </div>

    <section class="content-06 section-padding">
        <div class="container">

            <div class="slide-container" data-aos="fade-up" data-aos-delay="0">
                <div class="slides">
                    <?php for($i=0; $i<10; $i++){?>
                        <div class="slide">
                            <div class="wrapper">
                                <a class="ss-img" href="public/assets/app/images/bg/map-2.jpg" data-fancybox="gallery">
                                    <img class="d-none" src="public/assets/app/images/bg/map-2.jpg" alt="Popup Preview" />
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg');"></div>
                                    <div class="hover-container">
                                        <div class="icon">
                                            <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="arrows"></div>
            </div>

            <div class="ss-box px-0 py-0 bg-white" data-aos="fade-up" data-aos-delay="150">
                <div class="table-wrapper pb-0 border-top-4 bcolor-01">
                    <table class="table table-estate">
                        <tbody>
                            <tr>
                                <td><h5 class="h4 fw-200">สถานที่ตั้ง</h5></td>
                                <td>
                                    <p class="sm-no-br">
                                        กิโลเมตรที่ 34-37 ถ.สุขุมวิท ต.บางปูใหม่ และ ต.แพรกษา อ.เมือง จ.สมุทปราการ <br>
                                        สำนักงานนิคม 649 ม. 4 ถ.สุขุมวิท ต.แพรกษา อ.เมือง จ.สมุทปราการ 10280
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">พื้นที่โครงการ</h5></td>
                                <td>
                                    <p class="fw-200">พื้นที่ 5.472 - 2 - 69 ไร่ แบ่งเป็น</p> 
                                    <ul class="ss-list">
                                        <?php for($i=0; $i<4; $i++){?>
                                            <li>
                                                <div class="ss-list-detail">
                                                    <p class="fw-200">เขตอุตสาหกรรม</p>
                                                    <div class="p fw-200">
                                                        <span class="fw-400">3,659 - 0 - 96</span> ไร่
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">พื้นที่ว่างในนิคมฯ</h5></td>
                                <td>
                                    <p class="fw-200">พื้นที่ 5.472 - 2 - 69 ไร่ แบ่งเป็น</p> 
                                    <ul class="ss-list">
                                        <?php for($i=0; $i<2; $i++){?>
                                            <li>
                                                <div class="ss-list-detail">
                                                    <p class="fw-200">พื้นที่อุตสาหกรรม</p>
                                                    <div class="p fw-200">
                                                        <span class="fw-400">6-1-99.3</span> ไร่
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">ระยะทางจากสถานที่ต่างๆ</h5></td>
                                <td>
                                    <p class="fw-200">พื้นที่ 5.472 - 2 - 69 ไร่ แบ่งเป็น</p> 
                                    <ul class="ss-list">
                                        <?php for($i=0; $i<2; $i++){?>
                                            <li>
                                                <div class="ss-list-detail">
                                                    <p class="fw-200">สนามบินสุวรรณภูมิ</p>
                                                    <div class="p fw-200">
                                                        <span class="fw-400">25</span> กิโลเมตร
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">ราคาขาย/เช่า</h5></td>
                                <td>
                                    <p class="fw-200">ราคาขายที่ดิน</p> 
                                    <ul class="ss-list">
                                        <li>
                                            <div class="ss-list-detail">
                                                <p class="fw-200">เขคอุตสาหกรรม</p>
                                                <div class="p fw-200">
                                                    <span class="fw-400">3,600,000</span> บาท/ไร่
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="ss-list-detail mt-3">
                                        <p class="fw-400 xs-no-br">
                                            อัตราค่าเช่าพื้นที่ระบบสาธารณูปโภค <br>
                                            ส่วนกลาง(บาท/ไร่/ปี)
                                        </p>
                                        <div class="p fw-200">
                                            <span class="fw-400">3,741,536.83</span> บาท/ไร่/ปี
                                        </div>
                                    </div>
                                    <p class="text-md fw-200">
                                        ปล. อ้างอิงจากประกาศ สนป. ที่ 8/2558
                                    </p>
                                    
                                    <p class="fw-400 mt-3">
                                        อัตราค่าเช่าพื้นที่อาคารสำนักงานและอาคารพัสดุ (บาท/เดือน)
                                    </p>
                                    <p class="fw-200 mt-3">อาคารสำนักงานนิคมฯ</p> 
                                    <ul class="ss-list">
                                        <?php for($i=0; $i<4; $i++){?>
                                            <li>
                                                <div class="ss-list-detail">
                                                    <p class="fw-200">อัตราค่าเช่า (ตารางเมตรละ)</p>
                                                    <div class="p fw-200">
                                                        <span class="fw-400">331.29</span> บาท/เดือน
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>

                                    <p class="fw-200 mt-3">อาคารพัสดุของสำนักงานนิคมฯ</p> 
                                    <ul class="ss-list">
                                        <?php for($i=0; $i<2; $i++){?>
                                            <li>
                                                <div class="ss-list-detail">
                                                    <p class="fw-200">อัตราค่าเช่า (ตารางเมตรละ)</p>
                                                    <div class="p fw-200">
                                                        <span class="fw-400">726</span> บาท/เดือน
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                    <p class="text-md fw-200">
                                        ปล. อ้างอิงจากประกาศ สนป. ที่ 8/2558
                                    </p>

                                    <h6 class="fw-400 mt-3">หมายเหตุ</h6>
                                    <ol>
                                        <?php for($i=1; $i<5; $i++){?>
                                            <li class="fw-200">
                                                อัตราค่าเช่าพื้นที่ระบบสาธารณูปโภคส่วนกลาง 
                                                (ใช้ถึงปัจจุบัน ไม่มีวันหมดอายุ)
                                            </li>
                                        <?php }?>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">สิ่งอำนวยความสะดวก</h5></td>
                                <td>
                                    <p class="fw-400">ระบบน้ำประปา</p> 
                                    <ul class="ss-list">
                                        <li class="fw-200">
                                            ใช้น้ำประปาจากการประปานครหลวงโดยการจ่ายน้ำผ่านท่อประธานเส้นศูนย์กลางขนาด 
                                            800 มิลลิเมตร เข้าสู่ระบบประปาภายในนิคมอุตสาหกรรม
                                        </li>
                                    </ul>
                                    <p class="fw-400 mt-3">ระบบไฟฟ้า</p> 
                                    <ul class="ss-list">
                                        <li class="fw-200">
                                            ไฟฟ้าแรงสูงขนาด 24 กิโลโวลต์ ดำเนินการโดย การไฟฟ้านครหลวง
                                        </li>
                                        <li class="fw-200">
                                            40 กิโลโวต์ - แอมแปร์ / ไร่ สำหรับโรงงานอุตสาหกรรม
                                        </li>
                                    </ul>
                                    <p class="fw-400 mt-3">ระบบถนน</p> 
                                    <ul class="ss-list">
                                        <li class="fw-200">
                                            ความยาวของถนน 37 กิโลเมตร
                                        </li>
                                        <li class="fw-200">
                                            ความกว้างของถนน ถนนสายหลักกว้าง 21 เมตร ถนนสายรองกว้าง 14.50 เมตร
                                        </li>
                                    </ul>
                                    <p class="fw-400 mt-3">ระบบโทรศัพท์</p> 
                                    <ul class="ss-list">
                                        <li class="fw-200">
                                            มีคู่สาย 3,000 คู่สาย
                                        </li>
                                    </ul>
                                    <p class="fw-400 mt-3">ระบบบำบัดน้ำเสีย</p> 
                                    <ul class="ss-list">
                                        <li class="fw-200">
                                            มีระบบบำบัดน้ำเสีย 3 แห่ง
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">อัตราค่าบริการ</h5></td>
                                <td>
                                    <p class="fw-400">ค่าบำรุงรักษา</p> 
                                    <ul class="ss-list">
                                        <?php for($i=0; $i<2; $i++){?>
                                            <li>
                                                <div class="ss-list-detail">
                                                    <p class="fw-200">เขตอุตสาหกรรมทั่วไป</p>
                                                    <div class="p fw-200">
                                                        <span class="fw-400">1,000</span> บาท/ไร่/เดือน
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>

                                    <p class="fw-400 mt-3">ค่าน้ำประปา(บาท / ลบ.ม.)</p> 
                                    <ul class="ss-list">
                                        <li>
                                            <div class="ss-list-detail">
                                                <p class="fw-200">
                                                    อัตราค่าน้ำดิบ <br>
                                                    <span class="text-xs">
                                                        ปล. อ้างอิงจาก บันทึกข้อความ สนป. 
                                                        0024/2561 วันที่ 31 ม.ค. 61
                                                    </span>
                                                </p>
                                                <div class="p fw-200">
                                                    <span class="fw-400">0.15</span> บาท/ลบ.ม.
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ss-list-detail">
                                                <p class="fw-200">
                                                    อัตราค่าน้ำประปา <br>
                                                    <span class="text-xs">
                                                        ปล. อ้างอิงจาก บันทึกข้อความ สนป. 
                                                        0024/2561 วันที่ 31 ม.ค. 61
                                                    </span>
                                                </p>
                                                <div class="p fw-200">
                                                    <span class="fw-400">18</span> บาท/ลบ.ม. (1 - 5,000 ลบ.ม./เดือน) <br>
                                                    <span class="fw-400">19.50</span> บาท/ลบ.ม. (5,001 - 10,000 ลบ.ม./เดือน) <br>
                                                    <span class="fw-400">0.15</span> บาท/ลบ.ม. (1 - 5,000 ลบ.ม./เดือน)
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <p class="fw-400 mt-3">ค่าไฟฟ้า</p> 
                                    <ul class="ss-list">
                                        <li>
                                            <div class="ss-list-detail">
                                                <p class="fw-200">อัตราค่าบริการตามที่การไฟฟ้านครหลวงกำหนด</p>
                                                <div class="p fw-200">
                                                    <span class="fw-400">3.20 - 3.90</span> บาท/หน่วย
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <p class="fw-400 mt-3">ค่าโทรศัพท์</p> 
                                    <ul class="ss-list">
                                        <li class="fw-200">
                                            อัตราค่าบริการตามที่ บริษัท ที โอ ที จำกัด (มหาชน) กำหนด นาทีละ 
                                            <span class="fw-400">3</span> บาท และกด 1234 
                                            ตามด้วยหมายเลขปลายทาง (ต่างจังหวัดหรือมือถือ) ค่าบริการนาทีละ 
                                            <span class="fw-400">1.50</span> บาท
                                        </li>
                                    </ul>

                                    <p class="fw-400 mt-3">ค่าบำบัดน้ำเสีย</p> 
                                    <ul class="ss-list">
                                        <li>
                                            <p class="fw-200">
                                                อัตราค่าบริการตามที่ บริษัท ที โอ ที จำกัด (มหาชน) กำหนด นาทีละ <span class="fw-400">3</span> บาท และกด 1234 ตามด้วยหมายเลขปลายทาง (ต่างจังหวัดหรือมือถือ) 
                                                ค่าบริการนาทีละ <span class="fw-400">1.50</span> บาท
                                                คิดตามสูตรการคำนวณ ดังนี้
                                            </p>
                                            <p class="fw-400">TC = 184.77+8.8689 Vi + 17.5162 Vi Si/1000 + CP<sup>*</sup></p>
                                            <?php for($i=0; $i<4; $i++){?>
                                                <p class="fw-200 text-sm">TC คือ ค่าบริการบำบัดน้ำเสีย เป็น บาท/เดือน</p>
                                            <?php }?>
                                            <p class="fw-200">กำหนดเฉลี่ยค่าบำบัดน้ำเสียประมาณ ลูกบาศก์เมตรละ <span class="fw-400">8.75-16.50</span> บาท</p>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">สิทธิประโยชน์</h5></td>
                                <td>
                                    <p class="fw-400">
                                        สิทธิประโยชน์ที่ไม่เกี่ยวกับภาษีอกร ในเขตอุตสาหกรรมทั่วไปและเขตประกอบการเสรี
                                    </p> 
                                    <ol>
                                        <?php for($i=1; $i<5; $i++){?>
                                            <li class="fw-200">
                                                ผู้ประกอบการอุตสาหกรรม หรือพาณิชยกรรม หรือ การบริการ 
                                                ทั้งที่เป็นคนไทยและคนต่างด้าว อาจได้รับอนุญาติให้ถือกรรมสิทธิ์ในที่ดินในนิคมอุตสาหกรรมเพื่อประกอบกิจการ 
                                                ได้ตามจำนวนเนื้อที่ที่คณะกรรมการ กนอ. เห็นสมควรแม้วาสจะเกินกำหนดที่จะพึงมีได้ตามกฏหมายอื่น
                                            </li>
                                        <?php }?>
                                    </ol>

                                    <p class="fw-400 mt-3">
                                        สิทธิประโยชน์ที่ไม่เกี่ยวกับภาษีอกร ในเขตอุตสาหกรรมทั่วไปและเขตประกอบการเสรี
                                    </p> 
                                    <ol>
                                        <?php for($i=1; $i<5; $i++){?>
                                            <li class="fw-200">
                                                ผู้ประกอบการอุตสาหกรรม หรือพาณิชยกรรม หรือ การบริการ 
                                                ทั้งที่เป็นคนไทยและคนต่างด้าว อาจได้รับอนุญาติให้ถือกรรมสิทธิ์ในที่ดินในนิคมอุตสาหกรรมเพื่อประกอบกิจการ 
                                                ได้ตามจำนวนเนื้อที่ที่คณะกรรมการ กนอ. เห็นสมควรแม้วาสจะเกินกำหนดที่จะพึงมีได้ตามกฏหมายอื่น
                                            </li>
                                        <?php }?>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td><h5 class="h4 fw-200">รายชื่อผู้ใช้ที่ดิน</h5></td>
                                <td>
                                    <div class="content-footer">
                                        <div class="content-row no-border px-0 py-0">
                                            <h6 class="fw-500">เอกสารแนบ</h6>
                                            <table class="table table-download">
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-3">
                                                            <div class="file-icon">
                                                                <img src="public/assets/app/images/file/pdf.png" alt="Icon" />
                                                            </div>
                                                        </td>
                                                        <td class="pr-3">
                                                            รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ. <br>
                                                            ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563)
                                                            <br>
                                                            ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                            จำนวนดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn-download mr-2" href="#">
                                                                <span class="xs-hide">ดาวน์โหลด</span>
                                                                <em class="zmdi zmdi-arrow-right"></em>
                                                            </a>
                                                            <a class="btn-download" href="#">
                                                                <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                                                <em class="zmdi zmdi-alert-circle-o" style="transform:none;"></em>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
