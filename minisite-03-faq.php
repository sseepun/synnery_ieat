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
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-03.png',
            'title' => 'คำถามที่พบบ่อย',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="grid-header mt-0" data-aos="fade-up" data-aos-delay="300">
                <p class="fw-600 text-center">
                    พิมพ์คำค้นหาของคำถามหรือคำตอบ
                </p>
                <div class="d-flex jc-center">
                    <div class="options w-auto">
                        <input type="text" class="w-md" name="search" placeholder="ค้นหา" required title="Search" />
                        <button type="submit" class="btn btn-grid">
                            <em class="zmdi zmdi-search"></em>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grids jc-center" data-aos="fade-up" data-aos-delay="450">
                <div class="grid lg-90 sm-100">

                    <div class="grids grid-header sm-break mt-0">
                        <div class="grid sm-100 mt-0">
                            <div class="d-flex jc-end">
                                <div class="options w-auto mx-2">
                                    <div class="select-wrapper">
                                        <select class="order" title="Order">
                                            <option value="" disabled="" selected="">ที่มาใหม่</option>
                                            <option value="newest">ที่มาใหม่</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="faq-03 style-02 grids">
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="grid sm-100 mt-3">
                                <div class="faq">
                                    <div class="faq-header">
                                        <div class="faq-icon">
                                            <div class="icon"></div>
                                        </div>
                                        <h6 class="title h4 fw-300">
                                            กนอ. มีการติดตามตรวจสอบคุณภาพสิ่งแวดล้อมรอบนิคม/ท่าเรืออุตสาหกรรมอย่างไร เพื่อให้มั่นใจว่า
                                            การดำเนินการ ของ กนอ. ไม่ส่งผลกระทบต่อชุมชนโดยรอบนิคมฯ ?
                                        </h6>
                                        <div class="ss-stat">
                                            <div class="stat">
                                                <div class="icon">
                                                    <em class="zmdi zmdi-calendar-alt"></em>
                                                </div> 
                                                <div class="p sm fw-300 lh-xs">
                                                    <span class="fw-600">วันที่แผยแพร่</span> 
                                                    <br> 13/05/2564
                                                </div>
                                            </div>
                                            <div class="stat">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/read.svg" alt="Icon" />
                                                </div> 
                                                <span class="fw-600">112</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-body">
                                        <div class="wrapper">
                                            <div class="faq-icon"></div>
                                            <div class="content">
                                                <div class="stripe-container">
                                                    <p class="ovf-hidden">
                                                        <span class="fw-600">คำตอบ :</span> ผู้ประกอบการสามารถเข้าใช้ระบบอนุมัติ 
                                                        – อนุญาตทางอิเล็กทรอนิกส์ <span class="fw-500">(e-Permission & Privilege)</span> ได้ทาง 
                                                        <a class="fw-600 color-04 h-color-05" href="#">
                                                            http://epp-ent.ieat.go.th/epp/
                                                        </a> 
                                                        โดยสามารถดาวน์โหลดคู่มือการใช้งานระบบได้ทาง 
                                                        <a class="fw-600 color-04 h-color-05" href="#">
                                                            https://epp-ent.ieat.go.th/new_epp_entrepreneur/assets/pdf/overview-handbook.pdf
                                                        </a>
                                                    </p>
                                                    <p class="fw-600 mt-2">
                                                        หากมีข้อสอบถามเพิ่มเติม ...
                                                    </p>
                                                    <p class="ovf-hidden">
                                                        หรือพบปัญหาในการใช้งานระบบ สามารถสอบติดต่อ 
                                                        <span class="fw-500 text-lg">02 253 0561</span>
                                                        ต่อ <span class="fw-500 text-lg">4448</span> ในวัน เวลาทำการ  หรือ 
                                                        <a class="fw-600 color-04 h-color-05" href="#">
                                                            ieat_support@ieat.mail.go.th
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="stripe-container mt-3">
                                                    <div class="table-wrapper">
                                                        <table class="table table-download-02">
                                                            <tbody>
                                                                <?php foreach(['pdf', 'xls', 'doc', 'ppt'] as $d){?>
                                                                    <tr>
                                                                        <td>
                                                                            <img class="file-icon" src="public/assets/app/images/file/<?= $d ?>.png" alt="File Icon Image" />
                                                                        </td>
                                                                        <td>
                                                                            <p class="sm line-1">
                                                                                รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ.
                                                                                ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563)
                                                                            </p>
                                                                            <p class="sm">
                                                                                ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                                                จำนวนดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-img" href="#">
                                                                                ดาวน์โหลด
                                                                                <img class="ml-2" src="public/assets/app/images/icon/download.png" alt="Image Icon" />
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-img" href="#">
                                                                                แจ้งไฟล์เสีย 
                                                                                <img class="ml-2" src="public/assets/app/images/icon/error.png" alt="Image Icon" />
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <?php include('component/grid-footer.php'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-05 section-padding" style="background-image:url('public/assets/app/images/bg/37.jpg');">
        <div class="container">
            <div class="text-container">
                <div class="text-wrapper">
                    <div class="icon" data-aos="fade-up" data-aos-delay="0">
                        <img src="public/assets/app/images/icon/chat-hex.png" alt="Image Icon" />
                    </div>
                    <div class="text" data-aos="fade-up" data-aos-delay="150">
                        <h6 class="h3 fw-600 color-04">ยังไม่พบข้อมูลที่ต้องการ ?</h6>
                        <p class="mt-1">
                            ในกรณีที่ต้องการความช่วยเหลือเพิ่มเติม <br>
                            สามารถติดต่อหน่วยงานได้ที่หมายเลข 02 2330561 <br>
                            สามารถคลิกที่ปุ่มด้านล่าง เพื่อดูช่องทางการติดต่อทางอื่น
                        </p>
                        <div class="btns mt-3">
                            <a class="btn btn-action" href="#">
                                <span>ติดต่อเรา</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
