<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>


    <style>
        .temp-01 .grid > .wrapper {position:relative; height: 33vh;}
        .temp-01 .wrapper .img-bg {position:absolute; z-index:-1; top:0; left:0; right:0; bottom:0; background-position:center; background-repeat:no-repeat; background-size:cover;}
        .color-01 {color:#602774 !important;}
        .temp-01 .btn-container {margin:.375rem 0 0 0; display:flex; justify-content:flex-start; }
        .temp-01 .btn-container .btn {
            display:block; text-align:center; line-height: 1.625rem;
            font-size: .9375rem;
            color:#fff;
            width: 2.25rem; height:2.5rem;
            background-color: #4b326e;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
    </style>

    <section class="temp-01">
        <div class="grids no-gap">
            <div class="grid sm-100 md-100 lg-50">
                <div class="wrapper">
                    <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/01.jpg')"></div>
                </div>
            </div>
            <div class="grid sm-100 md-100 lg-50">
                <div class="wrapper d-flex ai-center jc-flex-start">
                    <div class="px-5 py-4">
                        <h1 class="color-01 fw-600 mb-0">ประกาศจัดซื้อจัดจ้าง</h1>
                        <p class="text-sm fw-400 mt-1">เพิ่มขีดความสามารถของคุณด้วยการอัพเดทข่าวสาร
                            <br>
                            พร้อมกันทุกกระแสความเคลื่อนไหว
                        </p>
                        <div class="btn-container">
                            <div class="btn"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <div class="img-bg" style="background-image:url('./public/assets/app/images/bg/02.jpg')"></div>
                </div>
            </div>
        </div>
    </section>


    <style>
        .content-02 {position:relative;}
        .content-02 > .wrapper {position:relative; padding:4rem 0 0 0;}
        .content-02 .img-bg-container {
            position:absolute;
            top:0; left:0;
            width:100%; height:100%;
            z-index:-1;
        }
        .content-02 .img-bg-container .img-bg {width:100%; height:100%; background-size:cover; background-position:center;}
        .content-02 .grids .grid {position:relative;}
        .content-02 .grids .grid > img {width:100%; height:auto; 
            transform: translateY(1.5rem);
            }
        .content-02 .grids .grid::after {content:'นิคมอุตสาหรกรรมบางซัน';width:100%; position:relative; bottom: -2rem; left:0; }

    </style>
    <section class="content-02 pt-0">
        <div class="wrapper">
            <div class="img-bg-container">
                <div class="img-bg" style="background-image:url('./public/assets/app/images/banner/02.jpg');"></div>
            </div>
            <div class="container">
                <div class="text-center color-white">
                    <h1>ทำเลทอง</h1>
                    <p class="fw-100">ตอบโจทย์ที่ใช่... ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ</p>
                </div>
                

                <div class="grids no-gap mt-5">
                    <?php for($i=3; $i < 8; $i++){?>
                        <div class="grid text-center md-50 lg-20">
                            <img src="./public/assets/app/images/bg/0<?php echo $i;?>.jpg" alt="">

                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .btn-container {display:flex; justify-content:center;}
        .btn-container > .btn-wrapper { margin: 4rem 0 0 0; width: 10rem; height:3rem; background-color: #6cdded;}
        .btn-container .btn {width: 90%; height:100%; background-color:#3d3d3d; line-height:2.25rem;  clip-path: polygon(90% 0, 100% 50%, 90% 100%, 0 100%, 0 0);}
    </style>
    <section class="content-02 pt-0">
        <div class="container">
            <div class="grids no-gap">
                <?php for($i=8; $i < 13; $i++){?>
                    <div class="grid text-center md-50 lg-20">
                        <img src="./public/assets/app/images/bg/<?php echo sprintf('%02d', $i);?>.jpg" alt="">
                    </div>
                <?php }?>
            </div>

            <div class="btn-container">
                <div class="btn-wrapper">
                    <div class="btn color-white">ดูทั้งหมด</div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding section-bg call-01" style="background-image:url('./public/assets/app/images/banner/03.jpg'); background-size:cover; background-position:center;">


    </section>



    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
