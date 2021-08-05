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
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-01.png',
            'title' => 'แผนผังเว็บไซต์',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'แผนผังเว็บไซต์' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="sitemap-01">
        <img class="img-bg" src="public/assets/app/images/bg/minisite-sitemap.png" alt="Image Background" />
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="300">

            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        เกี่ยวกับ กนอ.
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ข้อมูลองค์กร</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">ความเป็นมาของ กนอ.</a></li>
                            <li><a href="#">ปรัชญา วิสัยทัศน์ และ</a></li>
                            <li><a href="#">พันธกิจ บทบาทหน้าที่ความรับผิด</a></li>
                        </ul>
                        <p class="list-title">การบริหารและพัฒนาทรัพยากรบุคคล</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">นโยบายการบริหาร</a></li>
                            <li><a href="#">การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล</a></li>
                            <li><a href="#">หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล</a></li>
                            <li><a href="#">รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</a></li>
                        </ul>
                        <p class="list-title">การตรวจสอบ</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">มาตรฐานสากลการปฏิบัติงานวิชาชีพการตรวจสอบภายใน ปี 2560</a></li>
                            <li><a href="#">คู่มือการปฏิบัติของคณะกรรมการตรวจสอบภายใน รัฐวิสาหกิจ</a></li>
                            <li><a href="#">คู่มือการปฏิบัติของการตรวจสอบภายในรัฐวิสาหกิจ</a></li>
                            <li><a href="#">คู่มือคณะกรรมการตรวจสอบ ปี 2563</a></li>
                            <li><a href="#">กฎบัตรคณะกรรมการตรวจสอบ</a></li>
                            <li><a href="#">กฎบัตรฝ่ายตรวจสอบภายใน</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ชุมชนสัมพันธ์ CSR</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">รายงาน GRI</a></li>
                            <li><a href="#">โครงสร้าง</a></li>
                            <li><a href="#">คณะกรรมการ</a></li>
                            <li><a href="#">คณะผู้บริหาร</a></li>
                        </ul>
                        <p class="list-title">กฎหมายและคู่มือ</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">การจัดตั้ง/พัฒนานิคม อุตสาหกรรม</a></li>
                            <li><a href="#">การประกอบกิจการในนิคมอุตสาหกรรม/a></li>
                            <li><a href="#">สิทธิประโยชน์ในนิคมอุตสาหกรรม </a></li>
                            <li><a href="#">สิ่งแวดล้อมและอาชีวอนามัย</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">การดำเนินงานขององค์กร</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">แผนยุทธศาสตร์/แผนวิสาหกิจ</a></li>
                            <li><a href="#">แผนแม่บท</a></li>
                            <li><a href="#">แผนปฏิบัติการ</a></li>
                            <li><a href="#">รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน </a></li>
                            <li><a href="#">รายงานผลการดำเนินการตามแผนปฏิบัติการ</a></li>
                            <li><a href="#">แผนการใช้จ่ายงบประมาณประจำปี</a></li>
                            <li><a href="#">แผนงานกำกับติดตามการใช้จ่ายงบประมาณประจำปี รอบ 6 เดือน </a></li>
                            <li><a href="#">รายงานผลการใช้จ่ายงบประมาณ ประจำปี</a></li>
                            <li><a href="#">การบริหารความเสี่ยงและควบคุมภายใน</a></li>
                            <li><a href="#">การปฏิบัติงาน</a></li>
                            <li><a href="#">รายงานประจำปี</a></li>
                            <li><a href="#">การแถลงทิศทางนโยบายที่สำคัญ</a></li>
                            <li><a href="#">ข้อมูลการลงทุนที่สำคัญ</a></li>
                            <li><a href="#">การดำเนินการตามนโยบายรัฐ</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">การกำกับดูแลกิจการที่ดี</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">นโยบายการกำกับดูแลกิจการที่ดี</a></li>
                            <li><a href="#">แผนการกำกับดูแลกิจการที่ดี</a></li>
                            <li><a href="#">จรรยาบรรณ กนอ.</a></li>
                            <li><a href="#">การเปิดเผยข้อมูลสาธารณะ (OIT)</a></li>
                            <li><a href="#">การเสริมสร้างวัฒนธรรมองค์กร</a></li>
                            <li><a href="#">การแสดงความรับผิดชอบต่อสังคมของ กนอ. </a></li>
                        </ul>
                        <p class="list-title">รางวัลแห่งความภาคภูมิใจ</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">การจัดการเรื่องร้องเรียน/ทุจริต ประพฤติมิชอบ</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริต</a></li>
                            <li><a href="#">การประเมินความเสี่ยงเพื่อป้องกันการทุจริต</a></li>
                            <li><a href="#">แผนปฏิบัติการป้องกันการทุจริต</a></li>
                            <li><a href="#">แนวทางปฏิบัติการจัดการข้อร้องเรียน</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        TSC (Total Solutions Center)
                    </span>
                </div>
                <div class="grids mt">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">การขออนุมัติ - อนุญาต ทางอิเล็กทรอนิกส์</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">แบบฟอร์ม</p>
                        <p class="list-title">รายงานสถานภาพการลงทุน</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ข้อมูลเชิงสถิติการให้บริการ</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">รายงานผลการสำรวจความพึงพอใจการให้บริการ</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">E–Service</p>
                    </div>
                </div>
            </div>
            
            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        ศูนย์ปฏิบัติการ กนอ.
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">รายงานสถานการณ์</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">COVID 19</a></li>
                            <li><a href="#">น้ำแล้ง</a></li>
                            <li><a href="#">ฝุ่น PM 2.5</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ระบบพื้นฐาน</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">ระบบฐานข้อมูล DSS สำหรับ ผู้ประกอบการ </a></li>
                            <li><a href="#">ระบบฐานข้อมูล DSS สำหรับ สำนักงานนิคม</a></li>
                            <li><a href="#">ระบบฐานข้อมูล DSS สำหรับ ผู้ดูแลระบบระบบฐานข้อมูล DSS สำหรับ ผู้ดูแลระบบ</a></li>
                            <li><a href="#">ระบบเฝ้าระวังด้านสิ่งแวดล้อม</a></li>
                            <li><a href="#">ระบบ GIS</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ประกาศกรมอุตุนิยมวิทยา</p>
                        <p class="list-title">พยากรณ์อากาศรายจังหวัด</p>
                        <p class="list-title">E–Service</p>    
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ลิงค์ที่กี่ยวข้อง</p>
                        <p class="list-title">ข่าวประชาสัมพันธ์</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ดาวน์โหลด</p>
                        <p class="list-title">ติดต่อ ศปก. กนอ.</p>
                    </div>
                </div>
            </div>

            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        เมืองอุตสาหกรรมเชิงนิเวศ (Eco- CSR - SHEE)
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">การจัดการสิ่งแวดล้อม</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">นโยบายด้านสิ่งแวดล้อม</a></li>
                            <li><a href="#">SHEE 2020</a></li>
                            <li><a href="#">การจัดทำระบบการจัดการสิ่งแวดล้อม ISO 14001</a></li>
                            <li><a href="#">โครงการนิคมอุตสาหกรรมที่ได้รับความเห็นชอบรายงาน EIA/EHIA</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">การจัดการความปลอดภัย</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">ข้อบังคับ PSM</a></li>
                            <li><a href="#">โครงการหรือกิจการ EHIA</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">Eco Industrial Town </p>
                    </div>
                </div>
            </div>

            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        ทำเลทองของ กนอ.
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">นิคมฯ สระแก้ว</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">นิคมฯ สงขลา</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">Rubber City</p>
                    </div>
                </div>
            </div>

            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        ข้อมูลนิคม/โรงงาน/ท่าเรือ
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">นิคมอุตสาหกรรม</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">นิคมอุตสาหกรรมในประเทศไทย (แผนที่)</a></li>
                            <li><a href="#">นิคมอุตสาหกรรมบริการ</a></li>
                            <li><a href="#">พื้นที่ในนิคมอุตสาหกรรม</a></li>
                            <li><a href="#">ภาพรวมการประกอบกิจการ</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ท่าเรืออุตสาหกรรม</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">เกี่ยวกับท่าเรือ</a></li>
                            <li><a href="#">การบริการและสิ่งอำนวยความสะดวกท่าเทียบเรือ</a></li>
                            <li><a href="#">ติดต่อท่าเรืออุตสาหกรรม</a></li>
                            <li><a href="#">เกณฑ์คุณภาพมาตรฐานปี 2552</a></li>
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">รายชื่อโรงงาน</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">รายชื่อนิคม</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ค้นหาโรงงาน</p>
                    </div>
                </div>
            </div>

            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        ข่าวสารจาก กนอ.
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ข่าวประชาสัมพันธ์</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ข่าวจัดซื้อจัดจ้าง</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">ระบบจัดซื้อจัดจ้างภาครัฐ (e-GP)</a></li>
                            <li><a href="#">แผนการจัดการพัสดุประจำปี</a></li>
                            <li><a href="#">ประกาศผลการจัดซื้อ / จัดจ้าง</a></li>
                            <li><a href="#">ประกาศเชิญชวน</a></li>
                            <li><a href="#">ประกาศเชิญชวน</a></li>
                            <li><a href="#">ประกาศรายชื่อผู้ผ่านการตรวจสอบผู้ไม่มีผลประโยชน์ร่วมกัน</a></li>
                            <li><a href="#">ประกาศรายชื่อผู้ชนะการเสนอราคา/ประกาศ ผู้ได้รับคัดเลือก</a></li>
                            <li><a href="#">รายงานจัดหาพัสดุรายเดือน</a></li>
                            <li><a href="#">เผยแพร่ราคากลาง</a></li>
                            <li><a href="#">ประกาศร่างข้อกำหนด TOR</a></li>
                            <li><a href="#">สรุปการดำเนินงานจัดซื้อจัดจ้าง</a></li>
                            
                        </ul>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ข่าวรับสมัครงาน</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">สื่อมัลติมีเดีย</p>
                    </div>
                </div>
            </div>

            <div class="sitemap-section p-4">
                <div class="ss-title full line-purple">
                    <span class="h3 fw-600 color-04">
                        ช่องทางติดต่อ
                    </span>
                </div>
                <div class="grids">
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ช่องทางติดต่อ</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">Q&A</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">ติดต่อ กนอ.</p>
                    </div>
                    <div class="grid lg-20 md-1-3">
                        <p class="list-title">หน่วยงานต่าง ๆ</p>
                        <ul class="ss-list dot-purple fw-200 gap-sm">
                            <li><a href="#">Link ภายใน</a></li>
                            <li><a href="#">กระทรวงอุตสาหกรรม</a></li>
                            <li><a href="#">สถาบันเครือข่าย</a></li>
                            <li><a href="#">หน่วยงานที่เกี่ยวข้อง</a></li>
                            <li><a href="#">บริษัทร่วมทุน</a></li>                       
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
