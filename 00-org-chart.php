<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/treant-js-1.0/Treant.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-treant.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับ กนอ.' ],
            [ 'url' => '#', 'display' => 'ผังองค์กร' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg" style="background-image:url('public/assets/app/images/bg/orgchart-2.jpg');">
        <div class="container">
            <h3 class="h2 color-black" data-aos="fade-up" data-aos-delay="0">
                ผังองค์กร
            </h3>
            <h4 class="h3 sm color-06 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                องค์กรหลักที่มีส่วนร่วมในการขับเคลื่อนเศรษฐกิจ 
            </h4>
            <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                ของประเทศโดยเน้นภาคอุตสาหกรรมและบริการสู่อนาคตที่ยั่งยืน
            </h5>
            <div class="ss-box mt-5" data-aos="fade-up" data-aos-delay="450" style="background:#fff;">
                <!-- <img class="img" src="public/assets/app/images/bg/orgchart-1.jpg" alt="Org Chart" /> -->
                <div class="tree" id="tree"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
    
    <script src="public/assets/lib/treant-js-1.0/vendor/raphael.js"></script>
    <script src="public/assets/lib/treant-js-1.0/Treant.js"></script>
    <script>
        var treeConfig = {
            chart: {
                container: '#tree',
                siblingSeparation: 15,
                levelSeparation: 25,
                subTeeSeparation: 15,
                connectors: {
                    type: 'step',
                    stackIndent: 20
                },
                nodeAlign: 'BOTTOM',
            },
            nodeStructure: {
                HTMLclass: 'root',
                text: { name: 'คณะกรรมการ กนอ.' },
                children: [
                    {
                        HTMLclass: 'node-1',
                        text: { name: 'คณะกรรมการตรวจสอบ' },
                    },
                    {
                        HTMLclass: 'node-2',
                        text: { name: 'ผู้ว่าการ กนอ.' },
                        children: [
                            {
                                HTMLclass: 'node-3',
                                innerHTML: `<p>ฝ่ายตรวจสอบภายใน</p>
                                    <ul>
                                        <li>กองตรวจสอบ 1</li>
                                        <li>กองตรวจสอบ 2</li>
                                    </ul>`,
                            },
                            {
                                HTMLclass: 'node-4',
                                innerHTML: `<p>ศูนย์ปฏิบัติการ กนอ.</p>
                                    <ul>
                                        <li>กองกำกับการปฏิบัติการ</li>
                                        <li>กองสนับสนุนการปฏิบัติการ</li>
                                    </ul>`,
                            },

                            {
                                pseudo: true,
                                childrenDropLevel: 1,
                                children: [

                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(ฝ่ายบริหาร)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>ฝ่ายบริการ</p>
                                                    <ul>
                                                        <li>กองกลาง</li>
                                                        <li>กองการประชุม</li>
                                                        <li>กองพัสดุ</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายทรัพยากรบุคคล</p>
                                                    <ul>
                                                        <li>กองบริหารทรัพยากรบุคคล</li>
                                                        <li>กองพัฒนาทรัพยากรบุคคล</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายกฎหมาย</p>
                                                    <ul>
                                                        <li>กองกฎหมายและระเบียบ</li>
                                                        <li>กองนิติกรรมและกรรมสิทธ์ที่ดิน</li>
                                                        <li>กองคดี</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายการเงินและบัญชี</p>
                                                    <ul>
                                                        <li>กองการเงิน</li>
                                                        <li>กองบัญชีการเงิน</li>
                                                        <li>กองบัญชีบริหารและงบประมาณ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        `,
                                    },

                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(ยุทธศาสตร์และพัฒนา)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>ฝ่ายยุทธศาสตร์</p>
                                                    <ul>
                                                        <li>กองนยบายและแผน</li>
                                                        <li>กองบริหารความเสี่ยงและควบคุมภายใน</li>
                                                        <li>กองนวัตกรรมและพัฒนาองค์กร</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายพัฒนา</p>
                                                    <ul>
                                                        <li>กองพัฒนาธุรกิจ</li>
                                                        <li>กองวิศวกรรม</li>
                                                        <li>กองบริการและกำกับดูแลโครงการนิคมอุตสาหกรรม</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายสิ่งแวดล้อม</p>
                                                    <ul>
                                                        <li>กองสิ่งแวดล้อมและพลังงาน</li>
                                                        <li>กองความปลอดภัย และอาชีวะอนามัย</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายชุมชนสัมพันธ์</p>
                                                    <ul>
                                                        <li>กองพัฒนาชุมชนสัมพันธ์</li>
                                                        <li>กองบริหารงานชุมชนสัมพันธ์</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        `,
                                    },
                                    
                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(บริการและลูกค้าสัมพันธ์)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>ฝ่ายบริการผู้ประกอบการ</p>
                                                    <ul>
                                                        <li>กองอรุญาตผู้ประกอบกิจการ</li>
                                                        <li>กองอรุญาตก่อสร้าง</li>
                                                        <li>กองสิทธิประโยชน์</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายการตลาด</p>
                                                    <ul>
                                                        <li>กองการตลาดและลูกค้าสัมพันธ์</li>
                                                        <li>กองประชาสัมพันธ์</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายเทคโนโลยีสารสนเทศ</p>
                                                    <ul>
                                                        <li>กองพัฒนาระบบสาระสนเทศ</li>
                                                        <li>กองปฏิบัติการเทคโนโลยีสาระสนเทศ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        `,
                                    },
                                    
                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(ปฏิบัติการ 1)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>ฝ่ายอำนวยการปฏิบัติการ 1</p>
                                                    <ul>
                                                        <li>กองอำนวยการปฏิบัติการ 1</li>
                                                        <li>สำนักงานนิคมฯ บางขัน</li>
                                                        <li>สำนักงานนิคมฯ พิจิตร</li>
                                                        <li>สำนักงานนิคมฯ แก่งคอย</li>
                                                        <li>สำนักงานนิคมฯ หนองแค</li>
                                                        <li>สำนักงานนิคมฯ อัญธานี</li>
                                                        <li>สำนักงานนิคมฯ บ้านหว้า</li>
                                                        <li>สำนักงานนิคมฯ บางปะอิน</li>
                                                        <li>สำนักงานนิคมฯ สหรัตนนคร</li>
                                                        <li>สำนักงานนิคมฯ สินสาคร</li>
                                                        <li>สำนักงานนิคมฯ มหาราชนคร</li>
                                                        <li>สำนักงานนิคมฯ ราชบุรี</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ ลาดกระบัง</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ สมุทรสาคร</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ ภาคเหนือ</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ ภาคใต้</p>
                                                </div>
                                            </div>
                                        `,
                                    },
                                    
                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(ปฏิบัติการ 2)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>ฝ่ายอำนวยการปฏิบัติการ 2</p>
                                                    <ul>
                                                        <li>กองอำนวยการปฏิบัติการ 2</li>
                                                        <li>สำนักงานนิคมฯ บางพลี</li>
                                                        <li>สำนักงานนิคมฯ เอเชีย (สุวรรณภูมิ)</li>
                                                        <li>สำนักงานนิคมฯ เวลโทรว์</li>
                                                        <li>สำนักงานนิคมฯ เกตเวย์ซิตี้</li>
                                                        <li>สำนักงานนิคมฯ ทีเอฟดี</li>
                                                        <li>สำนักงานนิคมฯ ปิ่นทอง</li>
                                                        <li>สำนักงานนิคมฯ ปิ่นทอง (แหลมฉบัง)</li>
                                                        <li>สำนักงานนิคมฯ ปิ่นทอง 3</li>
                                                        <li>สำนักงานนิคมฯ ปิ่นทอง 4</li>
                                                        <li>สำนักงานนิคมฯ ปิ่นทอง 5</li>
                                                        <li>สำนักงานนิคมฯ เหมราชชลบุรี</li>
                                                        <li>สำนักงานนิคมฯ เหมราชชลบุรี 2</li>
                                                        <li>สำนักงานนิคมฯ เหมราชชลบุรี อีสเทิร์นซีบอร์ด</li>
                                                        <li>สำนักงานนิคมฯ เหมราชชลบุรี อีสเทิร์นซีบอร์ด 2</li>
                                                        <li>สำนักงานนิคมฯ อมตะซิตี้</li>
                                                        <li>สำนักงานนิคมฯ ไฮเทค ถมินทร์</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ บางปู</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ แหลมฉบัง</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ อมตะนคร</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมฯ อีสเทิร์นซีบอร์ด<br><span>(ระยอง)</span></p>
                                                </div>
                                            </div>
                                        `,
                                    },

                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(ปฏิบัติการ 3)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>ฝ่ายอำนวยการปฏิบัติการ 3<br><span>อุตสาหกรรมเชิงนิเวศ</span></p>
                                                    <ul>
                                                        <li>กองอำนวยการปฏิบัติการ 3</li>
                                                        <li>กองพัฒนาท่าเรือ</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมอุตสาหกรรม<br><span>บานตาพุด</span></p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานนิคมอุตสาหกรรม<br><span>ร่วมดำเนินงานกลุ่มบานตาพุด</span></p>
                                                    <ul>
                                                        <li>สำนักงานนิคมอุตสาหกรรมเหมราชตะวันออก (บานตาพุด)</li>
                                                        <li>สำนักงานนิคมอุตสาหกรรมผาแดง</li>
                                                        <li>สำนักงานนิคมอุตสาหกรรมเอเชีย</li>
                                                        <li>สำนักงานนิคมอุตสาหกรรมอาร์โอแอล</li>
                                                    </ul>
                                                </div>
                                                <div class="node node-6">
                                                    <p>สำนักงานท่าเรืออุตสาหกรรม<br><span>บานตาพุด</span></p>
                                                </div>
                                            </div>
                                        `,
                                    },

                                    {
                                        HTMLclass: 'node-5',
                                        innerHTML: `
                                            <p>รองผู้ว่าการ <br> <span>(กิจการพิเศษ)</span></p>
                                            <div class="node-wrapper">
                                                <div class="node node-6">
                                                    <p>สำนักงานโครงการพิเศษ</p>
                                                </div>
                                                <div class="node node-6">
                                                    <p>ฝ่ายพัฒนาเมือง<br><span>อุตสาหกรรมเชิงนิเวศ</span></p>
                                                    <ul>
                                                        <li>กองพัฒนาเมืองอุตสาหกรรมเชิงนิเวศ</li>
                                                        <li>กองบริหารเมืองอุตสาหกรรมเชิงนิเวศ</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        `,
                                    },

                                ],
                            },

                            {
                                HTMLclass: 'node-3',
                                text: { name: 'ผู้เชี่ยวชาญ 11' },
                            },
                            {
                                HTMLclass: 'node-3',
                                text: { name: 'ผู้เชี่ยวชาญ 11' },
                            },
                        ],
                    },
                ]
            }
        };
        var tree = new Treant(treeConfig);
    </script>
</body>
</html>
