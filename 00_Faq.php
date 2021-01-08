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
            [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="faq-01 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/14.jpg"></div>
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                คำถามที่พบบ่อย
            </h3>
            <h4 class="h3 sm color-07 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                ดำเนินกิจการด้วยความมุ่งมั่นและพัฒนาศักยภาพ 
            </h4>
            <h5 class="color-black xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                เพื่อการเติบโตทางธุรกิจสังคมและสิ่งแวดล้อมอย่างยั่งยืน รางวัลแห่งความสำเร็จต่างๆ <br>
                ที่ กนอ. ได้รับนับว่าเป็นเครื่องการันตีถึงการดำเนินการของบริษัทที่ดีและมีการบูรณาการ <br>
                อีกทั้งพัฒนาอย่างต่อเนื่อง
            </h5>

            <div class="grids jc-center" id="fade-up-mobile" data-aos="fade-up" data-aos-delay="450">
                <div class="grid lg-80 sm-100">
                    <div class="mt-4">
                        <div class="grids">
                            <?php for($i=0; $i<5; $i++){?>
                                <div class="grid sm-100 mt-3">
                                    <div class="faq bg-white">
                                        <div class="ss-box-shadow fade-right"></div>
                                        <div class="faq-header">
                                            <div class="icon">
                                                <img class="active" src="public/assets/app/images/icon/faq-2.png" alt="Icon" />
                                                <img class="inactive" src="public/assets/app/images/icon/faq-1.png" alt="Icon" />
                                            </div>
                                            <h3 class="title xs fw-300">
                                                ผู้ประกอบการสามารถขออนุมัติ อนุญาต ทางออนไลน์ผ่านช่องทางใด ?
                                            </h3>
                                        </div>
                                        <div class="faq-body">
                                            <div class="wrapper">
                                                <div class="icon">
                                                    <p class="color-white">
                                                        คำตอบ
                                                    </p>
                                                </div>
                                                <div class="content">
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
                                                    <h4 class="fw-600 mt-2">
                                                        หากมีข้อสอบถามเพิ่มเติม ...
                                                    </h4>
                                                    <p class="ovf-hidden">
                                                        หรือพบปัญหาในการใช้งานระบบ สามารถสอบติดต่อ 
                                                        <span class="fw-500 text-lg">02 253 0561</span>
                                                        ต่อ <span class="fw-500 text-lg">4448</span> ในวัน เวลาทำการ  หรือ 
                                                        <a class="fw-600 color-04 h-color-05" href="#">
                                                            ieat_support@ieat.mail.go.th
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php include('component/grid-footer.php'); ?>
                </div>
            </div>

            <div class="grids jc-center mt-5 pt-2" data-aos="fade-up" data-aos-delay="0">
                <div class="grid lg-2-3 sm-100 mt-0">
                    <h3 class="xs fw-300 text-center">
                        การติดต่อสอบถามเพิ่มเติม 
                    </h3>
                    <div class="table-wrapper mt-3">
                        <table class="table table-faq">
                            <thead>
                                <tr>
                                    <th class="h4 fw-200" style="min-width:200px;">
                                        ปัญหา
                                    </th>
                                    <th class="h4 fw-200" style="min-width:200px;">
                                        หน่วยงาน
                                    </th>
                                    <th class="h4 fw-200" style="min-width:200px;">
                                        เบอร์โทรศัพท์
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p">เกี่ยวกับการจัดตั้งนิคมอุตสาหกรรม</td>
                                    <td class="p">กองบริการและกำกับดูแลโครงการนิคมอุตสาหกรรม</td>
                                    <td class="p">02-253-2561 ต่อ 3321, 3334, 3329, 3328</td>
                                </tr>
                                <tr>
                                    <td class="p">เกี่ยวกับการอนุมัติ อนุญาตในด้านต่างๆ</td>
                                    <td class="p">
                                        ฝ่ายบริการผู้ประกอบการ <br>
                                        องอนุญาตผู้ประกอบกิจการ <br>
                                        กองอนุญาตก่อสร้างอาคาร <br>
                                        กองสิทธิประโยชน์
                                    </td>
                                    <td class="p">
                                        02-253-2561 ต่อ 4405, 4431 <br>
                                        02-253-2561 ต่อ 4448, 4402, 4414, 4408, 4422 <br>
                                        02-253-2561 ต่อ 6408, 2260, 6331, 1182 <br>
                                        02-253-2561 ต่อ 4450, 1188, 4411, 4446
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p">เกี่ยวกับสิ่งแวดล้อมและความปลอดภัย</td>
                                    <td class="p">
                                        ฝ่ายสิ่งแวดล้อม <br>
                                        กองสิ่งแวดล้อมและพลังงาน <br>
                                        กองความปลอดภัยและอาชีวอนามัย
                                    </td>
                                    <td class="p">
                                        02-253-2561 ต่อ 6322, 3318 <br>
                                        02-253-2561 ต่อ 6336, 6306, 6429, 6339 <br>
                                        02-253-2561 ต่อ 6304, 6330, 6300, 6335, 6301
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
