<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .bt-dotted::before {
            content: '.............................';
            letter-spacing: 0.2rem; color:#8c51b8;
            font-weight:600; font-size:1.25rem;
        }
/* cccbb1 */
        .img-hex {
            clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%);
            position:relative; height:5.5rem; width:5.5rem;
        }
        .img-hex::before {
            content:''; position:absolute; width:101%; height:101%; 
            clip-path:polygon(50% 0%, 100% 24%, 100% 76%, 50% 100%, 0% 76%, 0% 24%); 
            background-color:#cccbb1;
        }

        .img-hex .img-bg {position:absolute; top:0; left:0; right:0; bottom:0; background-position:top center; background-repeat:no-repeat; }
        .diag-line {position:absolute; width:5rem; background:#cccbb1; height:1px;}
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>
    


    <section class="section-padding">
        <div class="container">
            <h3 class="xs text-center color-white">ผู้ช่วยผู้ว่าการ</h3>
            <div class="grids">
                <div class="grid lg-1-3">
                    <div class="d-flex fw-wrap ai-center jc-space-between">
                        <div class="img-hex">
                            <div class="img-bg" style="background-image:url('./public/assets/app/images/hero/person-1.jpg');"></div>
                        </div>
                        <div class="diag-line"></div>
                    </div>
                </div>
            </div>


        </div>

    </section>


    <section class="section-padding">
        <div class="container">
            <h3 class="xs text-center">ผู้อำนวยการ</h3>
            <div class="grids mt-2">
                <?php for($i=0; $i < 8; $i++){?>
                    <div class="grid lg-25 sm-50">
                        <h5 class="fw-400">นางสาวปราณี รัตนสุภา</h5>
                        <p class="fw-200">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                        <div class="d-flex fw-wrap jc-flex-start ai-center">
                            <img class="mr-2" src="./public/assets/app/images/icon/phone.png" alt="phone">
                            <p class="fw-200">02-253-2561 ต่อ 1410</p>
                        </div>
                    </div>
                <?php }?>

                <div class="grid lg-25 sm-50 bt-dotted">
                    <p class="fw-200">ผู้อำนวยการฝ่ายการตลาด</p>
                </div>

                <?php for($i=0; $i < 3; $i++){?>
                    <div class="grid lg-25 sm-50">
                        <h5 class="fw-400">นางสาวปราณี รัตนสุภา</h5>
                        <p class="fw-200">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                        <div class="d-flex fw-wrap jc-flex-start ai-center">
                            <img class="mr-2" src="./public/assets/app/images/icon/phone.png" alt="phone">
                            <p class="fw-200">02-253-2561 ต่อ 1410</p>
                        </div>
                    </div>
                <?php }?>

                <!-- No Phone -->
                <?php for($i=0; $i < 29; $i++){?>
                    <div class="grid lg-25 sm-50">
                        <h5 class="fw-400">นางสาวปราณี รัตนสุภา</h5>
                        <p class="fw-200">ผู้อำนวยการฝ่ายตรวจสอบภายใน</p>
                    </div>
                <?php }?>
                

            </div>

        </div>
    </section>
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
