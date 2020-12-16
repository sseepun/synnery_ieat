<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        table.helpdesk-table thead tr td {color:#fff; text-align:center; font-size: 1.5625rem; font-weight:200;}
        table.helpdesk-table thead tr td:nth-child(2n) {background: #5b327b;}
        table.helpdesk-table thead tr td:nth-child(2n+1) {background: #452464;}
        table.helpdesk-table tbody tr td {font-size: 1.3125rem; font-weight:200; text-align:center;}

        table.helpdesk-table tbody tr:nth-child(2n) td:nth-child(2n) {background:#ffffff;}
        table.helpdesk-table tbody tr:nth-child(2n) td:nth-child(2n+1) {background: #f0f0f0;}
        
        
        table.helpdesk-table tbody tr:nth-child(2n+1) td:nth-child(2n) {background: #f1f1f1 ;}
        table.helpdesk-table tbody tr:nth-child(2n+1) td:nth-child(2n+1) {background: #e3e3e3;}

        .tag-status { text-align:center; color: #fff;  padding: .125rem 0; max-width:6rem; margin:0 auto; border-radius:.125rem; font-size: 1rem;}
        .tag-status.tag-01 { background-color:#802785;}
        .tag-status.tag-02 { background-color:#503f87;}
        .tag-status.tag-03 { background-color:#24a8ab;}
        .tag-status.tag-04 { background-color:#10062d;}

        .tag-status.tag-01::before {content: 'รอดำเนินการ'; }
        .tag-status.tag-02::before {content: 'รับเรื่อง';}
        .tag-status.tag-03::before {content: 'ปิดแล้ว';}
        .tag-status.tag-04::before {content: 'ยกเลิก'; }

    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>


    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'แจ้งเรื่องร้องเรียน' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.jpg"></div>
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                แจ้งเรื่องร้องเรียน
            </h2>
            <h3 class="sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                ระบบจัดการ เกี่ยวกับการใช้งาน
            </h3>
            <h5 class="color-black xs-no-br" data-aos="fade-up" data-aos-delay="300">
                จัดการเนื้อหาในเว็บไซต์และข้อมูลส่วนตัว
            </h5>
 
            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <?php
                                foreach([
                                    'กระทู้ของฉัน', 'จดหมายข่าวสาร', 'แก้ไขข้อมูลและรหัส', 'ออกจากระบบ', 
                                ] as $i=>$d){
                                    $cateActive = 0;
                            ?>
                                <a class="tab tab-main color-black h-color-04 <?php if($i==$cateActive)echo 'active'; ?>" 
                                data-tab="<?= $i ?>" href="#">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/tab-<?= $i+1 ?>.png" alt="Icon">
                                    </div>
                                    <h6><?= $d ?></h6>
                                </a>
                            <?php }?>
                        </div>

                    </div>

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="grids">
                            <div class="grid sm-100">
                                <table class="table helpdesk-table">
                                    <thead>
                                        <tr>
                                            <td style="min-width: 80px;">No.</td>
                                            <td>หัวข้อร้องเรียน</td>
                                            <td style="min-width:130px;">สถานะ</td>
                                            <td style="min-width:130px;">แก้ไขล่าสุด</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i = 0; $i < 10; $i++){?>
                                            <tr>
                                                <td class="fw-300">
                                                    #667643
                                                </td>
                                                <td style="text-align:left;">
                                                    ประกาศรายชื่อผู้ผ่านการตรวจสอบผู้ไม่มีผลประโยชน์ร่วมกับการจำหน่ายพัสดุ
                                                </td>
                                                <td>
                                                    <div class="tag-status tag-0<?= ($i % 4)+1; ?>"></div>
                                                </td>
                                                <td>
                                                    18/09/2563
                                                </td>
                                            </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                             </div>
                        </div>
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
