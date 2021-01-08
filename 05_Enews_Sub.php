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
                                <h5 class="h3 sm fw-500">แบบฟอร์มสมัครรับข่าวสาร</h5>
                            </div>
                            <div class="body bg-white">
                                <form action="/" method="POST">
                                    <div class="grids">
                                        <div class="grid md-80 sm-100 mt-0">
                                            <div class="field">
                                                <div class="control">
                                                    <input type="email" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร *" title="Email" />
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <h5 class="fw-400 mt-4">
                                        กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม
                                    </h5>

                                    <div class="border-bottom bcolor-sgray mt-4 pb-4">
                                        <h6 class="color-01 fw-600">ข่าวประชาสัมพันธ์</h6>
                                        <p class="fw-200 pb-1">
                                            ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆเกี่ยวกับ กนอ. 
                                            และนิคมอุตสาหกรรมในประเทศไทย
                                        </p>
                                        <fieldset>
                                            <?php for($i=0; $i<6;$i++){?>
                                                <div class="field mt-2">
                                                    <div class="control checkbox-control">
                                                        <input type="checkbox" name="types[]" id="type_0_<?= $i; ?>"  value="<?= $i; ?>" title="Checkbox" />
                                                        <label class="mb-0" for="type_0_<?= $i; ?>">ประกาศจาก กนอ</label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </fieldset>
                                    </div>

                                    <div class="border-bottom mt-4 pb-4">
                                        <h6 class="color-01 fw-600">สื่อมัลติมีเดียและคลังความรู้</h6>
                                        <p class="fw-200 pb-1">
                                            เพื่อยกระดับและพัฒนาศักยภาพสำหรับกิจการในนิคมอุตสาหกรรม
                                        </p>
                                        <fieldset>
                                            <?php for($i=0; $i<3;$i++){?>
                                                <div class="field mt-2">
                                                    <div class="control checkbox-control">
                                                        <input type="checkbox" name="types[]" id="type_1_<?= $i; ?>"  value="<?= $i; ?>" title="Checkbox" />
                                                        <label class="mb-0" for="type_1_<?= $i; ?>">คลังภาพ</label>
                                                    </div>
                                                </div>
                                            <?php }?>
                                        </fieldset>
                                    </div>

                                    <div class="capcha-container mt-2">
                                        <img src="public/assets/app/images/icon/capcha.png" alt="Capcha" />
                                    </div>
                                    <div class="btns mt-3">
                                        <a href="#" class="btn btn-action mr-1">
                                            สมัครรับข่าวสาร
                                        </a>
                                        <button type="reset" class="btn btn-action btn-action-01">
                                            ล้างข้อมูล
                                        </button>
                                    </div>

                                    <h6 class="fw-600 mt-4 pt-3">
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
