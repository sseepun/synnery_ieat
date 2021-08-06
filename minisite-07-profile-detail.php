<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'class' => 'rect',
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-07.jpg',
            'title' => 'คณะผู้บริหาร',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'คณะผู้บริหาร' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="about-06">
        <div class="about-banner">
            <div class="section-bg" style="background-image:url('public/assets/app/images/hero/pattern-4.jpg');">
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="text-container" data-aos="fade-up" data-aos-delay="300">
                            <div class="wrapper">
                                <h6 class="h3 lg fw-500 lh-sm">นายอัฐพล จิรวัฒน์จรรยา</h6>
                                <p class="h6 fw-200">ผู้ว่าการการนิคมอุตสาหกรรมแห่งประเทศไทย</p>
                                <div class="avatar-text-01 mt-2">
                                    <div class="avatar-info d-flex ai-center fw-wrap">
                                        <div class="d-flex ai-center ws-nowrap mr-3">
                                            <img src="public/assets/app/images/icon/phone.png" alt="Image Icon" />
                                            <p class="sm">02-253-2561 ต่อ 1194</p>
                                        </div>
                                        <div class="d-flex ai-center ws-nowrap">
                                            <img src="public/assets/app/images/icon/email.png" alt="Image Icon" />
                                            <p class="sm">atthapol@ieat.go.th</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns">
                                    <a class="btn btn-action border bcolor-white" href="#">
                                        <span>ดูประวัติ</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-container">
                            <div class="wrapper">
                                <img class="pattern" src="public/assets/app/images/hero/pattern-3.png" alt="Image Pattern" />
                                <img 
                                    class="profile" src="public/assets/app/images/hero/minisite-00.png" alt="Image Profile" 
                                    data-aos="fade-left" data-aos-delay="450" 
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="avatar-options">
                <?php 
                    foreach([
                        [
                            'firstname' => 'นางสุวัฒนา', 'lastname' => 'กมลวัทนนิศา',
                            'title' => 'รองผู้ว่าการ (สายงานบริหาร)',
                            'phone' => '02-253-2561 ต่อ 1194',
                            'email' => 'atthapol@ieat.go.th',
                            'profile' => 'public/assets/app/images/hero/minisite-01.png'
                        ],
                        [
                            'firstname' => 'นายจักรรัฐ', 'lastname' => 'เลิศโอภาส',
                            'title' => 'รองผู้ว่าการ (สายงานยุทธศาสตร์และพัฒนา)',
                            'phone' => '02-253-2561 ต่อ 1194',
                            'email' => 'atthapol@ieat.go.th',
                            'profile' => 'public/assets/app/images/hero/minisite-02.png'
                        ]
                    ] as $j=>$d){
                ?>
                    <div class="avatar-option">
                        <div class="avatar-01">
                            <img class="avatar-border" src="public/assets/app/images/icon/border-profile.png" alt="Avatar Border" />
                            <div class="avatar-wrapper">
                                <div class="wrapper">
                                    <img src="<?= $d['profile'] ?>" alt="Image Profile" />
                                </div>
                            </div>
                            <?php if($j%2==0){?>
                                <img class="avatar-chev" src="public/assets/app/images/icon/hex-chev-right.png" alt="Avatar Button" />
                            <?php }else{?>
                                <img class="avatar-chev" src="public/assets/app/images/icon/hex-chev-left.png" alt="Avatar Button" />
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="content-07 minisite">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/minisite-profile.png');"></div>
        <div class="container position-relative">
            <div data-aos="fade-up" data-aos-delay="0">
                <div class="grids jc-center">
                    <div class="grid xl-30 lg-40 md-50 sm-100 mt-0 mb-1">
                        <h6 class="h4 sm fw-600">ประสบการณ์การทำงาน</h6>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><div class="d-flex">
                                <div class="fw-600 ws-nowrap">พ.ศ. 2561-2563</div>
                                <div class="ml-3">
                                    <span class="fw-600">รองผู้ว่าการ</span>
                                    <br> สายงานกิจการพิเศษ
                                </div>
                            </div></li>
                            <li><div class="d-flex">
                                <div class="fw-600 ws-nowrap">พ.ศ. 2560-2561</div>
                                <div class="ml-3">
                                    <span class="fw-600">รองผู้ว่าการ</span>
                                    <br> สายงานบริการและสิ่งแวดล้อม
                                </div>
                            </div></li>
                            <li><div class="d-flex">
                                <div class="fw-600 ws-nowrap">พ.ศ. 2558-2560</div>
                                <div class="ml-3">
                                    <span class="fw-600">ผู้ช่วยผู้ว่าการ</span>
                                    <br> สายงานท่าเรืออุตสาหกรรม
                                </div>
                            </div></li>
                        </ul>
                    </div>
                    <div class="grid xl-30 lg-40 md-50 sm-100 mt-0 mb-1">
                        <h6 class="h4 sm fw-600">การศึกษา</h6>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li>
                                ปริญญาเอก <span class="fw-600">Doctor of Philosophy 
                                (EnvironmentalEngineering and Management) Asian Institute 
                                ofTechnology (AIT)</span>
                            </li>
                            <li>
                                ปริญญาโท <span class="fw-600">Master of Engineering (Executive) 
                                AsianInstitute of Technology (AIT)</span>
                            </li>
                            <li>
                                ปริญญาโท วิศวกรรมศาสตรมหาบัณฑิต (วิศวกรรมโยธา) 
                                <br> มหาวิทยาลัยเกษตรศาสตร์
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="150">
                <div class="content-quote-02">
                    <h5 class="h3 sm text-center fw-300 color-06 md-no-br">
                        เป็นองค์กรหลักที่มีส่วนร่วมในการขับเคลื่อนเศรษฐกิจของประเทศ
                        <br> โดยเน้นภาคอุตสาหกรรม และบริการสู่อนาคตที่ยั่งยืน
                    </h5>
                </div>
                <h5 class="h4 lg fw-300 mt-3">
                    ภายใต้การดำเนินงานที่พร้อมรับมือกับสถานการณ์ที่
                    <br> เปลี่ยนแปลงตลอดเวลา กนอ. จึงมั่นใจว่าจะยังคงเติบโตไปอย่างยั่งยืน
                </h5>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
