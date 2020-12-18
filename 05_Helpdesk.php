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
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>กระทู้ของฉัน</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-12.png" alt="Icon">
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

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="grids">
                            <div class="grid sm-100">
                                <div class="table-wrapper">
                                    <table class="table table-helpdesk">
                                        <thead>
                                            <tr>
                                                <th style="min-width:80px;">No.</th>
                                                <th style="min-width:200px;">หัวข้อร้องเรียน</th>
                                                <th style="min-width:130px;">สถานะ</th>
                                                <th style="min-width:130px;">แก้ไขล่าสุด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0; $i<10; $i++){?>
                                                <tr>
                                                    <td class="fw-300">
                                                        #667643
                                                    </td>
                                                    <td class="text-left">
                                                        ประกาศรายชื่อผู้ผ่านการตรวจสอบผู้ไม่มีผลประโยชน์ร่วมกับการจำหน่ายพัสดุ
                                                    </td>
                                                    <td>
                                                        <?php if($i%4==0){?>
                                                            <div class="tag-status bg-01 color-white">
                                                                รอดำเนินการ
                                                            </div>
                                                        <?php }else if($i%4==1){?>
                                                            <div class="tag-status bg-06 color-white">
                                                                รับเรื่อง
                                                            </div>
                                                        <?php }else if($i%4==2){?>
                                                            <div class="tag-status bg-04 color-white">
                                                                ปิดแล้ว
                                                            </div>
                                                        <?php }else if($i%4==3){?>
                                                            <div class="tag-status bg-black color-white">
                                                                ยกเลิก
                                                            </div>
                                                        <?php }?>
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
