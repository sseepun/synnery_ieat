<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        .slide-container .slide .text-container {position: absolute; top: 25%; left: 25%;}
       
        .banner-01 .slick-dots{
            position: absolute; bottom: 2rem;
        }
        .banner-01 .slick-dots button{
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            border-radius: 0; border-color:#8c6ab2; background-color: #8c6ab2;
        }
        .banner-01 .slick-dots .slick-active button{
            font-size: 1.5625rem; width:3rem; height: 2.5rem; color: #fff;
            border-color:#4b326e; background-color: #4b326e;
        }
        table.table-download-02 td {background:#fff; border:none; }

        .call-04 .img-bg{
            position: absolute; z-index: -1; background-image: url('public/assets/app/images/bg/36.jpg');
            top:0; right:0; bottom:0; background-size: cover; 
            background-position: center; background-repeat: no-repeat; width:70vw; 
        }
        
        .slide-container-01 .arrows {
            position: absolute; bottom: 0; right: 0;
        }

        
        .call-04 .content-wrapper-left h5.title, .call-04 .content-wrapper-right h5.title{
            font-size: 3rem; font-weight: 600;
        }
        .call-04 .content-wrapper-left{
            position:relative; padding: 2rem 2.5rem 2rem 0;
        }
        .call-04 .content-wrapper-right{
            position:relative; padding: 2rem 0 2rem 2.5rem;
        }
        .content-01{ height: 45rem;}
        @media screen and (max-width: 1199.98px){
            .call-04 .content-wrapper-left h5.title, .call-04 .content-wrapper-right h5.title{
                font-size: 2.5rem; font-weight: 600;
            }
        }
        @media screen and (max-width: 991.98px){
            .slide-container .slide .text-container{left: 15%;}
            .ss-date{padding: 0 0 0 3rem;}
            .call-04 .img-bg{
                left: calc(50% - 50vw); right: calc(50% - 50vw); width: 100vw;
            }
            .call-04 .content-wrapper-right, .call-04 .content-wrapper-left{
                padding: 2rem 0;
            }
        }
        @media screen and (max-width: 767.98px){
            .banner-01 .slick-dots .slick-active button{
                width: 2rem; height: 1.875rem; font-size: 1rem;
            }
        }
        @media screen and (max-width: 575.98px){
            .content-01{ height: 37.5rem;}
            .slide-container .slide .text-container{left: 10%;}
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav-demo.php'); ?>

    <section class="banner-01">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<2; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/05.jpg');"></div>
                            <div class="container">
                                <div class="text-container color-01">
                                    <h1 class="animate" style="--delay:.75s;">
                                        รอยยิ้มของทุกคนในชุมชน
                                    </h1>
                                    <h5 class="animate" style="--delay:.9s;">
                                        คือที่สุดของความภาคภูมิใจของการนิคมอุตสหกรรมแห่งประเทศไทย
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/02.jpg');"></div>
                            <div class="container">
                            
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="h1 text-center color-04" data-aos="fade-up" data-aos-delay="0">
                กนอ.อัพเดท
            </div>
            <h5 class="text-center fw-200 color-gray sm-no-br" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดคสามสามารถของคุรและธุรกิจด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดท ต่างๆ <br> 
                เกี่ยวกับ กนอ. และนิคมอุตสาหกรรมในประเทศไทย <span class="color-04 fw-600">ได้ที่นี่</span>
            </h5>

            <div class="tab-container tab-container-04 tab-local" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="0">
                <div class="tabs jc-center">
                    <?php foreach(['ข่าวประชาสัมพันธ์', 'ข่าวสารการลงทุน', 'สื่อมัลติมีเดีย', 'เอกสารเผยแพร่', 'ปฏิทินกิจกรรม', 'สถานการณ์ปัจจุบัน'] as $i=>$d){?>
                        <a class="tab color-black h-color-04 <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>" href="#">
                            <p class="fw-500"><?= $d ?></p>
                        </a>
                    <?php }?>
                </div>
            </div>
            <style>
            </style>
            <section class="tab-container tab-container-04 tab-local-target">
                <div class="tab-contents" style="padding: 2rem 0;">
                        <div class="tab-content active" data-tab="0">
                            <div class="slide-container-01" data-aos="fade-up" data-aos-delay="0">
                                <div class="slides">
                                    <?php for($i=0; $i<8;$i++){?>
                                        <div class="slide">
                                            <div class="ss-card ss-card-01" style="padding: 0 .5rem;">
                                                <a class="ss-img" href="#">
                                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/content/01.jpg"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <div class="d">04</div>
                                                        <div class="m-y">09.2563</div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="ss-box-shadow"></div>
                                                    <div class="text-wrapper">
                                                        <a class="title h6 fw-600" href="#">
                                                            กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                                                            สายสื่อสารลงดิน วางระบบ 5G
                                                        </a>
                                                        <p class="desc mt-1">
                                                            บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                                            รองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุมพื้นที่นิคมอุตสาห
                                                            กรรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67  
                                                        </p>
                                                        <div class="ss-stat">
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-eye"></em>
                                                                </div> 112
                                                            </div>
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-share"></em>
                                                                </div> 20
                                                            </div>
                                                        </div>
                                                        <div class="ss-tag">
                                                            <div class="text">TAG :</div> 
                                                            <div class="tags">
                                                                <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                                                <a class="tag" href="#">กนอ.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="text-center position-relative mt-5">
                                    <a class="btn btn-action" href="#">
                                        <span>ดูทั้งหมด</span>
                                    </a>
                                    <div class="arrows">
                                        <div class="btn btn-icon btn-hex bg-04 color-white prev-arrow" style="line-height: 1.125rem;">
                                            <em class="zmdi zmdi-chevron-left"></em>
                                        </div>
                                        <div class="btn btn-icon btn-hex bg-04 color-white next-arrow ml-3" style="line-height: 1.125rem;">
                                            <em class="zmdi zmdi-chevron-right"></em>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>

            <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
            </div>
        </div>
    </section>

    <section class="content-01 section-padding">
        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/06.jpg"></div>
        <div class="container">
            <div class="text-right">                   
                <div class="h1 color-04" data-aos="fade-up" data-aos-delay="0">
                    IEAT 4.0 : Smart Eco Industrial Estate
                </div>
                <h5 class="color-white fw-200" data-aos="fade-up" data-aos-delay="150">
                    โครงการพัฒนานิคมอุตสาหกรรมโรงงานอุตสาหกรรม <br>
                    สู่การเป็นนิคมอุตสาหกรรมเชิงนิเวศอัจฉริยะ
                </h5>
            </div>
        </div>
    </section>

    <div class="popup-container" data-popup="0">
        <div class="wrapper">
            <div class="close-filter btn-popup-toggle" data-popup="0"></div>
            <div class="popup-box">
                <div class="box-header">
                    <img class="pin" src="public/assets/app/images/icon/pin.png" alt="Pin" />
                    <h4 class="text-center position-relative">
                        08. <span class="fw-300">นิคมอุตสาหกรรมที เอฟ ดี</span>
                    </h4>
                    <a class="close-btn btn-popup-toggle" data-popup="0" href="#">
                        <em class="zmdi zmdi-close"></em>
                    </a>
                </div>
                <div class="box-body">
                    <div class="contents">
                        <div class="content">
                            <div class="img-fill fit" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                        </div>
                        <div class="content">
                            <div class="table-wrapper">
                                <table class="table table-detail">
                                    <tbody>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">ผู้อำนวยการนิคมฯ</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>นายสรายุทธ์ ประทีปแก้ว</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">ผู้พัฒนานิคม</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>บริษัท เจซีเค อินเตอร์เนชั่นแนล จำกัด (มหาชน)</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">โทรศัพท์</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    0 2676 4031-6
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">โทรสาร</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    0 2676 4038
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fw-600 ws-nowrap">E-mail</td>
                                            <td><span class="fw-500 mx-2">:</span></td>
                                            <td>
                                                <a class="color-black h-color-04" href="#">
                                                    industrial@tfd-factory.com
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btns mt-2">
                                <a class="btn btn-action" href="#">
                                    <span>อ่านรายละเอียด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-btns">
                    <a class="box-btn" href="#">
                        <em class="zmdi zmdi-swap-alt"></em> View Google Map
                    </a>
                    <a class="box-btn" href="#">
                        <em class="zmdi zmdi-swap-alt"></em> View Graphic Map
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
    </style>
    <div class="call-04 section-padding py-0">
        <div class="container">
            <div class="grids no-gap">
                <div class="grid lg-70 sm-100">
                    <div class="content-wrapper-left">
                        <div class="img-bg"></div>
                        <div class="title d-flex ai-center">
                            <img class="mr-1" style="width: 2.25rem; height: 2.25rem;" src="public/assets/app/images/icon/09.png" alt="">
                            <h5 class="title color-black fw-600 color-black">ประกาศจัดซื้อจัดจ้าง</h5>
                        </div>
                        <table class="table table-download-02 mt-3">
                            <tbody>
                                <?php for($i=0; $i<4; $i++){?>
                                    <tr class="bg-white">
                                        <td style="padding:0; width: 3rem; height: 3.7rem;">
                                            <div class="ss-date" style="height:100%;">
                                                <div class="date bg-0<?= ($i%2) == 0 ? '4': '8'; ?>" style="position:relative; left:0; height:100%;">
                                                    <div class="d">04</div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pt-2 pb-1 pr-2">
                                            <p class="text-xl">
                                                ประกาศการนิคมอุตสาหกรรมแห่งประเทศไทย ที่ 26/2564 เรื่อง ประกวดราคาจ้างโครงการจัด...
                                            </p>
                                        </td>
                                        <td class="d-flex ai-center px-2 py-1">
                                            <img src="public/assets/app/images/file/pdf.png" alt="" class="file-icon mr-1">
                                            <a class="btn" href="#">
                                                ดาวน์โหลด
                                                <em class="zmdi zmdi-download"></em>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>

                        <div class="btns text-right">
                            <a class="btn btn-action" href="#">
                                <span>ดูทั้งหมด</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid lg-30 sm-100">
                    <div class="content-wrapper-right" style="">
                        <div class="d-flex ai-center">
                            <img class="mr-1" style="width: 2.25rem; height: 2.25rem;" src="public/assets/app/images/icon/11.png" alt="">
                            <h5 class="title color-black fw-600 color-black">ประกาศรับสมัครงาน</h5>
                        </div>
                        <div class="table-wrapper mt-3 border-bottom bcolor-sgray pb-0" style="border-right: 1px solid transparent;">
                            <table class="table table-download-2">
                                <tbody>
                                    <?php for($i=0; $i<4; $i++){?>
                                        <tr>
                                            <td class="px-0 py-0" style="width: 3rem;">
                                                <div class="ss-date">
                                                    <div class="date bg-0<?= ($i%2) == 0 ? '4': '8'; ?>" style="left:0;">
                                                        <div class="d">04</div>
                                                        <div class="m-y">09.2563</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pt-2 pb-1 pr-2">
                                                <p class="text-xl">
                                                    วิศวรซ่อมบำรุง
                                                </p>
                                            </td>
                                            <td class="text-center" style="width: 5rem;">
                                                <img src="public/assets/app/images/icon/10.png" alt="" class="file-icon mr-1">
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="btns text-right">
                            <a class="btn btn-action" href="#">
                                <span>ดูทั้งหมด</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('include/footer-demo.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
