<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
<style>

</style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับ กนอ.' ],
            [ 'url' => '#', 'display' => 'คณะผู้บริหาร' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-04">

        <div class="top-container section-bpadding" style="background-image:url('public/assets/app/images/banner/04.jpg');">
            <div class="container">
                <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                    คณะผู้บริหาร
                </h2>
                <h3 class="sm color-07 fw-400" data-aos="fade-up" data-aos-delay="150">
                    การบริหารจัดการในเชิงบูรณาการ 
                </h3>
                <h5 class="color-black xs-no-br" data-aos="fade-up" data-aos-delay="300">
                    ภายใต้กรอบยุทธศาสตร์ 5G โดยมุ่งสู่เป้าหมาย <br>
                    การเจริญเติบโตอย่างยั่งยืน
                </h5>
                <div class="profile-container" data-aos="fade-up" data-aos-delay="450">
                    <?php for($i=0; $i<10; $i++){?>
                        <div class="profile about-target <?php if($i==0)echo 'active'; ?>" data-team="<?= $i ?>">
                            <div class="wrapper">
                                <div class="text-container text-center">
                                    <h3 class="xs fw-300">นางสาวสมจิณณ์ พิลึก</h3>
                                    <p class="fw-200">
                                        <span class="text-sm">
                                            ผู้ว่าการ การนิคมอุตสาหกรรมแห่งประเทศไทย
                                        </span>
                                    </p>
                                    <div class="content-quote-simple fw-300">
                                        <span class="color-07">พัฒนานิคมอุตสาหกรรม</span>
                                        และ<span class="color-04">ยกระดับการให้บริการ</span> 
                                        มุ่งเน้น ให้เกิดการพัฒนานิคมอุตสาหกรรม และท่าเรืออุตสาหกรรม
                                        เพื่อสร้างคุณค่าและก่อให้เกิดประโยชน์แก่ผู้มีส่วนได้ส่วนเสีย
                                    </div>
                                    <div class="btns">
                                        <a class="btn btn-action" href="#">
                                            <span>อ่านประวัติ</span>
                                        </a>
                                    </div>
                                </div>
                                <img class="profile-img" src="public/assets/app/images/hero/profile.png" alt="Profile" />
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="middle-container" data-aos="fade-up" data-aos-delay="600">
            <div class="director-container">
                <div class="container">
                    <div class="grids jc-space-evenly">
                        <?php
                            foreach([
                                [ 'img' => 'team-1.jpg', 'name' => 'นางสุวัฒนา กมลวัทนนิศา', 'job-title' => 'รองผู้ว่าการ (สายงานบริหาร)' ],
                                [ 'img' => 'team-2.jpg', 'name' => 'นายอัฐพล จิรวัฒน์จรรยา', 'job-title' => 'รองผู้ว่าการ (สายงานยุทธศาสตร์และพัฒนา)' ],
                                [ 'img' => 'team-3.jpg', 'name' => 'นางสาวกฤตยาพร ทัพภะทัต', 'job-title' => 'รองผู้ว่าการ (สายงานบริการและลูกค้าสัมพันธ์)' ],
                                [ 'img' => 'team-4.jpg', 'name' => 'นางสาวฐานันดร์ พิทักษ์วงศ์', 'job-title' => 'รองผู้ว่าการ (สายงานปฏิบัติการ 1)' ],
                                [ 'img' => 'team-5.jpg', 'name' => 'นายจักรรัฐ เลิศโอภาส', 'job-title' => 'รองผู้ว่าการ (สายงานปฏิบัติการ 2)' ],
                                [ 'img' => 'team-6.jpg', 'name' => 'นายวิฑูรย์ อยู่ทิม', 'job-title' => 'รองผู้ว่าการ (สายงานปฏิบัติการ 3)' ],
                                [ 'img' => 'team-7.jpg', 'name' => 'นายพรเทพ ภูริพัฒน์', 'job-title' => 'รองผู้ว่าการ (สายงานกิจการพิเศษ)' ],
                            ] as $i=>$d){
                        ?>
                            <div class="grid xl-25 lg-1-3 mt-0">
                                <div class="director <?php if($i==0)echo 'active'; ?>" data-team="<?= $i ?>">
                                    <div class="profile">
                                        <img class="pattern" src="public/assets/app/images/hero/pattern.png" alt="Pattern" />
                                        <div class="wrapper btn-hex-02">
                                            <div class="img-bg btn-hex-02" style="background-image:url('public/assets/app/images/hero/<?= $d['img'] ?>');"></div>
                                        </div>
                                        <img class="cut" src="public/assets/app/images/hero/cut.png" alt="Cut" />
                                    </div>
                                    <div class="text-wrapper color-white">
                                        <h6><?= $d['name'] ?></h6>
                                        <p class="job-title"><?= $d['job-title'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="director-container-02">
                <div class="container">
                    <h3 class="xs text-center color-white fw-500">
                        ผู้ช่วยผู้ว่าการ
                    </h3>
                    <div class="grids jc-space-evenly mt-3">
                        <?php
                            foreach([
                                [ 'img' => 'team-8.jpg', 'name' => 'นางปนัดดา รุ่งเรืองศรี', 'job-title' => 'ผู้ช่วยผู้ว่าการ' ],
                                [ 'img' => 'team-9.jpg', 'name' => 'นายธาดา สุนทรพันธุ์', 'job-title' => 'ผู้ช่วยผู้ว่าการ' ],
                                [ 'img' => 'team-10.jpg', 'name' => 'นายประทีป เอ่งฉ้วน', 'job-title' => 'ผู้ช่วยผู้ว่าการ' ],
                            ] as $i=>$d){ $i += 6;
                        ?>
                            <div class="grid xl-25 lg-1-3 mt-0">
                                <div class="director <?php if($i==0)echo 'active'; ?>" data-team="<?= $i ?>">
                                    <div class="profile">
                                        <img class="pattern" src="public/assets/app/images/hero/pattern.png" alt="Pattern" />
                                        <div class="wrapper btn-hex-02">
                                            <div class="img-bg btn-hex-02" style="background-image:url('public/assets/app/images/hero/<?= $d['img'] ?>');"></div>
                                        </div>
                                        <img class="cut" src="public/assets/app/images/hero/cut.png" alt="Cut" />
                                    </div>
                                    <div class="text-wrapper color-white">
                                        <h6><?= $d['name'] ?></h6>
                                        <p class="job-title"><?= $d['job-title'] ?></p>
                                        <div class="icon-bullet mt-2">
                                            <div class="icon bg-07 color-white btn-hex-02">
                                                <i class="zmdi zmdi-phone"></i>
                                            </div>
                                            <p>02-253-2561 ต่อ 1194</p>
                                        </div>
                                        <div class="icon-bullet">
                                            <div class="icon bg-03 color-white btn-hex-02">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <p>mail@ieat.go.th</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bottom-container section-padding" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <h3 class="xs text-center fw-500">
                    ผู้อำนวยการ
                </h3>
                <div class="grids jc-space-evenly">
                    <?php for($i=0; $i<40; $i++){?>
                        <div class="grid xl-25 lg-1-3 pt-3">
                            <h5 class="fw-500">นางสาวปราณี รัตนสุภา</h5>
                            <p class="job-title">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                            <?php if($i<12){?>
                                <div class="icon-bullet mt-2">
                                    <div class="icon bg-07 color-white btn-hex-02">
                                        <i class="zmdi zmdi-phone"></i>
                                    </div>
                                    <p>02-253-2561 ต่อ 1410</p>
                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
