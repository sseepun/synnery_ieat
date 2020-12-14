<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .bg-color7 {background-color:#414256; }
        .bt-dotted::before {
            content: '.............................';
            letter-spacing: 0.2rem; color:#8c51b8;
            font-weight:600; font-size:1.25rem;
        }
        .img-wrapper{position:relative;}
        .img-wrapper::after {
            content: '';position:absolute; top:5.5rem; left:0%; width:100%; height:.5px; 
            transform: rotate(-30deg); transform-origin: 50% 50%;
            background: linear-gradient(to right, rgba(255,255,255,0), rgba(201, 200, 175, .2),  rgba(201, 200, 175, 1),  rgba(201, 200, 175, 1), rgba(201, 200, 175, 1), rgba(255,255,255, 0));
        }
        .img-hex {
            clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
            position:relative; height:5.5rem; width:5.5rem;
        }
        .img-hex .img-bg {position:absolute; top:0; left:0; right:0; bottom:0; background-position:top center; background-repeat:no-repeat; }
        .diag-line {position:absolute; width:5rem; background:#cccbb1; height:1px;}
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ ' ],
            [ 'url' => '#', 'display' => 'คณะผู้บริหาร ' ],
        ];
        include('component/breadcrumb.php');
    ?>


    <section class="section-padding section-bg" style="background-image:url('./public/assets/app/images/banner/04.jpg');"></section>

    <section class="section-padding bg-color7">
        <div class="container">
            <h3 class="xs text-center color-white">ผู้ช่วยผู้ว่าการ</h3>
            <div class="grids">
                <?php for($i=0; $i < 3; $i++){?>
                    <div class="grid lg-1-3">
                        <div class="d-flex fw-wrap ai-flex-start">
                            <div class="img-wrapper">
                                <div class="img-hex mr-4">
                                    <div class="img-bg" style="background-image:url('./public/assets/app/images/hero/person-1.jpg');"></div>
                                </div>
                            </div>

                            <div class="color-white mt-2">
                                <h5 class="fw-400">นางปนัดดา รุ่งเรืองศรี</h5>
                                <p class="fw-200">ผู้ช่วยผู้ว่าการ</p>
                                <div class="d-flex fw-wrap jc-flex-start ai-center mt-1">
                                    <img class="mr-2" src="./public/assets/app/images/icon/phone.png" alt="phone">
                                    <p class="fw-200">02-253-2561 ต่อ 1410</p>
                                </div>
                                <div class="d-flex fw-wrap jc-flex-start ai-center mt-1">
                                    <img class="mr-2" src="./public/assets/app/images/icon/phone.png" alt="phone">
                                    <p class="fw-200">mail@ieat.go.th</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>


        </div>

    </section>


    <section class="section-padding">
        <div class="container">
            <h3 class="xs text-center">ผู้อำนวยการ</h3>
            <div class="grids mt-2">
                <?php for($i=0; $i < 8; $i++){?>
                    <div class="grid lg-25 sm-50">
                        <h5 class="fw-400">นางสาวปราณี รัตนสุภา</h5>
                        <p class="fw-200">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                        <div class="d-flex fw-wrap jc-flex-start ai-center">
                            <img class="mr-2" src="./public/assets/app/images/icon/phone.png" alt="phone">
                            <p class="fw-200">02-253-2561 ต่อ 1410</p>
                        </div>
                    </div>
                <?php }?>

                <div class="grid lg-25 sm-50 bt-dotted">
                    <p class="fw-200">ผู้อำนวยการฝ่ายการตลาด</p>
                </div>

                <?php for($i=0; $i < 3; $i++){?>
                    <div class="grid lg-25 sm-50">
                        <h5 class="fw-400">นางสาวปราณี รัตนสุภา</h5>
                        <p class="fw-200">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                        <div class="d-flex fw-wrap jc-flex-start ai-center">
                            <img class="mr-2" src="./public/assets/app/images/icon/phone.png" alt="phone">
                            <p class="fw-200">02-253-2561 ต่อ 1410</p>
                        </div>
                    </div>
                <?php }?>

                <!-- No Phone -->
                <?php for($i=0; $i < 29; $i++){?>
                    <div class="grid lg-25 sm-50">
                        <h5 class="fw-400">นางสาวปราณี รัตนสุภา</h5>
                        <p class="fw-200">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                    </div>
                <?php }?>
                

            </div>

        </div>
    </section>
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
