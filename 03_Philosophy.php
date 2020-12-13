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

    <section class="section-bpadding">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="0">
                ปรัชญา กนอ.
            </h2>
            <h3 class="sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                ตลอดระยะเวลากว่า 47 ปีที่ผ่านมา มุ่งมั่นสร้างฐานการผลิต
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                เพื่อรองรับการลงทุนด้านอุตสาหกรรม ผลักดันการลงทุน เพื่อพัฒนาเศรษฐกิจของประเทศ <br>
                ให้เกิดความมั่นคงและเป็นศูนย์กลางที่สำคัญของเอเชีย
            </h5>

        </div>
    </section>

    <img class="img" src="public/assets/app/images/page/03_Philosophy_1.jpg" alt="Page" />

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
