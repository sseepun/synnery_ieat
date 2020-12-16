<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .border-y-color-02 {
            border-width: 4px 0;
            border-color: #4b326e;
            border-style: solid;
        }
        .grids.no-gap > .grid:first-child {justify-content: flex-end;}
        .bg-light-gray { background-color: #ebebeb; }
        .grid > .wrapper, .border-bottom > .wrapper, .w-100 > .wrapper {max-width: 85%; width:100%;}
        .ss-list.ss-list-custom{width:100%;}
        .border-bottom {border-bottom:1px solid #dee2e6 !important;}
        .container > .grids .grid:nth-child(2n+1) .grids .grid:first-child{background-color:#4b326e;}
        .container > .grids .grid:nth-child(2n) .grids .grid:first-child{background-color: #5e2472;}

        .container > .grids .grid:nth-child(2n+1) .grids .grid:last-child{background-color:#fff;}
        .container > .grids .grid:nth-child(2n) .grids .grid:last-child{background-color: #ebebeb;}
        @media screen and (max-width: 767.98px){
            .grids.no-gap > .grid:first-child {justify-content: flex-start;}
        .grid > .wrapper, .border-bottom > .wrapper, .w-100 > .wrapper {max-width: 100%; }
        }

        .ss-card-custom > .wrapper {width: calc(100% - .5rem); margin:0 auto; padding:.25rem;}
        .slide-01 .slide-container .arrows button {padding:.25rem .5rem; position:absolute;  background: #222; color:#fff; opacity:0; transform: translateY(10px);}
        .slide-01 .slide-container:hover .arrows button {transform: translateY(0); opacity:1;}
        .slide-01 .slide-container .arrows button.slick-next { left:calc(100% - .5rem);}
        .slide-01 .slide-container .arrows button.slick-prev { right:calc(100% - .5rem);}
    </style>
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

    <section class="section-bpadding bg-white">
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                นิคมอุตสาหกรรมบางปู
            </h2>


            <div class="grids mt-4">
                <div class="grid xl-25 lg-25 sm-50 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-share mr-2"></i>
                        <p class="fw-400">ปีที่ก่อตั้ง:</p>
                    </div>
                    <p class="fw-200">2520</p>
                </div>
                <div class="grid xl-25 lg-30 sm-50 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-account mr-2"></i>
                        <p class="fw-400">ผู้อำนวยการนิคมฯ:</p>
                    </div>
                    <p class="fw-200">นางพจนี ศิลารัคน์</p>
                </div>
                <div class="grid xl-50 lg-40 md-50 sm-100 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-account mr-2"></i>
                        <p class="fw-400">ผู้พัฒนานิคมฯ:</p>
                    </div>
                    <p class="fw-200">การนิคมอุตสาหกรรมแห่งประเทศไทย</p>
                </div>

            </div>

            <div class="grids mt-2">
                <div class="grid lg-25 sm-50 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-smartphone-iphone mr-2"></i>
                        <p class="fw-400">โทรศัพท์:</p>
                    </div>
                    <p class="fw-200">0 2709 3450-3</p>
                </div>

                <div class="grid lg-25 sm-50 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-phone mr-2"></i>
                        <p class="fw-400">โทรสาร:</p>
                    </div>
                    <p class="fw-200">0 2709 8193</p>
                </div>

                <div class="grid lg-25 sm-50 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-email mr-2"></i>
                        <p class="fw-400">Email:</p>
                    </div>
                    <p class="fw-200">BangPoo.1@ieat.go.th</p>
                </div>

                <div class="grid lg-25 sm-50 d-flex mt-1">
                    <div class="d-flex mr-2">
                        <i class="zmdi zmdi-share mr-2"></i>
                        <p class="fw-400">เว็บไซต์:</p>
                    </div>
                    <p class="fw-200">www.ieat.go.th/bangpoo</p>
                </div>

            </div>
    </section>



    <section class="section-padding slide-01">
        <div class="container">
            <div class="slide-container">
                <div class="slides">
                    <?php for($i=0;$i<15;$i++){ ?>
                        <div class="slide">
                            <div class="ss-card ss-card-custom">
                                
                                <div class="wrapper box-shadow">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                        <div class="hover-container">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>

                    <?php }?>

                </div>
                <div class="arrows"></div>
            </div>

        </div>
        
    </section>

    <section class="section-padding">
        <div class="container">

            <div class="grids no-gap box-shadow border-y-color-02">
                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">สถานที่ตั้ง</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 d-flex ai-center px-4 py-4">
                            <div class="wrapper">     
                                <p>
                                    กิโลเมตรที่ 34-37 ถ.สุขุมวิท ต.บางปูใหม่ และ ต.แพรกษา อ.เมือง จ.สมุทปราการ <br>
                                    สำนักงานนิคม 649 ม. 4 ถ.สุขุมวิท ต.แพรกษา อ.เมือง จ.สมุทปราการ 10280
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">พื้นที่โครงการ</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="wrapper">
                                <p class="fw-100 w-100">พื้นที่ 5.472 - 2 - 69 ไร่ แบ่งเป็น</p> 
                                <ul class="ss-list ss-list-custom">
                                    <?php for($i=0; $i < 4; $i++){?>
                                        <li>
                                            <div class="d-flex jc-space-between ai-start fw-wrap">
                                                <p class="fw-200">เขตอุตสาหกรรม</p>
                                                <div class="d-flex jc-end">
                                                    <p class="fw-400 mr-2">3,659 - 0 - 96</p>
                                                    <p class="fw-200">ไร่</p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>


                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">พื้นที่ว่างในนิคมฯ</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="wrapper">
                                <p class="fw-100 w-100">พื้นที่ 5.472 - 2 - 69 ไร่ แบ่งเป็น</p> 
                                <ul class="ss-list ss-list-custom">
                                    <?php for($i=0; $i < 2; $i++){?>
                                        <li>
                                            <div class="d-flex jc-space-between ai-start fw-wrap">
                                                <p class="fw-200">พื้นที่อุตสาหกรรม</p>
                                                <div class="d-flex jc-end">
                                                    <p class="fw-400 mr-2">6-1-99.3</p>
                                                    <p class="fw-200">ไร่</p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">ระยะทางจากสถานที่ต่างๆ</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="wrapper">
                                <p class="fw-100 w-100">พื้นที่ 5.472 - 2 - 69 ไร่ แบ่งเป็น</p> 
                                <ul class="ss-list ss-list-custom">
                                    <?php for($i=0; $i < 2; $i++){?>
                                        <li>
                                            <div class="d-flex jc-space-between ai-start fw-wrap">
                                                <p class="fw-200">สนามบินสุวรรณภูมิ</p>
                                                <div class="d-flex jc-end">
                                                    <p class="fw-400 mr-2">25</p>
                                                    <p class="fw-200">กิโลเมตร</p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php }?>
                                </ul>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">ราคาขาย/เช่า</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="border-bottom w-100 pb-2">
                                <div class="wrapper">
                                    <p class="fw-100 w-100">ราคาขายที่ดิน</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <div class="d-flex jc-space-between ai-start fw-wrap">
                                                <p class="fw-200">เขคอุตสาหกรรม</p>
                                                <div class="d-flex jc-end">
                                                    <p class="fw-400 mr-2">3,600,000</p>
                                                    <p class="fw-200">บาท/ไร่</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="border-bottom w-100 py-2">
                                <div class="wrapper">
                                    <div class="d-flex jc-space-between ai-start fw-wrap">
                                        <div>
                                            <p class="fw-400">
                                                อัตราค่าเช่าพื้นที่ระบบสาธารณูปโภค <br>
                                                ส่วนกลาง(บาท/ไร่/ปี)
                                            </p>

                                        </div>
                                        <div class="d-flex jc-end">
                                            <p class="fw-400 mr-2">3,741,536.83</p>
                                            <p class="fw-200">บาท/ไร่/ปี</p>
                                        </div>
                                    </div>
                                    <p class="text-md fw-100 w-100">ปล. อ้างอิงจากประกาศ สนป. ที่ 8/2558</p>
                                </div>
                            </div>
                           
                            <div class="border-bottom w-100 py-2">
                                <div class="wrapper">
                                    <p class="fw-100 w-100">อาคารสำนักงานนิคมฯ</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <?php for($i=0; $i<4; $i++){?>
                                            <li>
                                                <div class="d-flex jc-space-between ai-start fw-wrap">
                                                    <p class="fw-200">อัตราค่าเช่า (ตารางเมตรละ)</p>
                                                    <div class="d-flex jc-end">
                                                        <p class="fw-400 mr-2">331.29</p>
                                                        <p class="fw-200">บาท/เดือน</p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                
                                </div>
                                
                            </div>


                            <div class="border-bottom w-100 py-2">
                                <div class="wrapper">
                                    <p class="fw-100 w-100">อาคารพัสดุของสำนักงานนิคมฯ</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <?php for($i=0; $i<2; $i++){?>
                                            <li>
                                                <div class="d-flex jc-space-between ai-start fw-wrap">
                                                    <p class="fw-200">อัตราค่าเช่า (ตารางเมตรละ)</p>
                                                    <div class="d-flex jc-end">
                                                        <p class="fw-400 mr-2">726</p>
                                                        <p class="fw-200">บาท/เดือน</p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                    <p class="w-100 text-md fw-100">ปล. อ้างอิงจากประกาศ สนป. ที่ 8/2558</p>
                                </div>
                            </div>
                            
                            <div class="py-2">
                                <div class="wrapper">
                                    <h6 class="fw-400 w-100">หมายเหตุ</h5>
                                    <ul class="custom-list" style="padding:0; margin:.25rem 0; list-style:none;">
                                        <?php for($i = 1; $i < 5; $i++){?>
                                            <li class="d-flex jc-end">
                                                <p class="fw-200 mr-3"><?= $i; ?>.</p>
                                                <p class="fw-200">อัตราค่าเช่าพื้นที่ระบบสาธารณูปโภคส่วนกลาง (ใช้ถึงปัจจุบัน ไม่มีวันหมดอายุ)</p>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">สิ่งอำนวยความสะดวก</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="border-bottom w-100 pb-2">
                                <div class="wrapper">
                                    <p class="fw-400 w-100">ระบบน้ำประปา</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <p class="fw-200">ใช้น้ำประปาจากการประปานครหลวงโดยการจ่ายน้ำผ่านท่อประธานเส้นศูนย์กลางขนาด 800 มิลลิเมตร เข้าสู่ระบบประปาภายในนิคมอุตสาหกรรม</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="border-bottom w-100 w-100 py-2">
                                <div class="wrapper">
                                    <p class="fw-400">ระบบไฟฟ้า</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <p class="fw-200">ไฟฟ้าแรงสูงขนาด 24 กิโลโวลต์ ดำเนินการโดย การไฟฟ้านครหลวง</p>
                                        </li>
                                        <li>
                                            <p class="fw-200">40 กิโลโวต์ - แอมแปร์ / ไร่ สำหรับโรงงานอุตสาหกรรม</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="border-bottom w-100 w-100 py-2">
                                <div class="wrapper">
                                    <p class="fw-400">ระบบถนน</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <p class="fw-200">ความยาวของถนน 37 กิโลเมตร</p>
                                        </li>
                                        <li>
                                            <p class="fw-200">ความกว้างของถนน ถนนสายหลักกว้าง 21 เมตร ถนนสายรองกว้าง 14.50 เมตร</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="border-bottom w-100 w-100 py-2">
                                <div class="wrapper">   
                                    <p class="fw-400">ระบบโทรศัพท์</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <p class="fw-200">มีคู่สาย 3,000 คู่สาย</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="w-100 pt-2">
                                <div class="wrapper">
                                    <p class="fw-400">ระบบบำบัดน้ำเสีย</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <p class="fw-200">มีระบบบำบัดน้ำเสีย 3 แห่ง</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">อัตราค่าบริการ</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="border-bottom w-100 pb-2">
                                <div class="wrapper">
                                    <p class="fw-400 w-100">ค่าบำรุงรักษา</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <?php for($i=0; $i<2; $i++){?>
                                            <li>
                                                <div class="d-flex jc-space-between ai-start fw-wrap">
                                                    <p class="fw-200">เขตอุตสาหกรรมทั่วไป</p>
                                                    <div class="d-flex jc-end">
                                                        <p class="fw-400 mr-2">1,000</p>
                                                        <p class="fw-200">บาท/ ไร่ / เดือน</p>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </div>
                              
                            </div>

                            <div class="border-bottom w-100 py-2">
                                <div class="wrapper">
                                    <p class="fw-400 w-100">ค่าน้ำประปา(บาท / ลบ.ม.)</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <div class="d-flex jc-space-between ai-start fw-wrap">
                                                <div>
                                                    <p class="fw-200">อัตราค่าน้ำดิบ</p>
                                                    <p class="text-xs fw-100">ปล. อ้างอิงจาก บันทึกข้อความ สนป. 0024/2561 วันที่ 31 ม.ค. 61</p>
                                                </div>  
                                            
                                                <div class="d-flex jc-end">
                                                    <p class="fw-400 mr-2">0.15</p>
                                                    <p class="fw-200">บาท/ ลบ.ม.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-flex jc-space-between ai-start">
                                                <div>
                                                    <p class="fw-200">อัตราค่าน้ำประปา</p>
                                                    <p class="text-xs fw-100">ปล. อ้างอิงจาก บันทึกข้อความ สนป. 0024/2561 วันที่ 31 ม.ค. 61</p>
                                                </div>  
                                                <div>
                                                    <div class="d-flex jc-end fw-wrap">
                                                        <p class="fw-400 mr-2">18</p>
                                                        <p class="fw-200">บาท/ ลบ.ม.</p>
                                                        <p class="fw-200">(1 - 5,000 ลบ.ม./เดือน)</p>
                                                    </div>

                                                    <div class="d-flex jc-end fw-wrap">
                                                        <p class="fw-400 mr-2">19.50</p>
                                                        <p class="fw-200">บาท/ ลบ.ม.</p>
                                                        <p class="fw-200">(5,001 - 10,000 ลบ.ม./เดือน)</p>
                                                    </div>

                                                    <div class="d-flex jc-end">
                                                        <p class="fw-400 mr-2">0.15</p>
                                                        <p class="fw-200">บาท/ ลบ.ม.</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                               
                            </div>

                            <div class="border-bottom w-100 py-2">
                                <div class="wrapper">
                                    <p class="fw-400 w-100">ค่าไฟฟ้า</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <div class="d-flex jc-space-between ai-start fw-wrap">
                                                <p class="fw-200">อัตราค่าบริการตามที่การไฟฟ้านครหลวงกำหนด</p>
                                                <div class="d-flex jc-end">
                                                    <p class="fw-400 mr-2">3.20 - 3.90</p>
                                                    <p class="fw-200">บาท / หน่วย</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                               
                            </div>

                            <div class="border-bottom w-100 py-2 w-100">
                                <div class="wrapper">
                                    <p class="fw-400 w-100">ค่าโทรศัพท์</p> 
                                    <ul class="ss-list ss-list-custom">
                                        <li>
                                            <p class="fw-200">อัตราค่าบริการตามที่ บริษัท ที โอ ที จำกัด (มหาชน) กำหนด นาทีละ <span class="fw-400">3</span> บาท และกด 1234 ตามด้วยหมายเลขปลายทาง (ต่างจังหวัดหรือมือถือ) ค่าบริการนาทีละ <span class="fw-400">1.50</span> บาท</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>



                            <div class="py-2 w-100">
                                <div class="wrapper">
                                    <p class="fw-400 w-100">ค่าบำบัดน้ำเสีย</p> 
                                    <ul class="ss-list ss-list-custom">
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
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">สิทธิประโยชน์</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="wrapper">
                            
                                <?php for($j=0; $j < 2; $j++){?>
                                    <div class="pb-2">
                                        <p class="fw-400 w-100">สิทธิประโยชน์ที่ไม่เกี่ยวกับภาษีอกร ในเขตอุตสาหกรรมทั่วไปและเขตประกอบการเสรี</p> 
                                        <?php for($i = 1; $i < 5; $i++){?>
                                            <li class="d-flex jc-end">
                                                <p class="fw-200 mr-3"><?= $i; ?>.</p>
                                                <p class="fw-200">ผู้ประกอบการอุตสาหกรรม หรือพาณิชยกรรม หรือ การบริการ ทั้งที่เป็นคนไทยและคนต่างด้าว อาจได้รับอนุญาติให้ถือกรรมสิทธิ์ในที่ดินในนิคมอุตสาหกรรมเพื่อประกอบกิจการ ได้ตามจำนวนเนื้อที่ที่คณะกรรมการ กนอ. เห็นสมควรแม้วาสจะเกินกำหนดที่จะพึงมีได้ตามกฏหมายอื่น</p>
                                            </li>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="grid sm-100 mt-0">
                    <div class="grids no-gap">
                        <div class="grid sm-100 md-20 mt-0 d-flex text-right ai-start px-3 py-3">
                            <h5 class="color-white fw-100">รายชื่อผู้ใช้ที่ดิน</h5>
                        </div>
                        <div class="grid sm-100 md-80 mt-0 bg-light-gray d-flex fw-wrap ai-center px-4 py-4">
                            <div class="wrapper">
                                <p class="fw-400 w-100">เอกสารแนบ</p>
                                <div class="file-icon d-flex">
                                    <img class="mr-2" src="./public/assets/app/images/icon/pdf.png" alt="">
                                        <div>
                                            <p class="text-md fw-200 w-100">รายชื่อผู้ใช้ทีดิน</p>
                                            <p class="text-md fw-600">150 Kb.</p>
                                        </div>
                                </div>
                            </div>
                           


                        </div>
                    </div>
                </div>



            </div>

        </div>
    </section>

            

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script>
        var slide01 = $('.slide-01');
        if(slide01.length){
            slide01.find('.slide-container').each(function(){
                var self = $(this);
                self.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow:7, swipeToSlide: true,
                    focusOnSelect: true, autoplay: false, arrows: true, appendArrows: self.find('.arrows'), dots: false,
                    responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 3, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 2, } },
                ]
                });
            });
        }
    </script>
</body>
</html>
