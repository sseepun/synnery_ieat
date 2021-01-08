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
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'ติดต่อ กนอ. ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="contact-01 section-bpadding img-fill" style="background-image:url('public/assets/app/images/bg/contact-1.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                ติดต่อ กนอ.
            </h3>
            <h4 class="h3 sm color-02 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                ดำเนินกิจการด้วยความมุ่งมั่นและพัฒนาศักยภาพในทุกๆด้าน
            </h4>
            <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                เพื่อการเติบโตทางธุรกิจสังคมและสิ่งแวดล้อมอย่างยั่งยืน รางวัลแห่งความสำเร็จต่างๆ<br>
                ที่ กนอ. ได้รับนับว่าเป็นเครื่องการันตีถึงการดำเนินการของบริษัทที่ดี
            </h5>
            <div class="text-center mt-5 xs-hide" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="450">
                <h4 class="h3 xs">
                    การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)
                </h4>
                <h5 class="color-02">
                    ช่องทางแจ้งเรื่องร้องเรียนการทุจริต / ช่องทางรับฟังความคิดเห็น
                </h5>
            </div>
            <div class="grids jc-center mt-3" data-aos="fade-up" id="fade-up-mobile-2" data-aos-delay="600">
                <div class="grid lg-1-3 md-50 sm-100 mt-0">
                    <div class="contact-card" style="background-image:url('public/assets/app/images/bg/contact-btn.png');">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/contact-1.png" alt="Icon" />
                            </div>
                            <div class="text-wrapper color-white text-center">
                                <p class="fw-200"><span class="fw-400">
                                    Telephone :</span> 02 2530561
                                </p>
                                <p class="fw-200">
                                    <span class="fw-400">Call Center : </span>02 2072700
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-1-3 md-50 sm-100 mt-0">
                    <div class="contact-card" style="background-image:url('public/assets/app/images/bg/contact-btn.png');">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/contact-2.png" alt="Icon" />
                            </div>
                            <div class="text-wrapper color-white text-center">
                                <p class="fw-200">
                                    618 ถนนนิคมมักกะสัน แขวงมักกะสัน
                                </p>
                                <p class="fw-200">
                                    เขตราชเทวี กรุงเทพมหานคร 10400
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-1-3 md-50 sm-100 mt-0">
                    <div class="contact-card" style="background-image:url('public/assets/app/images/bg/contact-btn.png');">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/contact-3.png" alt="Icon" />
                            </div>
                            <div class="text-wrapper color-white text-center">
                                <p class="fw-200">
                                    <a class="color-white h-color-03" href="#">
                                        contact@ieat.mail.go.th
                                    </a>
                                </p>
                                <p class="fw-200">
                                    <a class="color-white h-color-03" href="#">
                                        investment.1@ieat.mail.go.th
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-01 section-padding img-fill" style="background-image:url('public/assets/app/images/bg/contact-2.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <h3 class="xs text-center color-white fw-400" data-aos="fade-up" data-aos-delay="0">
                แบบฟอร์มการติดต่อ
            </h3>
            <div data-aos="fade-up" data-aos-delay="150">
                <form class="contact-form" action="/" method="POST">
                    <div class="grids">
                        <div class="grid sm-100 mt-3">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0">
                                    <div class="field color-white fw-300">
                                        <label class="fw-300">เลือกหน่วยงาน *</label>
                                        <span class="text-xl">:</span>
                                    </div>
                                </div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="field select-wrapper w-100">
                                        <select class="sm bg-white w-100" required>
                                            <option value="">เลือกหน่วยงาน</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                        <div class="grid sm-100 mt-2">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0">
                                    <div class="field color-white fw-300">
                                        <label class="fw-300">ชื่อ-นามสกุล *</label>
                                        <span class="text-xl">:</span>
                                    </div>
                                </div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="field">
                                        <input type="text" class="sm bg-white" required title="Name" />
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                        <div class="grid sm-100 mt-2">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0">
                                    <div class="field color-white fw-300">
                                        <label class="fw-300">อีเมล *</label>
                                        <span class="text-xl">:</span>
                                    </div>
                                </div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="field">
                                        <input type="email" class="sm bg-white" required title="Email" />
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                        <div class="grid sm-100 mt-2">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0">
                                    <div class="field color-white fw-300">
                                        <label class="fw-300">หัวข้อ *</label>
                                        <span class="text-xl">:</span>
                                    </div>
                                </div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="field">
                                        <input type="text" class="sm bg-white" required title="Subject" />
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                        <div class="grid sm-100 mt-2">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0">
                                    <div class="field color-white fw-300">
                                        <label class="fw-300">ข้อความ *</label>
                                        <span class="text-xl">:</span>
                                    </div>
                                </div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="field">
                                        <textarea class="sm bg-white" rows="7" required title="Message"></textarea>
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                        <div class="grid sm-100 mt-2">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="capcha-container width-full">
                                        <img class="img" src="public/assets/app/images/icon/capcha2.png" alt="Capcha Image" />
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                        <div class="grid sm-100 mt-3">
                            <div class="grids jc-center">
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                                <div class="grid lg-40 md-2-3 sm-90 mt-0">
                                    <div class="btns text-center mt-2">
                                        <button type="submit" class="btn btn-action mr-1">
                                            <span>ส่ง</span>
                                        </button>
                                        <button type="reset" class="btn btn-action btn-action-01">
                                            ล้างข้อมูล
                                        </button>
                                    </div>
                                </div>
                                <div class="grid xl-15 lg-15 md-2-3 sm-90 mt-0"></div>
                            </div>
                        </div>
                    
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
