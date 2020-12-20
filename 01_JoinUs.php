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
            [ 'url' => '#', 'display' => 'เกี่ยวกับ กนอ.' ],
            [ 'url' => '#', 'display' => 'ร่วมงานกับเรา' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-02 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/12.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                ร่วมงานกับเรา
            </h3>
            <h4 class="h3 sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                ทุกความสำเร็จมาจากทีมที่ยิ่งใหญ่
            </h4>
            <h5 class="color-black xs-no-br" data-aos="fade-up" data-aos-delay="300">
                มาร่วมเป็นส่วนหนึ่งกับเรา กนอ.
            </h5>
 
            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>ข่าวประชาสัมพันธ์</h6>
                            </a>
                            <div class="tab-children d-block">
                                <a class="tab tab-list color-black h-color-04 active" href="#">
                                    <p>ประกาศจาก กนอ.</p>
                                </a>
                                <a class="tab tab-list color-black h-color-04" href="#">
                                    <p>ข่าวสารจาก กนอ.</p>
                                </a>
                                <a class="tab tab-list color-black h-color-04" href="#">
                                    <p>ข่าวสารจากหน่วยงานที่เกี่ยวข้อง</p>
                                </a>
                            </div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-2.png" alt="Icon">
                                </div>
                                <h6>ข่าวสารการลงทุน</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-4.png" alt="Icon">
                                </div>
                                <h6>ประกาศจัดซื้อจัดจ้าง</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-7.png" alt="Icon">
                                </div>
                                <h6>ร่วมงานกับเรา</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <?php for($i=0; $i<7; $i++){?>
                            <div class="about-container <?php if($i==0)echo 'active'; ?>">
                                <div class="about-header">
                                    <h5 class="prefix fw-400">ตำแหน่ง</h5>
                                    <h6 class="title h3 xs color-04">
                                        Mechanical Project Manager / ผู้จัดการโครงการเครื่องกล 2 อัตรา
                                    </h6>
                                    <div class="date">
                                        <div class="d">04</div>
                                        <div class="m-y">09.2563</div>
                                    </div>
                                </div>
                                <div class="about-tag">
                                    <h5>จำนวนที่รับสมัคร <span class="fw-500 color-03">10</span> ตำแหน่ง</h5>
                                    <div class="icon">
                                        <em class="zmdi zmdi-plus"></em>
                                    </div>
                                </div>
                                <div class="about-body">
                                    <h5 class="fw-600">
                                        จำนวนที่รับสมัคร <span class="text-md color-04">10</span> ตำแหน่ง
                                    </h5>
                                    <h5 class="fw-600 mt-2">คุณสมบัติที่จำเป็น</h5>
                                    <ul>
                                        <li>เพศชาย อายุ 35 ปี ขึ้นไป</li>
                                        <li>วุฒิการศึกษา ปริญญาตรี วิศวกรเครื่องกล</li>
                                        <li>มีประสบการณ์ในการทำงานด้านเครื่องกล ไม่ต่ำกว่า 10 ปี</li>
                                        <li>สามารถถอดแบบและประมาณราคาได้</li>
                                        <li>มีทักษาะในการบริการโครงการและบริหารเวลาได้เป็นอย่างดี</li>
                                        <li>สามารถแก้ไขปัญหาที่เกิดขึ้นได้อย่างมีประสิทธิภาพ</li>
                                        <li>มีใบอนุญาตประกอบวิชาชีพ (จะได้รับพิจารณาเป็นพิเศษ)</li>
                                        <li>สามารถควบคุมดูแลการดำเนินงานของโครงการทุกโครงการให้เป็นไปตามแผนและระยะเวลาที่กำหนด</li>
                                        <li>ให้คำแนะนำและแก้ปัญหาอย่างสร้างสรรค์เกี่ยวกับปัญหา / ข้อบกพร่องที่เกิดขึ้น</li>
                                        <li>ดูแลและให้คำปรึกษาพนักงานและประสานงานผู้มีส่วนร่วม</li>
                                        <li>มีทักษาะในการติดต่อสื่อสารและมีมนุษยสัมพันธ์ที่ดี</li>
                                    </ul>
                                    <h5 class="fw-600 mt-4">หน้าที่และความรับผิดชอบ:</h5>
                                    <p class="fw-200 pl-3 mt-2">
                                        ควมคุมดูแลโครงการที่ได้รับมอบหมายให้สามสามารถปฏิบัติงานได้อย่างมีประสิทธิภาพ 
                                        ตั้งแต่การบริหารจัดการบุคคลปรนะจำโครงการ การบริหารจัดการในงาน งบประมาณค่าใช้จ่าย 
                                        รวมถึงวัสดุอุปกรณ์และแรงงานที่ต้องใช้ในโครงการให้เป็นไปตามแผนที่กำหนด
                                    </p>
                                    <div class="btns mt-4">
                                        <a class="btn btn-action" href="#">
                                            <span>สมัครตำแหน่งนี้</span>
                                        </a>
                                    </div>
                                    <div class="about-side">
                                        <div class="text-container">
                                            <h5 class="fw-400 color-white">ติดต่อ</h5>
                                            <p class="color-03 mt-1">
                                                ฝ่ายทรัพยากรบุคคล 
                                                <br>
                                                <a class="color-03 h-color-04" href="#">
                                                    02 - 1234567
                                                </a>
                                                <br>
                                                <a class="color-03 h-color-04" href="#">
                                                    Recruit@ieat.go.th
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <?php include('component/grid-footer.php'); ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
