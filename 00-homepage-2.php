<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<style>
    .about-02 .about-container > .about-tag .icon {
     color: #000; 
     border:none; 
    }
    .new{
        background-color:red;
        padding: 0 0.5rem;
        color:#fff;
    }
    .about-02 .about-container:not(.active) .title {
    font-size: 1.3rem;
    }
    .about-02 .about-container > .about-header {
    position: relative;
    padding: 0.2rem 14.5rem 1.125rem 0;
    cursor: pointer;
    z-index: 1;
    transition: padding .6s;
    }
    .tab-container-01 .tab.active::before {
    content:"\25CF";
    padding-left:0.2rem;
    color:#FF0001;
}
</style>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<2; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
                            <div class="container">
                            
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/02.jpg');"></div>
                            <div class="container">
                            
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="about-02 section-bpadding section-bg-hero">
         <div class="container">
            <div class="h1 text-center" data-aos="fade-up" data-aos-delay="0">
                    กนอ.อัพเดท
                </div>
                <h5 class="text-center fw-200 color-gray sm-no-br" data-aos="fade-up" data-aos-delay="150">
                    เพิ่มขีดคสามสามารถของคุรและธุรกิจด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดท ต่างๆ <br> 
                    เกี่ยวกับ กนอ. และนิคมอุตสาหกรรมในประเทศไทย <span class="color-04 fw-600">ได้ที่นี่</span>
                </h5>

            <div class="tab-container tab-container-01 mt-4">
                <div class="grids">
                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <?php include('component/category-tab.php'); ?>
                        </div>
                    </div>
                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                    <div class="tab-contents">
                        <div class="tab-contents">
                            <?php for($i=0; $i<07; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                <h4 class="mb-3">ประกาศรายชื่อผู้ผ่านการตรวจสอบผู้ไม่มีผลประโยชน์ร่วมกัน</h4>
                                    <div class="about-container <?php if($i==0)echo 'active'; ?> ">
                                        <div class="about-header">
                                            <h6 class="title xs color-04" >
                                            ประกาศจัดซื้อจัดจ้าง และผู้ชนะราคา ซ่อมบำรุงครุภัณฑ์คอมพิวเตอร์ ศภ.7 013-001-051/58 จำนวน 2 รายการ วงเงินงบประมาณ 2,490.00 บาท
                                            </h6>
                                            <div class="ss-date">
                                                <div class="date">
                                                    <div class="d border-bottom bcolor-white">04</div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-tag">
                                            <div class="new">มาใหม่</div>
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                        <div class="about-body">
                                            <div class="grids">

                                                <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                            <table class="table table-download type-02">
                                                <tbody>
                                                    <?php foreach(['pdf', 'doc', 'ppt'] as $d){?>
                                                        <tr>
                                                            <td>
                                                                <div class="file-icon">
                                                                    <img src="public/assets/app/images/file/<?= $d ?>.png" alt="Icon" />
                                                                </div>
                                                            </td>
                                                            <td class="pr-3">
                                                            รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ.
                                                            ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563) <br>
                                                                ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                                ดาวโหลด <span class="fw-600">23 ครั้ง</span>
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
                                                    <?php }?>
                                                </tbody>
                                            </table>                                            
                                                    
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="about-container">
                                        <div class="about-header">
                                            <h6 class="title xs color-04" >
                                            ประกาศจัดซื้อจัดจ้าง และผู้ชนะราคา ซ่อมบำรุงครุภัณฑ์คอมพิวเตอร์ ศภ.7 013-001-051/58 จำนวน 2 รายการ วงเงินงบประมาณ 2,490.00 บาท
                                            </h6>
                                            <div class="ss-date">
                                                <div class="date">
                                                    <div class="d border-bottom bcolor-white">04</div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-tag">
                                            <div></div>
                                            <div class="icon-file">
                                            <img style="width:2rem;" src="public/assets/app/images/file/pdf.png" alt="Icon" />                                                
                                            </div>
                                        </div> 
                                    </div>                                                                    
                                </div>
                            <?php }?>
                        </div>    
                        </div>
                     </div>

                </div>

            </div>
            <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-action" href="#">
                    <span>ดูทั้งหมด</span>
                </a>
            </div>
        </div>
    </section>

    <section class="call-02">
        <div class="container">
            <div class="grids no-gap">
                <div class="grid lg-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="content">
                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/01.jpg"></div>
                    </div>
                </div>
                <div class="grid lg-50 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="content">
                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/02.jpg"></div>
                        <div class="text-wrapper">
                            <h5 class="h3 color-01 fw-600">
                                ประกาศจัดซื้อจัดจ้าง
                            </h5>
                            <p class="fw-400 color-gray">
                                เพิ่มขีดความสามารถของคุณด้วยการอัพเดทข่าวสาร
                                <br> พร้อมกันทุกกระแสความเคลื่อนไหว
                            </p>
                            <div class="btns mt-2">
                                <a class="btn-icon btn-icon-01 btn-hex" href="#">
                                    <em class="zmdi zmdi-chevron-right"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-01 section-padding">
        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/02.jpg"></div>
        <div class="container">
            <div class="h1 text-center color-white" data-aos="fade-up" data-aos-delay="0">
                ทำเลทอง
            </div>
            <h5 class="text-center color-white fw-200" data-aos="fade-up" data-aos-delay="150">
                ตอบโจทย์ที่ใช่... ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ
            </h5>
        </div>
        <div class="btn-ads" data-aos="fade-up" data-aos-delay="300">
            <a class="btn-ad" href="#">
                <img src="public/assets/app/images/hero/ad-0.jpg" alt="Ad" />
            </a>
            <a class="btn-ad" href="#">
                <img src="public/assets/app/images/hero/ad-1.jpg" alt="Ad" />
            </a>
        </div>
        <div class="container">
            <div class="grids no-gap" data-aos="fade-up" data-aos-delay="450">
                <?php
                    foreach([
                        'นิคมอุตสาหกรรมบางชัน', 'นิคมอุตสาหกรรมลาดกระบัง', 'นิคมอุตสาหกรรมอัญธานี',
                        'นิคมอุตสาหกรรมอัญธานี (โครงการ2)', 'นิคมอุตสาหกรรมบางปะอิน',
                        'นิคมอุตสาหกรรมไฮเทค (บ้านหว้า)', 'นิคมอุตสาหกรรมนครหลวง',
                        'นิคมอุตสาหกรรมราชบุรี', 'นิคมอุตสาหกรรมวี อาร์ เอ็ม', 'นิคมอุตสาหกรรมแก่งคอย'
                    ] as $i=>$d){
                ?>
                    <div class="grid lg-20 md-1-3 xs-50 mt-0">
                        <a class="ss-card ss-card-02 color-black h-color-04 btn-popup-toggle" data-popup="0" href="#">
                            <div class="ss-img vertical">
                                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg')"></div>
                                <?php if($i%2==1){?>
                                    <div class="ads-location">
                                        <img src="public/assets/app/images/hero/location.png" alt="Hero" />
                                    </div>
                                <?php }?>
                            </div>
                            <div class="text-container text-center">
                                <h5><?= $d ?></h5>
                            </div>
                        </a>
                    </div>
                <?php }?>
            </div>
            <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
                <a class="btn btn-action" href="#">
                    <span>ดูทั้งหมด</span>
                </a>
            </div>
        </div>
    </section>

    <div class="popup-container" data-popup="0">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="0"></div>
            <div class="popup-box">
                <div class="box-header">
                    <img class="pin" src="public/assets/app/images/icon/pin.png" alt="Pin" />
                    <h4 class="text-center position-relative">
                        08. <span class="fw-300">นิคมอุตสาหกรรมที เอฟ ดี</span>
                    </h4>
                    <a class="close-btn btn-popup-toggle" data-popup="0" href="#">
                        <em class="zmdi zmdi-close"></em>
                    </a>
                </div>
                <div class="box-body">
                    <div class="contents">
                        <div class="content">
                            <div class="img-fill fit" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                        </div>
                        <div class="content">
                            <div class="table-wrapper">
                                <table class="table table-detail">
                                    <tbody>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">ผู้อำนวยการนิคมฯ</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>นายสรายุทธ์ ประทีปแก้ว</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">ผู้พัฒนานิคม</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>บริษัท เจซีเค อินเตอร์เนชั่นแนล จำกัด (มหาชน)</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">โทรศัพท์</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    0 2676 4031-6
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">โทรสาร</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    0 2676 4038
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">E-mail</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    industrial@tfd-factory.com
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btns mt-2">
                                <a class="btn btn-action" href="#">
                                    <span>อ่านรายละเอียด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-btns">
                    <a class="box-btn" href="#">
                        <em class="zmdi zmdi-swap-alt"></em> View Google Map
                    </a>
                    <a class="box-btn" href="#">
                        <em class="zmdi zmdi-swap-alt"></em> View Graphic Map
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="call-03 section-padding img-fill lazy-bg" data-src="public/assets/app/images/banner/03.jpg">
        <div class="container">
            <div class="text-container text-center" data-aos="fade-up" data-aos-delay="0">
                <h3>ร่วมงานกับเรา</h3>
                <h4 class="d-none">Call 03 Description</h4>
                <h5 class="text-center fw-200 color-gray sm-no-br">
                    พัฒนาศักยภาพของพนักงานสู่ความเป็นผู้เชี่ยวชาญ <br>
                    พร้อมทั้งพัฒนาระบบการบริหารบุคลากรที่มีคุณภาพ เพื่อสร้างแรงจูงใจ <br>
                    และความผูกพันของบุคลากรที่มีต่อองค์กร
                </h5>
                <h4 class="fw-300">
                    มาร่วมเปนส่วนหนึ่งในการพัฒนาประเทศกับเรา
                </h4>
                <div class="btns mt-2">
                    <a class="btn btn-action" href="#">
                        <span>ดูตำแหน่งานว่าง</span>
                    </a>
                </div>
            </div>
            <img class="hero" src="public/assets/app/images/hero/02.png" alt="Hero" 
            data-aos="fade-up" data-aos-delay="150"/>
        </div>               
    </section>

    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
