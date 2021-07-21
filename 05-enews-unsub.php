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
            <h4 class="h3 sm color-02 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                สมัครรับจดหมายข่าวผ่านทางอีเมล
            </h4>
            <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
            </h5>

            <div class="tab-container tab-container-01">
                <div class="grids">
                    <div class="grid sm-100" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="450">
                        <div class="ss-box-header shadow">
                            <div class="header bg-01 color-white">
                                <h5 class="h3 sm fw-500">แบบฟอร์มยกเลิกสมัครรับข่าวสาร</h5>
                            </div>
                            <div class="body bg-white">
                                <form action="/" method="POST">
                                    <div class="grids">
                                        <div class="grid md-80 sm-100 mt-0">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="email" placeholder="ป้อนอีเมลของคุณและเลือกจดหมายข่าวที่คุณต้องการยกเลิกการรับสมัครข้อมูล *" title="Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="capcha-container mt-4">
                                        <img src="public/assets/app/images/icon/capcha.png" alt="Capcha" />
                                    </div>
                                    <div class="btns mt-3">
                                        <a href="#" class="btn btn-action mr-1">
                                            ยกเลิกรับข่าวสาร
                                        </a>
                                        <button type="reset" class="btn btn-action btn-action-01">
                                            ล้างข้อมูล
                                        </button>
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
