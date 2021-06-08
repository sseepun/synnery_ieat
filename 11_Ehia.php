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

<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <section class="banner-01">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <div class="slide">
                    <div class="wrapper">
                        <div class="fit img-fill"
                            style="background-image:url('public/assets/app/images/hero/ehia-hero.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ehia-accordion-02 section-bpadding section-bg-hero">
        <div class="container">
            <div class="mt--10">
                <div class="grids">
                    <div class="grid xl-100 lg-100 sm-100 m-0" data-aos="fade-up" data-aos-delay="400">
                            <div class="tab-contents <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                <div class="top-accordion"></div>
                                <div class="ehia-accordion-container active <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                            <div class="h3 sm fw-400">โครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง
                                                (EHIA)</div>
                                            <div class=" title h3 sm fw-400 color-04 ">ความเป็นมา</div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                            <div class="icon">
                                                <em class="active zmdi zmdi-chevron-down"></em>
                                                <em class="inactive zmdi zmdi-chevron-up"></em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                    <hr>
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray sm-no-br aos-init aos-animate"
                                                    style="text-indent: 2.5em;">
                                                    สืบเนื่องจากรัฐธรรมนูญแห่งราชอาณาจักรไทย พุทธศักราช 2560 มาตรา 58
                                                    บัญญัติว่า“การดำเนินการใดของรัฐหรือที่รัฐจะอนุญาตให้ผู้ใด
                                                    ดำเนินการถ้าการนั้นอาจมีผลกระทบต่อทรัพยากรธรรมชาติ คุณภาพสิ่งแวดล้อม
                                                    สุขภาพ อนามัย คุณภาพชีวิต
                                                    หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง
                                                    รัฐต้องดำเนินการให้มีการศึกษาและประเมินผลกระทบต่อคุณภาพสิ่งแวดล้อมและสุขภาพของประชาชนหรือชุมชน
                                                    และจัดให้มีการรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้องก่อน
                                                    เพื่อนำมาประกอบการพิจารณาดำเนินการหรืออนุญาตตามที่กฎหมายบัญญัติ”
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    “เพื่อประโยชน์ในการส่งเสริมและรักษาคุณภาพสิ่งแวดล้อม
                                                    ให้รัฐมนตรีโดยความเห็นชอบของคณะกรรมการสิ่งแวดล้อมแห่งชาติมีอำนาจประกาศกำหนดให้โครงการหรือกิจการหรือการดำเนินการใดของรัฐหรือที่รัฐจะอนุญาตให้ผู้ใดดำเนินการ
                                                    เป็นโครงการหรือกิจการหรือการดำเนินการที่มีผลกระทบสิ่งแวดล้อม
                                                    หรือที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ คุณภาพสิ่งแวดล้อม สุขภาพ
                                                    อนามัย คุณภาพชีวิต
                                                    หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง
                                                    ซึ่งผู้ดำเนินการหรือผู้ขออนุญาตต้องจัดทำรายงานการประเมินผลกระทบสิ่งแวดล้อม
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    หลักเกณฑ์ วิธีการ
                                                    และเงื่อนไขในการจัดทำรายงานการประเมินผลกระทบสิ่งแวดล้อมตามวรรคหนึ่ง
                                                    ให้เป็นไปตามที่รัฐมนตรีโดยความเห็นชอบของคณะกรรมการสิ่งแวดล้อมแห่งชาติประกาศกำหนด
                                                    โดยจะกำหนดให้แตกต่างกันตามประเภทหรือขนาดของโครงการหรือกิจการหรือการดำเนินการก็ได้
                                                    และอย่างน้อยต้องประกอบด้วย
                                                    สาระสำคัญเกี่ยวกับรายละเอียดโครงการหรือกิจการหรือการดำเนินการ
                                                    สภาพสิ่งแวดล้อมปัจจุบัน การประเมินทางเลือกในการดำเนินการ
                                                    การประเมินผลกระทบสิ่งแวดล้อมที่อาจเกิดขึ้นจากโครงการหรือกิจการหรือการดำเนินการทั้งทางตรงและทางอ้อม
                                                    การมีส่วนร่วมของประชาชนในการประเมินผลกระทบสิ่งแวดล้อม
                                                    และมาตรการป้องกันแก้ไขผลกระทบสิ่งแวดล้อมและการชดเชยเยียวยาความเดือดร้อนหรือเสียหาย
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    การจัดทำรายงานการประเมินผลกระทบสิ่งแวดล้อมสำหรับโครงการหรือกิจการหรือการดำเนินการของรัฐหรือที่รัฐจะอนุญาตให้ผู้ใดดำเนินการที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ
                                                    คุณภาพสิ่งแวดล้อม สุขภาพ อนามัย คุณภาพชีวิต
                                                    หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง
                                                    ผู้ดำเนินการหรือผู้ขออนุญาตต้องประเมินผลกระทบด้านสุขภาพ
                                                    และจัดให้มีการรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้อง
                                                    ตามหลักเกณฑ์
                                                    วิธีการและเงื่อนไขที่รัฐมนตรีโดยความเห็นชอบของคณะกรรมการสิ่งแวดล้อมแห่งชาติประกาศกำหนดเป็นการเพิ่มเติมจากที่ต้องดำเนินการตามวรรคสองด้วย”
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    ดังนั้น
                                                    เพื่อให้การดำเนินการอนุญาตประเภทโครงการหรือกิจการที่มีผลกระทบสิ่งแวดล้อม
                                                    (EIA) หรือที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ คุณภาพสิ่งแวดล้อม
                                                    สุขภาพ อนามัย คุณภาพชีวิต
                                                    หรือส่วนได้เสียสําคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง
                                                    (โครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง: EHIA)
                                                    ของการนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) สอดคล้องกับมาตรา 58
                                                    แห่งรัฐธรรมนูญ พ.ศ. 2560
                                                    และกฎหมายว่าด้วยการส่งเสริมและรักษาคุณภาพสิ่งแวดล้อมแห่งชาติที่เกี่ยวข้องดังกล่าวข้างต้น
                                                    กนอ. จึงได้แก้ไข/ปรับปรุงและออกข้อกฎหมายต่างๆ ดังนี้
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    1) ข้อบังคับคณะกรรมการการนิคมอุตสาหกรรมแห่งประเทศไทย
                                                    ว่าด้วยหลักเกณฑ์ วิธีการ
                                                    และเงื่อนไขในการประกอบกิจการในนิคมอุตสาหกรรม พ.ศ. 2551
                                                    ซึ่งแก้ไขเพิ่มเติมโดยข้อบังคับคณะกรรมการการนิคมอุตสาหกรรมแห่งประเทศไทย
                                                    ว่าด้วยหลักเกณฑ์ วิธีการ
                                                    และเงื่อนไขในการประกอบกิจการในนิคมอุตสาหกรรม (ฉบับที่ 6) พ.ศ. 2563
                                                    โดยมีประเด็นที่เกี่ยวข้องกับโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง
                                                    (EHIA) ดังนี้<br>
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    ข้อ 11 วรรคห้า กำหนดว่า
                                                    กรณีผู้ขออนุญาตประกอบกิจการดำเนินโครงการที่เข้าข่ายโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง
                                                    (EHIA)
                                                    เมื่อคณะกรรมการผู้ชำนาญการพิจารณารายงานการประเมินผลกระทบสิ่งแวดล้อม
                                                    (คชก.) เห็นชอบรายงาน EIA เรียบร้อยแล้ว ให้ กนอ.
                                                    หรือหน่วยงานอนุญาตอื่นที่เกี่ยวข้องจัดให้มีการรับฟังความคิดเห็นฯ
                                                    ตามหลักเกณฑ์ วิธีการ และเงื่อนไขที่ กนอ.
                                                    หรือที่หน่วยงานอนุญาตอื่นที่เกี่ยวข้องกำหนด แล้วแต่กรณี
                                                </p>


                                                <p style="text-indent: 2.5em;">
                                                    2) ประกาศการนิคมอุตสาหกรรมแห่งประเทศไทย ที่ 115/2563 เรื่อง
                                                    การรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้องต่อโครงการหรือกิจการที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ
                                                    คุณภาพสิ่งแวดล้อม สุขภาพ อนามัย คุณภาพชีวิต
                                                    หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                    3) ประกาศการนิคมอุตสาหกรรมแห่งประเทศไทย ที่ 33/2561 เรื่อง
                                                    กำหนดอัตราค่าบริการในการจัดให้มีการรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้องสำหรับโครงการหรือกิจการที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ
                                                    คุณภาพสิ่งแวดล้อม สุขภาพ อนามัย คุณภาพชีวิต
                                                    หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="ehia-accordion-container mt-3 <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                            <div class="h3 sm fw-400">การจัดรับฟังความคิดเห็นต่อโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA)</div>
                                            <div class=" title h3 sm fw-400 color-04 ">แนวทางการจัดรับฟังความคิดเห็นของผู้มีส่วนได้เสียฯ ต่อโครงการหรือกิจการที่อาจมี
                                            ผลกระทบอย่างรุนแรง (EHIA)</div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                        <!-- <div class=""> </div> -->
                                        <div class="icon">
                                            <em class="active zmdi zmdi-chevron-down"></em>
                                            <em class="inactive zmdi zmdi-chevron-up"></em>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                    <hr>
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray sm-no-br aos-init aos-animate"
                                                    style="text-indent: 2.5em;">
                                                    เพื่อให้การดำเนินการอนุญาตประเภทโครงการหรือกิจการที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ คุณภาพสิ่งแวดล้อม สุขภาพ อนามัย คุณภาพชีวิต หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง (โครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง: EHIA) ของ กนอ. สอดคล้องกับมาตรา 58 แห่งรัฐธรรมนูญ พ.ศ. 2560 กนอ. แต่งตั้ง “คณะกรรมการรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้อง” เพื่อดำเนินการจัดรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้องให้เป็นไปตามประกาศการนิคมอุตสาหกรรมแห่งประเทศไทย ที่ 115/2563 เรื่อง การรับฟังความคิดเห็นของผู้มีส่วนได้เสียและประชาชนและชุมชนที่เกี่ยวข้องต่อโครงการหรือกิจการที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ คุณภาพสิ่งแวดล้อม สุขภาพ อนามัย คุณภาพชีวิต หรือส่วนได้เสียสำคัญอื่นใดของประชาชนหรือชุมชนหรือสิ่งแวดล้อมอย่างรุนแรง ทั้งนี้ คณะกรรมการรับฟังความคิดเห็นฯ จะดำเนินการศึกษารายละเอียดโครงการ กำหนดกระบวนการในการรับฟังความคิดเห็น และจัดทำรายงานการรับฟังความคิดเห็น พร้อมให้ข้อคิดเห็นและข้อเสนอแนะ
                                                </p>
                                                <p class="mt-3">
                                                หมายเหตุ: ประเภทโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA) เป็นไปตามเอกสารท้ายประกาศ 1 ของประกาศกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม เรื่อง กำหนดโครงการกิจการ หรือการดำเนินการที่อาจมีผลกระทบต่อทรัพยากรธรรมชาติ คุณภาพสิ่งแวดล้อม สุขภาพ อนามัย คุณภาพชีวิตของประชาชนในชุมชนอย่างรุนแรง ซึ่งต้องจัดทำรายงานการประเมินผลกระทบสิ่งแวดล้อม และหลักเกณฑ์ วิธีการ และเงื่อนไขในการจัดทำรายงานการประเมินผลกระทบสิ่งแวดล้อม ลงวันที่ 19 พฤศจิกายน พ.ศ. 2561
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="ehia-accordion-container mt-3 <?php if($i==0)echo 'active'; ?> ">
                                <div class="ehia-box-shadow"></div>
                                    <div class="ehia-accordion-header">
                                        <div class="text-center">
                                            <div class="h3 sm fw-400">การพิจารณาอนุญาตโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA)</div>
                                            <div class=" title h3 sm fw-400 color-04 ">แนวทางการพิจารณาอนุญาตโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA)</div>
                                        </div>
                                        <div class="ehia-accordion-tag">
                                        <!-- <div class=""> </div> -->
                                        <div class="icon">
                                            <em class="active zmdi zmdi-chevron-down"></em>
                                            <em class="inactive zmdi zmdi-chevron-up"></em>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ehia-accordion-body">
                                    <hr>
                                        <div class="grids">
                                            <div class="grid xl-100 lg-3-3 sm-100 mt-0">
                                                <p class="fw-300 color-gray sm-no-br aos-init aos-animate"
                                                    style="text-indent: 2.5em;">
                                                    ในการพิจารณาอนุญาตโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA) กนอ. แต่งตั้งพนักงาน กนอ. ที่เกี่ยวข้องเป็น “คณะกรรมการเทคนิคเพื่อประมวลผลกระทบ” ซึ่งมีอำนาจหน้าที่รวบรวมและประมวลความเห็นของทุกฝ่าย ได้แก่ คณะกรรมการผู้ชำนาญการพิจารณารายงานการประเมินผลกระทบสิ่งแวดล้อม รายงานการรับฟังความคิดเห็น เป็นต้น รวมถึงดำเนินการแสวงหาหรือรับฟังข้อมูล ข้อเท็จจริง ความเห็น คำแนะนำและข้อโต้แย้งจากฝ่ายต่าง ๆ เกี่ยวกับโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA) และเสนอความเห็นเพื่อประกอบการพิจารณาอนุญาตโครงการดังกล่าว ทั้งนี้ คณะกรรมการเทคนิคเพื่อประมวลผลกระทบมีจำนวน 2 ชุด ดังนี้ 
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                1) คณะกรรมการเทคนิคเพื่อประมวลผลกระทบกรณีนิคมอุตสาหกรรม สำหรับโครงการจัดตั้งหรือขยายนิคมอุตสาหกรรม หรือผนวกพื้นที่เข้าเป็นส่วนหนึ่งของนิคมอุตสาหกรรม ซึ่งดำเนินการโดย กนอ. หรือที่ กนอ. จะอนุญาตให้ผู้ขอร่วมดำเนินงานหรือผู้ขอผนวกพื้นที่ดำเนินการ เป็นโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA)
                                                </p>
                                                <p style="text-indent: 2.5em;">
                                                2) คณะกรรมการเทคนิคเพื่อประมวลผลกระทบกรณีโรงงานอุตสาหกรรมภายในนิคมอุตสาหกรรม สำหรับโครงการหรือกิจการของผู้ขออนุญาตประกอบกิจการเป็นโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA)
                                                เมื่อคณะกรรมการเทคนิคเพื่อประมวลผลกระทบดำเนินการให้ความเห็นประกอบการพิจารณาอนุญาตแล้วเสร็จ กนอ. จะพิจารณาอนุญาตโครงการหรือกิจการที่อาจมีผลกระทบอย่างรุนแรง (EHIA) ต่อไป ตามหลักเกณฑ์ วิธีการ และเงื่อนไขในการจัดตั้งหรือขยายนิคมอุตสาหกรรม หรือผนวกพื้นที่เข้าเป็นส่วนหนึ่งของนิคมอุตสาหกรรม หรือการประกอบกิจการในนิคมอุตสาหกรรม แล้วแต่กรณี
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
    </section>

    <section class="section-bpadding">
        <div class="container" data-aos="fade-up" data-aos-delay="400">
            <hr>
            <h5 class="h4 sm fw-500 mb-4" style="text-indent: 1em;">โครงการที่อยู่ระหว่างดำเนินการ</h5>
            <div class="project-bg d-flex justify-content-end" style="padding:5rem;">
                <p class="mt-5">
                    <div class="text-center">
                        <span class="h4 lg fw-500 color-01">
                            โครงการโรงงานคลอร์อัลคาไลโรงงานผลิตไวนิลคลอไรด์<br>
                            และโรงงานผลิตผงพลาสติกพีวีซี <span class="h4 fw-300 color-black">(ส่วนขยาย ครั้งที่
                                3)</span>
                        </span> <br>
                        <span class="h4 fw-300 color-black">
                            ของ
                        </span>
                        <span class="h4 lg fw-500 color-black">
                            บริษัท วีนิไทย จำกัด (มหาชน)
                        </span>
                    </div>

                </p>
            </div>
        </div>

    </section>

    <section class="section-bpadding">
        <div class="container" data-aos="fade-up" data-aos-delay="400">
            <hr>
            <h5 class="h4 sm fw-500 mb-4" style="text-indent: 1em;">กฎหมาย EHIA</h5>
            <div class="grids">
                <div class="grid md-1-3 sm-50">
                    <div class="ss-card ss-card-01">
                        <a class="ss-img" href="#">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/ehia/law1.jpg"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                </div>
                            </div>
                        </a>
                        <div class="text-container">
                            <div class="ss-box-shadow"></div>
                            <div class="text-wrapper">
                                <a class="title h6 fw-600 mb-3" href="#">
                                    รัฐธรรมนูญแห่งราชอาณาจักรไทย พุทธศักราช 2560
                                </a>
                                <a class="btn-download mr-2" href="#">
                                    <em class="zmdi zmdi-arrow-right"></em>
                                    <span>ดาวน์โหลด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid md-1-3 sm-50">
                    <div class="ss-card ss-card-01">
                        <a class="ss-img" href="#">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/ehia/law2.jpg"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                </div>
                            </div>
                        </a>
                        <div class="text-container">
                            <div class="ss-box-shadow"></div>
                            <div class="text-wrapper">
                                <a class="title h6 fw-600 mb-3" href="#">
                                    รัฐธรรมนูญแห่งราชอาณาจักรไทย พุทธศักราช 2560
                                </a>
                                <a class="btn-download mr-2" href="#">
                                    <em class="zmdi zmdi-arrow-right"></em>
                                    <span>ดาวน์โหลด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid md-1-3 sm-50">
                    <div class="ss-card ss-card-01">
                        <a class="ss-img" href="#">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/ehia/law3.jpg"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                </div>
                            </div>
                        </a>
                        <div class="text-container">
                            <div class="ss-box-shadow"></div>
                            <div class="text-wrapper">
                                <a class="title h6 fw-600 mb-3" href="#">
                                    รัฐธรรมนูญแห่งราชอาณาจักรไทย พุทธศักราช 2560
                                </a>
                                <a class="btn-download mr-2" href="#">
                                    <em class="zmdi zmdi-arrow-right"></em>
                                    <span>ดาวน์โหลด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>

    </section>

    <section class="section-bpadding">
        <div class="container" data-aos="fade-up" data-aos-delay="400">
            <hr>
            <h5 class="h4 sm fw-500 mb-4" style="text-indent: 1em;">ข้อมูลโครงการ</h5>
            <div class="grids">
                <a href="#" class="grid md-1-3 sm-50 project-box">
                    <div class="h4 lg fw-300 text-center color-white text-shadow">
                    โครงการโรงงานคลอร์อัลคาไล<br>
                    โรงงานผลิตไวนิลคลอไรด์<br> 
                    และโรงงานผลิตผงพลาสติกพีวีซี<br>
                    (ส่วนขยาย ครั้งที่ 3)
                    <br>
                    <span class="h5 fw-300 color-white">ของ บริษัท วีนิไทย จำกัด (มหาชน)</span>
                    </div>
                </a>

                <a href="#" class="grid md-1-3 sm-50 project-box">
                    <div class="h4 lg fw-300 text-center color-white text-shadow">
                    โครงการโรงงานผลิตสารโอเลฟินส์<br>
                    (ส่วนขยาย ครั้งที่ 4)<br>
                    <span class="h5 fw-300 color-white">ของ<br>บริษัท พีทีที โกลบอล เคมิคอล จำกัด (มหาชน)
                    <br> (นิคมอุตสาหกรรมมาบตาพุด)</span>
                    </div>
                </a>                
            </div>
            <div class="btns text-right mt-5" data-aos="fade-up" data-aos-delay="400">
                <a class="btn btn-action2" href="#">
                    <span>ดูทั้งหมด</span>
                </a>
            </div>
        </div>

    </section>

    <section class="section-bpadding">
        <div class="container" data-aos="fade-up" data-aos-delay="400">
            <hr>
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
                                กฎหมาย EHIA <br>
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
            <hr>                
        </div>

    </section>

    



    <?php include_once('include/footer-ehia.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>

</html>
