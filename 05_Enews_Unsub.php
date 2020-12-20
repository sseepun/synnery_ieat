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
            [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.jpg"></div>
        <div class="container">
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                จดหมายข่าวสาร
            </h3>
            <h4 class="h3 sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                สมัครรับจดหมายข่าวผ่านทางอีเมล์
            </h4>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
            </h5>

            <div data-aos="fade-up" data-aos-delay="450">
                <div class="grids grid-header">
                    <div class="grid xl-20 lg-25 md-30 sm-100 mt-0">
                        <div class="options">
                            <input type="text" name="search" placeholder="ค้นหา" required title="Search" />
                            <button type="submit" class="btn btn-grid">
                                <em class="zmdi zmdi-search"></em>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-9.png" alt="Icon">
                                </div>
                                <h6>กระทู้ของฉัน</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-3.png" alt="Icon">
                                </div>
                                <h6>จดหมายข่าวสาร</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-10.png" alt="Icon">
                                </div>
                                <h6>แก้ไขข้อมูลและรหัส</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-11.png" alt="Icon">
                                </div>
                                <h6>ออกจากระบบ</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <div class="ss-box-header shadow">
                            <div class="header bg-01 color-white">
                                <h5 class="h3 sm fw-500">แบบฟอร์มสมัครรับข่าวสาร</h5>
                            </div>
                            <div class="body bg-white">
                                <form action="/" method="POST">
                                    <div class="grids">
                                        <div class="grid md-80 sm-100 mt-0">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="email" placeholder="ป้อนอีเมลของคุณและเลือกจดหมายข่าวที่คุณต้องการยกเลิกการรับสมัครข้อมูล" title="Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="capcha-container mt-4">
                                        <img src="public/assets/app/images/icon/capcha.png" alt="Capcha" />
                                    </div>
                                    <div class="btns mt-3">
                                        <a href="#" class="btn btn-action mr-1">
                                            สมัครรับข่าวสาร
                                        </a>
                                        <a href="#" class="btn btn-action btn-action-01">
                                            ข้อมูล
                                        </a>
                                    </div>

                                    <h6 class="fw-600 mt-4 pt-2">
                                        เงื่อนไขการรับจดหมายข่าว
                                    </h6>
                                    <p class="fw-200 pb-3">
                                        เมื่อส่งแบบฟอร์มนี้ จะถือว่าคุณยินยอมที่จะรับการติดต่อสื่อสารทางอิเล็กทรอนิกส์จากกรมการนิคมอุตสาหกรรมแห่งประเทศไทย
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
