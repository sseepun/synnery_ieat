<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'bg' => 'public/assets/app/images/bg/contract-bg.png',
            'title' => 'ติดต่อหน่วยงาน',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ.' ],
                [ 'url' => '#', 'display' => 'ติอต่อหน่วยงาน' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>
<style>
    .contract-mini{display:flex;justify-content:center;}
    .contract-mini .cardd{width:25%;margin-right:3rem;}
    .contract-mini .cardd:last-child{margin-right:0;}
    .contract-form-mini{display:flex;}
    .contract-form-mini .people-bg{width:50%;background-position: center;background-size:cover;
     background-image: url("public/assets/app/images/bg/contract-people.jpg");height:550px;}
    .contract-form-mini .form{width:30%;padding:2rem;}
    @media screen and (max-width:1199.98px){
        .contract-form-mini .form{width:45%;padding:2rem;}
    }
    @media screen and (max-width:991.98px){
        .contract-form-mini .form{width:50%;padding:2rem;}
    }
    @media screen and (max-width:767.98px){
        .contract-form-mini{flex-wrap: wrap;}
        .contract-form-mini .people-bg{width: 100%}
        .contract-form-mini .form{width: 100%}
    }
    .contract-form-mini .form .half{width:50%;}
    .contract-form-mini .form .half:last-child{margin-left:1rem}

    @media screen and (max-width:575.98px){
        .contract-mini .cardd{width:100%;margin:2rem 0;}
        .contract-mini{flex-wrap:wrap;}
    }

</style>
    <!-- Content goes here -->
    <section class="section bg-ffgray" style="padding: 2rem 0 6rem 0;">
        <div class="container">
            <div class="contact-01" style="padding:2rem 0 0 0;">
                <h4 style="text-align:center;">การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)</h4>
                <h2 style="text-align:center;">จังหวัดนครศรีธรรมราช</h2>
                <h4 style="text-align:center;">ช่องทางแจ้งเรื่องร้องเรียนการทุจริต /  ช่องทางรับฟังความคิดเห็น</h4>
                <div class="contact-card contract-mini">
                    <div class="cardd bg-white">
                        <div class="dicon">
                            <em class="zmdi zmdi-phone"></em>
                        </div>
                        <p style="text-align:center;"><span class="fw-600 mr-4">โทรศัพท์:</span>075 356069</p>
                        <p style="text-align:center;"><span class="fw-600 mr-4">โทรสาร:</span>075 356070</p>
                        <p style="text-align:center;"><span class="fw-600 mr-4">คอลเซ็นเตอร์:</span>02 2072700</p>
                    </div>
                    <div class="cardd bg-white">
                        <div class="dicon">
                            <em class="zmdi zmdi-pin"></em>
                        </div>
                        <p class="h4 color-04" style="text-align:center;">ที่ตั้งสำนักงาน</p>
                        <p style="text-align:center;">สำนักงานย่อย การนิคมอุตสาหกรรม</p>
                        <p style="text-align:center;">จังหวัดนครศรีธรรมราช</p>
                        <p style="text-align:center;">เลขที่ 86 หมู่ที่ 9, ต.นาเคียน อ.เมือง</p>
                        <p style="text-align:center;">จ.นครศรีธรรมราช  80000 </p>
                        <p class="color-04" style="text-align:center;"><a href="#">แผนที่ Google Map</a></p>
                    </div>
                    <div class="cardd bg-white">
                        <div class="dicon">
                            <em class="zmdi zmdi-email"></em>
                        </div>
                        <p class="h4 color-04" style="text-align:center;">อีเมล์</p>
                        <p class="h5 fw-600" style="text-align:center;">แผนกบริการลูกค้า</p>
                        <p style="text-align:center;">contact@ieat.mail.go.th</p>
                        <p class="h5 fw-600" style="text-align:center;">แผนกการลงทุน</p>
                        <p style="text-align:center;">investment.1@ieat.mail.go.th</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-white">
        <div class="contract-form-mini">
            <div class="people-bg">
            </div>
            <div class="form">
                <div class="ss-title">
                    <span class="h3 fw-600 color-04">แบบฟอร์มการติดต่อ</span>
                </div>
                <div style="display:flex;">
                    <div class="half">
                        <p class="py-2 fw-600">เลือกหน่วยงาน</p>
                        <select name="department" class="sm bg-white w-100" required="">
                            <option value="">&nbsp;</option>
                            <option value="1">หน่วยงานที่ 1</option>
                            <option value="2">หน่วยงานที่ 2</option>
                            <option value="3">หน่วยงานที่ 3</option>
                        </select>
                        <p class="py-2 fw-600">ชื้อ</p>
                        <input type="text" name="fname" class="sm bg-white w-100" required="" title="fName">
                        <p class="py-2 fw-600">อีเมล</p>
                        <input type="email" name="email" class="sm bg-white w-100" required="" title="Email">
                    </div>
                    <div class="half">
                        <p class="py-2 fw-600">หัวข้อเรื่อง:</p>
                        <input type="text" name="subject" class="sm bg-white w-100" required="" title="Subject">
                        <p class="py-2 fw-600">นามสกุล</p>
                        <input type="text" name="lname" class="sm bg-white w-100" required="" title="lname">
                        <p class="py-2 fw-600">หมายเลขติดต่อ</p>
                        <input type="Phone" name="Phone" class="sm bg-white w-100" required="" title="Phone">
                    </div>
                </div>
                <p class="py-2 fw-600">ข้อความ</p>
                <textarea name="message" class="sm bg-white w-100" rows="7" required="" title="Message"></textarea>
                <img class="img" src="public/assets/app/images/icon/capcha2.png" alt="Capcha Image">
                <div class="btns mt-4">
                    <button type="submit" class="btn btn-action mr-1">
                        <span>ส่งข้อความ</span>
                    </button>
                    <button type="reset" class="btn btn-action btn-action-01">
                        ล้างข้อมูล
                    </button>
                </div>
            </div>
        </div>
    </section>
    <img class="mb-4 mt-4" src="public/assets/app/images/bg/googlemap.jpg">
    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
