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
            [ 'url' => '#', 'display' => 'คลังความรู้' ],
            [ 'url' => '#', 'display' => 'บทความ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding">
        <div class="container">
            <div class="grids">
                <div class="grid xl-20 lg-25 sm-100"></div>
                <div class="grid xl-80 lg-75 sm-100 mt-0">
                    <h3 class="text-center sm xs-no-br" data-aos="fade-up" data-aos-delay="0">
                        การวิเคราะห์การลงทุน
                    </h3>
                </div>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="150">
                        <div class="tabs">
                            <div class="ss-box-shadow"></div>
                            <a class="tab tab-main color-black h-color-04 active" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-1.png" alt="Icon">
                                </div>
                                <h6>บทความ</h6>
                            </a>
                            <a class="tab tab-main color-black h-color-04" href="#">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/tab-8.png" alt="Icon">
                                </div>
                                <h6>วิดีทัศน์ / E-learning</h6>
                            </a>
                        </div>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100">
                        <div class="content-banner" data-aos="fade-up" data-aos-delay="0">
                            <div class="ss-img">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/26.jpg"></div>
                            </div>
                            <p class="text-right mt-2">
                                <i class="zmdi zmdi-eye mr-1"></i> 
                                ยอดการเปิดอ่าน <span class="fw-500">126485</span> ครั้ง
                            </p>
                        </div>

                        <div data-aos="fade-up" data-aos-delay="0">
                            <h3 class="xs fw-200 color-06 mt-4 pt-1">
                                การวิเคราะห์การลงทุนเป็นวิธีหนึ่งที่ป้องกันความเสี่ยงในการลงทุน ให้กับผู้ประกอบการได้ 
                                การเริ่มต้นธุรกิจมีความเสี่ยงสูงยิ่งเงินลงทุนสูงความเสี่ยงก็ยิ่งสูงตาม 
                            </h3>
                            <p class="mt-3">
                                ดังนั้นเจ้าของกิจการที่จะเริ่มลงทุนในกิจการใหม่ๆหรือเป็นกิจการที่จะลงทุนเพื่อการขยายควรวิเคราะห์การลงทุนก่อนเพื่อตัดสินใจว่าจะลงทุนดีหรือไม่ 
                                นอกจากนั้นการวิเคราะห์การลงทุนยังทำให้เราทราบว่าการลงทุนนี้จะมีผลตอบแทนกลับมาเท่าไหร่ด้วย การลงทุนสามารถแยกออกเป็น 3 ประเภทคือ
                            </p>
                            <ol>
                                <li>การลงทุนเพื่อทดแทนและปรับปรุง เช่นซื้อเครื่องจักรใหม่แทนเครื่องจักรเก่า เพื่อลดต้นทุนหรือเพิ่มประสิทธิภาพการผลิตก็ได้</li>
                                <li>การลงทุนเพื่อขยายกิจการ เป็นการลงทุนในการขยายโรงงานหรือสร้างโรงงานใหม่ รวมทั้งเพิ่มสายการผลิต</li>
                                <li>การลงทุนเพื่อเริ่มธุรกิจ เป็นการลงทุนในกิจการใหม่</li>
                            </ol>

                            <h3 class="xs fw-200 color-06 xs-no-br mt-4 pt-2">
                                ตัวชี้วัดทางการเงินที่นิยมนำมาวิเคราะห์การลงทุน 4 ตัวชี้วัด
                            </h3>
                            <p class="mt-3">
                                ซึ่งทาง BSC จะอธิบายในหัวข้อ การตัดสินใจการลงทุน 
                                การวิเคราะห์การลงทุนที่ดีไม่ควรวิเคราะห์เพียงการเงินด้านเดียวแต่ควรวิเคราะห์ทั้งหมด 6 ด้านคือ
                            </p>
                            <ul>
                                <li>วิเคราะห์ด้านตลาด มีช่องว่างตลาดไหม ขายได้ไหม</li>
                                <li>วิเคราะห์ด้านเทคนิค คือผลิตได้ไหม ใช้เทคโนโลยีอะไรบ้าง</li>
                                <li>วิเคราะห์ด้านการเงิน ด้วยการจัดทำความเป็นไปได้ของโครงการ</li>
                                <li>วิเคราะห์ทางเศรษฐกิจ ดูว่าเป็นช่วงเวลาเหมาะสมไหม ยังลงทุนได้ไหม</li>
                                <li>วิเคราะห์ด้านการบริหาร มีบุคลากรพร้อมไหม มีประสบการณ์บริหารไหม</li>
                                <li>วิเคราะห์สิ่งแวดล้อมโดยล้อมว่าพร้อมไหม ติดกฏหมายหรือข้อบังคับอะไรไหม</li>
                            </ul>

                            <div class="pt-3">
                                <p class="mt-3">
                                    <img class="content-img-float left" src="public/assets/app/images/bg/27.jpg" alt="Image" />
                                    <span class="h4">
                                        สำหรับปัจจัยสำคัญในการวิเคราะห์การลงทุนก็คือ
                                    </span> <br>
                                    เงินลงทุนของโครงการ กระแสเงินสดรับจ่ายของโครงการและการใช้เครื่องมือในการวิเคราะห์ความน่าลงทุน 
                                    หากคุณสามารถหาข้อมูลและจัดทำปัจจัยสำคัญของการวิเคราะห์การลงทุนได้แล้วคุณก็สามารถประเมินและตัดสินใจลงทุนได้ด้วยความเสี่ยงที่น้อยกว่าการไม่วิเคราะห์เลย 
                                    เพราะผู้ประกอบการไทยมักมีความกล้าได้กล้าเสีย เมื่อมองว่าเป็นโอกาสก็ลงทุนเลยโดยไม่วิเคราะห์และหาข้อมูลเพิ่มเติมซึ่งจะพบกับความล้มเหลวได้ง่าย 
                                    จึงขอให้ผู้จะเริ่มลงทุนศึกษาการวิเคราะห์การลงทุนเพิ่มเติมได้จากการสัมมนา อบรม ที่หน่วยงานภาครัฐจัดอบรมให้
                                </p>
                            </div>
                        </div>
                        
                        <div class="clear-both"></div>
                        <div class="mt-4" data-aos="fade-up" data-aos-delay="0">
                            <?php include('component/content-footer.php'); ?>
                        </div>
                        <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
                            <a class="btn btn-action" href="#">
                                <span>บทความต่อไป</span>
                            </a>
                        </div>
                        
                        <div class="mt-4 pt-4" data-aos="fade-up" data-aos-delay="0">
                            <h3 class="xs content-grid-title">
                                บทความที่เกี่ยวข้อง
                            </h3>
                            <div class="grids">
                                <?php for($j=0; $j<3; $j++){?>
                                    <div class="grid md-1-3 sm-50">
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
                                                                <img src="public/assets/app/images/icon/07.png" alt="Icon" />
                                                            </div> 112
                                                        </div>
                                                        <div class="stat">
                                                            <div class="icon">
                                                                <i class="zmdi zmdi-share"></i>
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
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
