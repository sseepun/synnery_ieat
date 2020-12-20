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
            [ 'url' => '#', 'display' => 'ผังองค์กร' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg" style="background-image:url('public/assets/app/images/bg/orgchart-2.jpg');">
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                ผังองค์กร
            </h2>
            <h3 class="sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                องค์กรหลักที่มีส่วนร่วมในการขับเคลื่อนเศรษฐกิจ 
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ของประเทศโดยเน้นภาคอุตสาหกรรมและบริการสู่อนาคตที่ยั่งยืน
            </h5>
            <div class="ss-box mt-5" data-aos="fade-up" data-aos-delay="450">
                <img class="img" src="public/assets/app/images/bg/orgchart-1.jpg" alt="Org Chart" />
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
