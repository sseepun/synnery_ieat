<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>

        .color-07 {color:#9053b2; }
    </style>

</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ ' ],
            [ 'url' => '#', 'display' => 'ผังองค์กร ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-padding section-bg" style="background-image:url('./public/assets/app/images/bg/orgchart-2.jpg');">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="0">ผังองค์กร</h2>
            <h3 class="sm color-07 fw-200" data-aos="fade-up" data-aos-delay="150">องค์กรหลักที่มีส่วนร่วมในการขับเคลื่อนเศรษฐกิจ</h3>
            <h5 class="fw-200" data-aos="fade-up" data-aos-delay="300">ของประเทศโดยเน้นภาคอุตสาหกรรมและบริการสู่อนาคตที่ยั่งยืน</h5>        
            <div class="section-padding" data-aos="fade-up" data-aos-delay="450">
                <img class="img pt-5-4" src="public/assets/app/images/bg/orgchart-1.jpg" alt="Page" />
            </div>
        
        </div>
    </section>
    

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
