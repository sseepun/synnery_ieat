<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>

        .text-wrapper {padding: 0 20% 0 1.5rem;}
        .bg-light-gray { background-color: #f1f1f1; }
        /* From .ss-img .date */
        .ss-card-custom {position:relative; padding: 2rem 4.5rem;}
        .date{
            display:block; position:absolute; top:0; left:0; text-align:center; padding:.25rem .3125rem;
            background-color:#75ced2; color:#fff;
        }
        .date .d{
            border-bottom:1px solid transparent; font-size:2rem; font-weight:400; line-height:.9;
        }
        .date .m-y{margin:.25rem 0 0 0; font-weight:100; font-size:1rem;}
        .ss-card-custom .side-container {position:absolute; top:0; right:0; width:22rem;  background-color: #573f77; height:100%; clip-path: polygon(60% 0, 100% 0, 100% 100%, 60% 100%, 26% 50%);;}
        .ss-card-custom .side-container .text-container {position:absolute; top:calc(50% - 5rem); right:0%; text-align:right; padding:1.5rem;}
        
        @media screen and (max-width:1199.98px){
            .ss-card-custom{ padding: 2rem 1.25rem 2rem 4rem;  }
            .ss-card-custom .side-container{position:relative; margin-top: 2rem; clip-path:none; width:100%;}
            .ss-card-custom .side-container .text-container {position:relative; text-align:left;}
            .text-wrapper{padding:0 0 0 1.5rem;;}
        }
        .wrapper {position:relative; padding: .8125rem 1.5rem .8125rem 4rem;}

        .job-wrapper .grids > .grid:nth-child(2n+1) {background-color:#f1f1f1;}
        .job-wrapper .grids > .grid:nth-child(2n) {background-color:#fff;}


        @media screen and (max-width: 767.98px){
            .wrapper {position:relative; padding: .3125rem 1.5rem .3125rem 4rem;}
        }

    
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'ร่วมงา' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/job-1.jpg"></div>
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                ร่วมงานกับเรา
            </h2>
            <h3 class="sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                ทุกความสำเร็จมาจากทีมที่ยิ่งใหญ่
            </h3>
            <h5 class="color-black xs-no-br" data-aos="fade-up" data-aos-delay="300">
                มาร่วมเป็นส่วนหนึ่งกับเรา กนอ.
            </h5>
 
            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">

                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <?php
                            $cateActive = 6;
                            $cateChildren = true;
                            include('component/category-tab.php');
                        ?>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="job-wrapper">

                            <div class="grids">
                                <div class="grid sm-100">
                                    <div class="ss-card-custom">
                                        <div>
                                            <h5 class="fw-400">ตำแหน่ง</h5>
                                            <h3 class="xs color-04">Mechanical Project Manager / ผู้จัดการโครงการเครื่องกล 2 อัตรา</h3>
                                        </div>
                                        <div>
                                            <h5 class="fw-400">จำนวนที่รับสมัคร</h5>
                                        </div>
                                        <div>
                                            <h5 class="fw-400">คุณสมบัติที่จำเป็น</h5>
                                            <ul>
                                                <li>เพศชาย อายุ 35 ปี ขึ้นไป</li>
                                                <li>วุฒิการศึกษา ปริญญาตรี วิศวกรเครื่องกล</li>
                                                <li>มีประสบการณ์ในการทำงานด้านเครื่องกล ไม่ต่ำกว่า 10 ปี</li>
                                                <li>สามารถถอดแบบและประมาณราคาได้</li>
                                                <li>มีทักษาะในการบริการโครงการและบริหารเวลาได้เป็นอย่างดี</li>
                                                <li>สามารถแก้ไขปัญหาที่เกิดขึ้นได้อย่างมีประสิทธิภาพ</li>
                                                <li>มีใบอนุญาตประกอบวิชาชีพ (จะได้รับพิจารณาเป็นพิเศษ)</li>
                                                <li>สามารถควบคุมดูแลการดำเนินงานของโครงการทุกโครงการให้เป็นไปตามแผนและระยะเวลาที่กำหนด</li>
                                                <li>ให้คำแนะนำและแก้ปัญหาอย่างสร้างสรรค์เกี่ยวกับปัญหา / ข้อบกพร่องที่เกิดขึ้น</li>
                                                <li>ดูแลและให้คำปรึกษาพนักงานและประสานงานผู้มีส่วนร่วม</li>
                                                <li>มีทักษาะในการติดต่อสื่อสารและมีมนุษยสัมพันธ์ที่ดี</li>
                                            </ul>
                                        </div>



                                        <div>
                                            <h5 class="fw-400">หน้าที่และความรับผิดชอบ:</h5>
                                            <div class="text-wrapper">
                                                <p class="fw-200">ควมคุมดูแลโครงการที่ได้รับมอบหมายให้สามสามารถปฏิบัติงานได้อย่างมีประสิทธิภาพ ตั้งแต่การบริหารจัดการบุคคลปรนะจำโครงการ การบริหารจัดการในงาน งบประมาณค่าใช้จ่าย รวมถึงวัสดุอุปกรณ์และแรงงานที่ต้องใช้ในโครงการให้เป็นไปตามแผนที่กำหนด</p>
                                            </div>
                                        </div>


                                        <div class="btns" data-aos="fade-up" data-aos-delay="0">
                                            <a class="btn btn-action" href="#">
                                                <span>สมัครตำแหน่งนี้</span>
                                            </a>
                                        </div>
                                        <div class="date">
                                            <div class="d">0<?= $i+1 ?></div>
                                            <div class="m-y">09.2563</div>
                                        </div>

                                        <div class="side-container">
                                            <div class="text-container">
                                                <h5 class="fw-400 color-white">ติดต่อ</h5>
                                                <p class="color-03 mt-1">
                                                    ฝ่ายทรัพยากรบุคคล <br>
                                                    02 - 1234567<br>
                                                    Recruit@ieat.go.th
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <?php for($i=0; $i < 6; $i++){?>
                                    <div class="grid sm-100 mt-0">
                                        <div class="wrapper">
                                            <div class="d-flex ai-center jc-space-between">
                                                <p class="fw-200">ช่างเทคนิค-สัญญาจ้าง (ประจำโครงการในกรุงเทพ)</p>
                                                <div class="d-flex ai-center">
                                                    <p class="fw-200 mr-3">จำนวนที่รับสมัคร <span class="color-03 fw-400 mx-2">10</span> ตำแหน่ง</p>
                                                    <img style="cursor:pointer;" src="./public/assets/app/images/icon/icon-plus.png" alt="icon-plus">
                                                </div>
                                            </div>
                                            <div class="date">
                                                <div class="d">0<?= $i+1 ?></div>
                                                <div class="m-y">09.2563</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
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
