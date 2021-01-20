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
            [ 'url' => '#', 'display' => 'วิสัยทัศน์ และพันธกิจ' ],
            [ 'url' => '#', 'display' => 'ปรัชญา กนอ.' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-01">
        <div class="section-bpadding">
            <div class="container">
                <div class="grids ai-end">
                    <div class="grid xl-60 sm-100 mt-0">
                        <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                            ปรัชญา กนอ.
                        </h3>
                        <h4 class="h3 sm color-06 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                            ตลอดระยะเวลากว่า 47 ปีที่ผ่านมา มุ่งมั่นสร้างฐานการผลิต
                        </h4>
                        <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                            เพื่อรองรับการลงทุนด้านอุตสาหกรรม ผลักดันการลงทุน เพื่อพัฒนาเศรษฐกิจของประเทศ <br>
                            ให้เกิดความมั่นคงและเป็นศูนย์กลางที่สำคัญของเอเชีย
                        </h5>
                    </div>
                    <div class="grid xl-40 sm-100 mt-0">
                        <div class="tab-icons" data-aos="fade-up" data-aos-delay="450">
                            <?php
                                foreach([
                                    'ปรัชญา กนอ.', 'วิสัยทัศน์', 'วัฒนธรรมองค์กร', 'พันธกิจ', 
                                    'ระบบคุณค่า', 'ความสามารถพิเศษ'
                                ] as $i=>$d){
                            ?>
                                <a class="tab-icon <?php if($i==0)echo 'active'; ?>" data-slide="<?= $i ?>" href="#">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/philosophy-<?= $i+1 ?>.png" alt="Icon" />
                                        <img class="icon-active" src="public/assets/app/images/icon/philosophy-<?= $i+1 ?>-active.png" alt="Icon" />
                                    </div>
                                    <?= $d ?>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-container" data-aos="fade-up" data-aos-delay="600">
            <div class="slides">

                <div class="slide">
                    <div class="slide-phil slide-phil-1" style="background-image:url('public/assets/app/images/bg/philosophy-1.jpg');">
                        <div class="text-wrapper">
                            <div class="text-set">
                                <div class="title">I</div>
                                <div class="desc">ntegrity</div>
                            </div>
                            <div class="text-set">
                                <div class="title">EA</div>
                                <div class="desc">Excellence<br>Achievement</div>
                            </div>
                            <div class="text-set">
                                <div class="title">T</div>
                                <div class="desc">ributary</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <img class="img" src="public/assets/app/images/bg/philosophy-2.jpg" alt="Image Banner" />
                </div>
                
                <div class="slide">
                    <div class="slide-phil slide-phil-3" style="background-image:url('public/assets/app/images/bg/philosophy-3.jpg');">
                        <div class="text-container">
                            <div class="text-wrapper">
                                <div class="text-set">
                                    <div class="title">S</div>
                                    <div class="desc">Skilled <br>Management Team</div>
                                    <p>มีทักษะในการบริหารทีมงาน</p>
                                </div>
                                <div class="text-set">
                                    <div class="title">M</div>
                                    <div class="desc">Move Toward <br>Digital</div>
                                    <p>การขับเคลื่อนสู่ดิจิทัล</p>
                                </div>
                                <div class="text-set">
                                    <div class="title">A</div>
                                    <div class="desc">Able to Work <br>a New Way</div>
                                    <p>สามารถทำงานในรูปแบบใหม่</p>
                                </div>
                                <div class="text-set">
                                    <div class="title">R</div>
                                    <div class="desc">Ready to Change</div>
                                    <p>พร้อมปรับเปลี่ยน</p>
                                </div>
                                <div class="text-set">
                                    <div class="title">T</div>
                                    <div class="desc">Transformation <br>for a Future <br>Competitiveness</div>
                                    <p>เปลี่ยนแปลงเพื่อการแข่งขันในอนาคต</p>
                                </div>
                                <div class="text-set">
                                    <div class="title">ECO</div>
                                    <div class="desc">Econom & Ecology</div>
                                    <p>สู่ความสมดุลทั้งทางด้าน<br>เศรษฐกิจ และระบบนิเวศ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="slide-phil slide-phil-4" style="background-image:url('public/assets/app/images/bg/philosophy-4.jpg');">
                        <div class="icon-container">
                            <img src="public/assets/app/images/bg/philosophy-4-icon.png" alt="Philosophy Icon" />
                        </div>
                        <div class="text-container">
                            <div class="text-wrapper">
                                <div class="text-set">
                                    <div class="title">ต่อประเทศ</div>
                                    <div class="desc">
                                        ยกระดับความสามารถในการแข่งขันทางเศรษฐกิจ <br>
                                        โดยรวมได
                                    </div>
                                </div>
                                <div class="text-set">
                                    <div class="title">ต่อสังคม ชุมชน</div>
                                    <div class="desc">
                                        สร้างความเจริญเติบโตของภาคอุตสาหกรรม สังคม <br>
                                        ชุมชน อย่างมีส่วนร่วม
                                    </div>
                                </div>
                                <div class="text-set">
                                    <div class="title">ต่อผู้ประกอบการ (ลูกค้า)</div>
                                    <div class="desc">
                                        ส่งเสริมและผลักดันกลไกที่สนับสนุนการประกอบกิจการ <br>
                                        ให้สามารถแข่งขันได
                                    </div>
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <div class="text-set">
                                    <div class="title">ต่อผู้พัฒนานิคมอุตสาหกรรม (คู่ค้า)</div>
                                    <div class="desc">
                                        สร้างกลไกที่ส่งเสริม สนับสนุนและเอื้อต่อการพัฒนาและบริหาร <br>
                                        จัดการนิคมอุตสาหกรรมให้ดียิ่งขึ้น
                                    </div>
                                </div>
                                <div class="text-set">
                                    <div class="title">ต่อองค์กร</div>
                                    <div class="desc">
                                        พัฒนาองค์กรโดยมุ่งผลสัมฤทธิ์และมีธรรมาภิบาลพร้อมความ <br>
                                        มั่นคงทางด้านการเงินในระยะยาว
                                    </div>
                                </div>
                                <div class="text-set">
                                    <div class="title">ต่อพนักงาน</div>
                                    <div class="desc">
                                        พัฒนาศักยภาพของพนักงานสู่ความเป็นผู้เชี่ยวชาญ พร้อมทั้ง <br>
                                        พัฒนาระบบการบริหารบุคลากรที่มีคุณภาพ เพื่อสร้างแรงจูงใจ <br>
                                        และความผูกพันของบุคลากรที่มีต่อองค์กร
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="slide-phil slide-phil-5" style="background-image:url('public/assets/app/images/bg/philosophy-5.jpg');">
                        <div class="text-wrapper">
                            <div class="text-set">
                                <div class="title">ETHICS</div>
                                <div class="desc">
                                    มุ่งสร้างจริยธรรม คุณธรรม
                                    <br>และรับผิดชอบต่อสังคม และประเทศชาติ
                                </div>
                            </div>
                            <div class="text-set">
                                <div class="title">EDUCATION</div>
                                <div class="desc">
                                    มุ่งสร้างองค์ความรู้ให้แก่
                                    <br>ผู้ประกอบการ ชุมชน และสังคม
                                </div>
                            </div>
                            <div class="text-set">
                                <div class="title">ECONOMY</div>
                                <div class="desc">
                                    มุ่งสร้างความเจริญเติบโต
                                    <br>ทางเศรษฐกิจ
                                </div>
                            </div>
                            <div class="text-set">
                                <div class="title">EQUITABILITY</div>
                                <div class="desc">
                                    มุ่งกระจายความเจริญสู่ภูมิภาค
                                    <br>อย่างทั่วถึง เท่าเทียม
                                </div>
                            </div>
                            <div class="text-set">
                                <div class="title">ENVIRONMENT</div>
                                <div class="desc">
                                    มุ่งรักษาสิ่งแวดล้อม อาชีวอนามัย
                                    <br>พลังงาน และความปลอดภัย
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="slide-phil slide-phil-6" style="background-image:url('public/assets/app/images/bg/philosophy-6.jpg');">
                        <div class="text-wrapper" style="background-image:url('public/assets/app/images/bg/philosophy-6-bg.png');">
                            <div class="title">กนอ.</div>
                            <div class="desc">
                                มีความเชี่ยวชาญในการจัดตั้ง พัฒนา <br>
                                บริหารนิคมอุตสาหกรรมเชิงนิเวศ
                            </div>
                            <div class="sub">
                                พัฒนาและบริหารจัดการแบบมีส่วนร่วมและเป็นมิตรกับ <br>
                                สิ่งแวดล้อม สู่ความยั่งยืน(Green Strategy)
                            </div>
                            <p>
                                มุ่งน้นการพัฒนายกระดับนิคมอุตสาหกรรมทุกห่เป็นนิคมอุตสาหกรรมเชิงนิวศ การกำกับดูแล
                                จัดการสิ่งแวดล้อมของโรงานในนิคมอุตสาหกรรม/ทำเรืออุตสาหกรรมให้อยู่ในมาตรฐาน 
                                ไม่ก่อให้เกิดอุบัติเหตุอุบัติภัยร้ายแรงที่ส่งผลกระทบที่กิดแก่สังคม ชุมชน 
                                ตลอดจนดูแลคุณภาพชีวิตที่ดีให้แก่ชุมชนผ่านการมีส่วนร่วมของผู้มีส่วนได้ส่วนสียทุกภาคส่วน 
                                เพื่อยกระดับคุณภาพชีวิตให้แก่สังคม ชุมชนตลอดจนสร้างความเชื่อมั่นและการยอมรับต่อการบริหารจัดการนิคมอุตสาหกรรม/ 
                                ท่าเรืออุตสาหกรรมตามมาตรฐานสากล เช่น ISO 26000, GRI
                            </p>
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
