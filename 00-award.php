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
            [ 'url' => '#', 'display' => 'รางวัลแห่งความภูมิใจ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-03 section-bpadding img-fill lazy-bg" data-src="public/assets/app/images/bg/29.jpg">
        <div class="container">
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                รางวัลแห่งความภูมิใจ
            </h3>
            <h4 class="h3 sm color-06 fw-300" data-aos="fade-up" data-aos-delay="150">
                ดำเนินกิจการด้วยความมุ่งมั่นและพัฒนาศักยภาพในทุกๆด้าน 
            </h4>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                เพื่อการเติบโตทางธุรกิจสังคมและสิ่งแวดล้อมอย่างยั่งยืน รางวัลแห่งความสำเร็จต่างๆ <br>
                ที่ กนอ. ได้รับนับว่าเป็นเครื่องการันตีถึงการดำเนินการของบริษัทที่ดีและมีการบูรณาการ <br>
                อีกทั้งพัฒนาอย่างต่อเนื่อง
            </h5>

            <div class="slide-container" data-aos="fade-up" data-aos-delay="450">
                <div class="slide-wrapper">
                    <div class="slides">
                        <?php for($i=0; $i<13; $i++){?>
                            <div class="slide">
                                <div class="wrapper">
                                    <h5 class="h2 color-gradient-01">
                                        พ.ศ.<?= 2551+$i ?>
                                    </h5>
                                    <ul class="ss-list dot-dark dot-h3-xs">
                                        <li>
                                            <h5 class="h3 xs fw-300">
                                                รางวัลชมเชย 
                                            </h5>
                                            <h6 class="fw-600 color-06">
                                                รัฐวิสาหกิจที่มีการพัฒนาสู่ความเป็นเลิศด้านคุณธรรมความโปร่งใสในการดำเนินงาน 
                                                <span class="color-black">
                                                    (Transparency)
                                                </span>
                                            </h6>
                                            <p>
                                                จากสำนักงานป้องกันปละปราบปรามการทุจริตแห่งชาติ (ป.ป.ช.)
                                            </p>
                                        </li>
                                        <li>
                                            <h5 class="h3 xs fw-300">
                                                รางวัลชมเชย 
                                            </h5>
                                            <h6 class="fw-600 color-06">
                                                ด้านความปลอดจากการทุจริตในการปฏิบัติงาน 
                                                <span class="color-black">
                                                    (Corruption - Free)
                                                </span>
                                            </h6>
                                            <p>
                                                จากสำนักงานป้องกันปละปราบปรามการทุจริตแห่งชาติ(ป.ป.ช.)
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="arrows"></div>
                </div>
                <div class="awards" data-aos="fade-up" data-aos-delay="600">
                    <div class="wrapper">
                        <?php for($i=0; $i<13; $i++){?>
                            <div class="award" style="z-index:<?= 13-$i ?>;">
                                <div class="img-container">
                                    <div class="img-wrapper">
                                        <img src="public/assets/app/images/hero/award-<?= $i%2+1 ?>.png" alt="Award" />
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div class="dots"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
