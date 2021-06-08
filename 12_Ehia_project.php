<!DOCTYPE html>
<html lang="th">

<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<style>
    .banner-01 .slide.slick-current>.wrapper {
        clip-path: none;
    }
    .section-bpadding {
        padding: 2.25rem 0 0 0;
    }
    a:hover{color:#fff;}

    hr {
    margin-top: 2rem;
    margin-bottom: 2rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

    .btn-download{color:#3DB9B2;}
    .btn-download > em {
    display: inline-block;
    width: 1.375rem;
    height: 1.375rem;
    border: 2.5px solid transparent;
    font-size: 1rem;
    line-height: 1.1875rem;
    transform: rotate(90deg);
    text-align: center;
    margin: 0 0 0 .25rem;
    transition: border-color .25s, background .25s, color .25s;
}
.btn-download > em {
    border-color: #3DB9B2;
}
</style>

<body class="loading" style="background-color:#EDEEEE;">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ย้อนกลับไปที่หน้ารวมข่าว' ],
            [ 'url' => '#', 'display' => 'ข้อมูลโครงการ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="banner-01">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <div class="slide">
                    <div class="wrapper">
                        <div class="fit img-fill"
                            style="background-image:url('public/assets/app/images/ehia/Ehia-hero-project.jpg');background-position:top center;
                            background-size:cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ehia-accordion-03 section-bpadding section-bg-hero">
        <div class="container">
            <div class="mt--5">
                <div class="grids">
                    <div class="grid xl-100 lg-100 sm-100 m-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-contents">
                            <div class="tab-contents">
                                <div class="ehia-accordion-container active <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">โครงการกำจัดกากอุตสาหกรรมและหน่วยผลิตไฟฟ้า<br>
                                        ของบริษัท อนุรักษ์พลังงานซิเมนต์ไทย จำกัด
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                        <div class="icon">
                                            <em class="active zmdi zmdi-chevron-down"></em>
                                            <em class="inactive zmdi zmdi-chevron-up"></em>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                    การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) ซึ่งเป็นหน่วยงานของรัฐ ที่มีอำนาจพิจารณาอนุญาตโครงการ จะต้องดำเนินการจัดประชุมรับฟัง
                                                    ความคิดเห็นของประชาชนและผู้มีส่วนได้เสียตามประกาศกระทรวงทรัพยากรธรรมชาติและสิ่งแวด
                                                    ล้อม เรื่อง กำหนดหลักเกณฑ์ วิธีการ ระเบียบ
                                                    ปฏิบัติ และแนวทางในการในการจัดทำรายงานการวิเคราะห์ผลกระทบสิ่งแวดล้อมสำหรับโครงการหรือกิจการ
                                                    ที่อาจก่อให้เกิดผลกระทบต่อชุมชน
                                                    อย่างรุนแรงทั้งทางด้านคุณภาพสิ่งแวดล้อม ทรัพยากรธรรมชาติและสุขภาพ พ.ศ. 2560
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">ประกาศการจัดรับฟังความคิดเห็น 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                        <div class="icon">
                                            <em class="active zmdi zmdi-chevron-down"></em>
                                            <em class="inactive zmdi zmdi-chevron-up"></em>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">สรุปรายละเอียดโครงการ 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">รายงานการประเมินผลกระทบสิ่งแวดล้อม 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                        <div class="icon">
                                            <em class="active zmdi zmdi-chevron-down"></em>
                                            <em class="inactive zmdi zmdi-chevron-up"></em>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">คณะกรรมการรับฟังความคิดเห็น 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>

                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">กำหนดการรับฟังความคิดเห็น 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container active <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">การลงทะเบียนรับฟังความคิดเห็น 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                            <p class="h4 lg fw-300 color-gray mt-3 sm-no-br text-center aos-init aos-animate">
                                            ผู้ที่สนใจสามารถ<span class="color-02 fw-500">ลงทะเบียนล่วงหน้า</span>เพื่อเข้าร่วมเวทีรับฟังความคิดเห็นได้ที่
                                            </p>
                                            <h4 class="h4 lg text-center mt-2">ลงทะเบียนเข้าร่วม</h4>

                                            <div class="btns text-center mt-3" data-aos="fade-up" data-aos-delay="0">
                                                <a class="btn btn-action3" href="#">
                                                    <span>Click Link </span>
                                                </a>
                                            </div>
                                            
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">การตรวจสอบรายชื่อผู้ลงทะเบียนล่วงหน้า 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">การแสดงความเห็นออนไลน์ 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">รายงานการรับฟังความคิดเห็น 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                
                                <div class="ehia-accordion-container <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                        <div class=" title h3 sm fw-400 color-02 ">ผลการพิจารณาโครงการ 
                                        </div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray mt-3 sm-no-br aos-init aos-animate">
                                                     
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>

    <section class="section-bpadding">
        <div class="container" data-aos="fade-up" data-aos-delay="400">
            <div class="mt-5 pt-1">
                <div class="content-footer">
                    <div class="content-row">
                        <div class="text-center">
                            <a class="btn-icon btn-hex btn-social tw" href="#">
                                <em class="zmdi zmdi-twitter"></em>
                            </a>
                            <p><strong>20</strong></p>
                        </div>
                        <div class="text-center">
                            <a class="btn-icon btn-hex btn-social fb" href="#">
                                <em class="zmdi zmdi-facebook"></em>
                            </a>
                            <p><strong>12</strong></p>
                        </div>
                        <!-- <div class="text-center">
                            <a class="btn-icon btn-hex btn-social yt" href="#">
                                <em class="zmdi zmdi-youtube-play"></em>
                            </a>
                            <p><strong>18</strong></p>
                        </div> -->
                    </div>
                    <div class="content-row">
                        <div class="ss-tag mt-0">
                            <div class="text">TAG :</div> 
                            <div class="tags">
                                <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                <a class="tag" href="#">กนอ.</a>
                                <a class="tag" href="#">5G</a>
                                <a class="tag" href="#">สายสื่อสาร</a>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <h6 class="fw-500">เอกสารแนบ</h6>
                        <table class="table table-download">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="file-icon">
                                            <img src="public/assets/app/images/icon/pdf.png" alt="Icon" />
                                        </div>
                                    </td>
                                    <td class="pr-3">
                                        ผลการพิจารณาโครงการ <br>
                                        ขนาด <span class="fw-600 mr-3">2.5 Mb.</span>
                                        ดาวโหลด <span class="fw-600">29 ครั้ง</span>
                                    </td>
                                    <td>
                                        <a class="btn-download mr-2" href="#">
                                            <span class="xs-hide">ดาวน์โหลด</span>
                                            <em class="zmdi zmdi-arrow-right"></em>
                                        </a>
                                        <a class="btn-download" href="#">
                                            <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                            <em class="zmdi zmdi-alert-circle-o" style="transform:none;"></em>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="content-row">
                        <table class="table table-download">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="file-icon">
                                            <img src="public/assets/app/images/icon/pdf.png" alt="Icon" />
                                        </div>
                                    </td>
                                    <td class="pr-3">
                                        รายชื่อผู้ลงทะเบียน <br>
                                        ขนาด <span class="fw-600 mr-3">2.5 Mb.</span>
                                        ดาวโหลด <span class="fw-600">29 ครั้ง</span>
                                    </td>
                                    <td>
                                        <a class="btn-download mr-2" href="#">
                                            <span class="xs-hide">ดาวน์โหลด</span>
                                            <em class="zmdi zmdi-arrow-right"></em>
                                        </a>
                                        <a class="btn-download" href="#">
                                            <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                            <em class="zmdi zmdi-alert-circle-o" style="transform:none;"></em>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php if(!empty($rowEmbed) && $rowEmbed){?>
                        <div class="content-row no-border-bottom">
                            <h6 class="fw-500">EMBED CODE</h6>
                            <div class="shortcode-container my-2">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/code.png" alt="Icon" />
                                </div>
                                <textarea data-copy="0" title="Copy Area">Temporary code test temporary code test temporary code test</textarea>
                                <a class="btn-code-copy color-01 h-color-04" data-copy="0" href="#">
                                    [คัดลอก]
                                </a>
                            </div>
                        </div>
                    <?php }?>
                </div>                                
            </div> 
        </div>
    </section>
    
    <section class="section-bpadding">
        <div class="container" data-aos="fade-up" data-aos-delay="400">
            <h5 class="h4 sm fw-500 mb-4" style="text-indent: 1em;">ข่าวที่เกี่ยวข้อง</h5>
            <div class="grids">
                <div class="grid sm-100 mt-0">
                    <div class="grids">
                        <?php for($j=0; $j<3; $j++){?>
                            <div class="grid md-1-3 sm-50 mb-5">
                                <div class="ss-card ss-card-01">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
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
                                                        <i class="zmdi zmdi-eye"></i>
                                                        <!-- <img src="public/assets/app/images/icon/07.png" alt="Icon" -->
                                                    </div> 112
                                                </div>
                                                <div class="stat">
                                                    <div class="icon">
                                                        <em class="zmdi zmdi-share"></em>
                                                    </div> 20
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?> 
                    </div>
                </div>               
            </div>
        </div>
    </section>

    



    <?php include_once('include/footer-ehia.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>

</html>
