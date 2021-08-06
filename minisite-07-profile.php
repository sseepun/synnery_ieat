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
        </div>
        <div class="section-padding bg-ffgray" data-aos="fade-up" data-aos-delay="600">
            <div class="container">
                <div class="grids">
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
                            ],
                            [
                                'firstname' => 'นางสาวกฤตยาพร', 'lastname' => 'ทัพภะทัต',
                                'title' => 'รองผู้ว่าการ (สายงานบริการและลูกค้าสัมพันธ์)',
                                'phone' => '02-253-2561 ต่อ 1194',
                                'email' => 'atthapol@ieat.go.th',
                                'profile' => 'public/assets/app/images/hero/minisite-03.png'
                            ],
                            [
                                'firstname' => 'นายธาดา', 'lastname' => 'สุนทรพันธุ์',
                                'title' => 'ผู้ช่วยผู้ว่าการ',
                                'phone' => '02-253-2561 ต่อ 1194',
                                'email' => 'atthapol@ieat.go.th',
                                'profile' => 'public/assets/app/images/hero/minisite-04.png'
                            ],
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
                            ],
                            [
                                'firstname' => 'นางสาวกฤตยาพร', 'lastname' => 'ทัพภะทัต',
                                'title' => 'รองผู้ว่าการ (สายงานบริการและลูกค้าสัมพันธ์)',
                                'phone' => '02-253-2561 ต่อ 1194',
                                'email' => 'atthapol@ieat.go.th',
                                'profile' => 'public/assets/app/images/hero/minisite-03.png'
                            ],
                            [
                                'firstname' => 'นายธาดา', 'lastname' => 'สุนทรพันธุ์',
                                'title' => 'ผู้ช่วยผู้ว่าการ',
                                'phone' => '02-253-2561 ต่อ 1194',
                                'email' => 'atthapol@ieat.go.th',
                                'profile' => 'public/assets/app/images/hero/minisite-04.png'
                            ]
                        ] as $j=>$d){
                    ?>
                        <div class="grid lg-25 md-1-3 mb-2">
                            <div class="avatar-01">
                                <img class="avatar-border" src="public/assets/app/images/icon/border-profile.png" alt="Avatar Border" />
                                <div class="avatar-wrapper">
                                    <div class="wrapper">
                                        <img src="<?= $d['profile'] ?>" alt="Image Profile" />
                                    </div>
                                </div>
                                <img class="avatar-btn" src="public/assets/app/images/icon/btn-profile.png" alt="Avatar Button" />
                            </div>
                            <div class="avatar-text-01">
                                <h6 class="h4 fw-600 lh-sm">
                                    <?= $d['firstname'] ?><br><?= $d['lastname'] ?>
                                </h6>
                                <p class="desc sm"><?= $d['title'] ?></p>
                                <table class="avatar-info"><tbody>
                                    <tr>
                                        <td><img src="public/assets/app/images/icon/phone.png" alt="Image Icon" /></td>
                                        <td class="p sm"><?= $d['phone'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><img src="public/assets/app/images/icon/email.png" alt="Image Icon" /></td>
                                        <td class="p sm"><?= $d['email'] ?></td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section class="content-07 minisite">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/minisite-profile.png');"></div>
        <div class="container position-relative">
            <div data-aos="fade-up" data-aos-delay="0">
                <h6 class="h3 xs fw-600 text-center">
                    ผู้อำนวยการ
                </h6>
                <div class="bg-04 mt-2" style="height:3px;"></div>
                <div class="grids info-grids">
                    <?php for($i=0; $i<12; $i++){?>
                        <div class="grid lg-1-3 md-50 sm-100 info-grid">
                            <div class="wrapper">
                                <div class="text-container">
                                    <p class="sm fw-600">นางสาวปราณี รัตนสุภา</p>
                                    <p class="sm">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                                </div>
                                <div class="info-container">
                                    <div class="avatar-text-01">
                                        <div class="avatar-info d-flex ai-center ws-nowrap">
                                            <img src="public/assets/app/images/icon/phone.png" alt="Image Icon" />
                                            <p class="sm">02-253-2561</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
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
