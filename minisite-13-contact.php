<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading bg-ffgray">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'class' => 'rect',
            'bg' => 'public/assets/app/images/bg/minisite-07.jpg',
            'title' => 'ติดต่อหน่วยงาน',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ.' ],
                [ 'url' => '#', 'display' => 'ติอต่อหน่วยงาน' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="contact-02 section-padding" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="text-center">
                <h5 class="h4 sm fw-500">
                    การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)
                </h5>
                <h6 class="h2 fw-500">
                    จังหวัดนครศรีธรรมราช
                </h6>
                <p class="h4 sm fw-500">
                    ช่องทางแจ้งเรื่องร้องเรียนการทุจริต /  ช่องทางรับฟังความคิดเห็น
                </p>
            </div>
            <div class="grids jc-center mt-4 pt-2">
                <div class="grid xl-25 lg-30">
                    <div class="contact-card shadow">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/contact-4.png" alt="Image Icon" />
                        </div>
                        <p class="h4 fw-600 color-04 op-0">ที่ตั้งสำนักงาน</p>
                        <table><tbody>
                            <tr>
                                <td>โทรศัพท์:</td>
                                <td>075 356069</td>
                            </tr>
                            <tr>
                                <td>โทรสาร:</td>
                                <td>075 356070</td>
                            </tr>
                            <tr>
                                <td>คอลเซ็นเตอร์:</td>
                                <td>02 2072700</td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="grid xl-25 lg-30">
                    <div class="contact-card shadow">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/contact-5.png" alt="Image Icon" />
                        </div>
                        <p class="h4 fw-600 color-04">ที่ตั้งสำนักงาน</p>
                        <p>สำนักงานย่อย การนิคมอุตสาหกรรม</p>
                        <p>จังหวัดนครศรีธรรมราช</p>
                        <p>เลขที่ 86 หมู่ที่ 9, ต.นาเคียน อ.เมือง</p>
                        <p>จ.นครศรีธรรมราช  80000 </p>
                        <div class="mt-3">
                            <a class="p color-04 h-color-01" href="#">
                                <u>แผนที่ Google Map</u>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid xl-25 lg-30">
                    <div class="contact-card shadow">
                        <div class="icon">
                            <img src="public/assets/app/images/icon/contact-6.png" alt="Image Icon" />
                        </div>
                        <p class="h4 fw-600 color-04">อีเมล์</p>
                        <p class="fw-600">แผนกบริการลูกค้า</p>
                        <p>contact@ieat.mail.go.th</p>
                        <p class="fw-600">แผนกการลงทุน</p>
                        <p>investment.1@ieat.mail.go.th</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-03 section-padding bg-white">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/contact-people.jpg');"></div>
        <div class="container">
            <div class="grids jc-end">
                <div class="grid md-50 sm-100 mt-0">
                    <div class="contact-wrapper">
                        <div class="ss-title">
                            <span class="h3 fw-600 color-04">แบบฟอร์มการติดต่อ</span>
                        </div>
                        <form action="">
                            <div class="grids">
                                <div class="grid sm-50">
                                    <div class="field mt-0">
                                        <label class="fw-500">เลือกหน่วยงาน* :</label>
                                        <div class="control">
                                            <div class="select-wrapper width-full">
                                                <select class="bg-white width-full" required title="General Input">
                                                    <option value="">&nbsp;</option>
                                                    <option value="1">หน่วยงานที่ 1</option>
                                                    <option value="2">หน่วยงานที่ 2</option>
                                                    <option value="3">หน่วยงานที่ 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-50">
                                    <div class="field mt-0">
                                        <label class="fw-500">หัวข้อเรื่อง* :</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" required title="General Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-50">
                                    <div class="field mt-0">
                                        <label class="fw-500">ชื่อ :</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" title="General Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-50">
                                    <div class="field mt-0">
                                        <label class="fw-500">นามสกุล :</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" title="General Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-50">
                                    <div class="field mt-0">
                                        <label class="fw-500">อีเมล :</label>
                                        <div class="control">
                                            <input type="email" class="bg-white" title="General Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-50">
                                    <div class="field mt-0">
                                        <label class="fw-500">หมายเลขติดต่อ :</label>
                                        <div class="control">
                                            <input type="text" class="bg-white" title="General Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="grid sm-100">
                                    <div class="field mt-0">
                                        <label class="fw-500">ข้อความ</label>
                                        <div class="control">
                                            <textarea class="bg-white" rows="4" required title="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="capcha-container mt-2">
                                <img class="img" src="public/assets/app/images/icon/capcha.png" alt="Capcha Image" />
                            </div>
                            <div class="btns mt-3">
                                <button type="submit" class="btn btn-action mr-1">
                                    <span>ส่งข้อความ</span>
                                </button>
                                <button type="reset" class="btn btn-action btn-action-01">
                                    ล้างข้อมูล
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="map-container">
        <div class="img-fill fit" style="background-image:url('public/assets/app/images/bg/googlemap.jpg');"></div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
