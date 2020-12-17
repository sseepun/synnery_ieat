<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .contact {position: relative; background-size:cover; background-position:center; background-image:url('./public/assets/app/images/bg/contact-btn.png');}
        .contact .contact-wrapper {width:calc(100% - 3rem); display:block; text-align:center; padding: 0 0 3rem 0; }
        .contact .contact-wrapper .icon-wrapper {transform: translate(.625rem, -50%);}
        .contact .contact-wrapper .text-wrapper {transform: translateY(-50%); }



        .contact-form .field {display:flex; justify-content: space-between; color:#fff; }
        .contact-form input[type="text"], textarea {width:100%; border-radius:0;}

        @media screen and (max-width:991.98px){
            .contact .contact-wrapper{width:calc(100% - 1.2rem);}
            .contact-form .field{justify-content: flex-start;}

        }
        @media screen and (max-width:767.98px){
            .contact .contact-wrapper{width:calc(100% - 2.5rem);}

        }
        @media screen and (max-width:575.98px){
            .contact{transform:translateX(1.5rem);}
        }


    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'ติดต่อ กนอ. ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg" style="background-image:url('./public/assets/app/images/bg/contact-1.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="0">
                ติดต่อ กนอ.
            </h2>
            <h3 class="sm color-02 fw-400" data-aos="fade-up" data-aos-delay="150">
                ดำเนินกิจการด้วยความมุ่งมั่นและพัฒนาศักยภาพในทุกๆด้าน
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                เพื่อการเติบโตทางธุรกิจสังคมและสิ่งแวดล้อมอย่างยั่งยืน รางวัลแห่งความสำเร็จต่างๆ<br>
                ที่ กนอ. ได้รับนับว่าเป็นเครื่องการันตีถึงการดำเนินการของบริษัทที่ดี
            </h5>

            <div class="grids mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="grid sm-100 text-center">
                    <h3 class="xs">การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.)</h3>
                    <h5 class="text-md color-02">ช่องทางแจ้งเรื่องร้องเรียนการทุจริต / ช่องทางรับฟังความคิดเห็น</h5>
                </div>

                <div class="grid sm-100 mt-5">
                    <div class="grids">
                        <div class="grid sm-50 md-1-3">
                            <div class="contact">
                                <div class="contact-wrapper">
                                    <div class="icon-wrapper">
                                        <img src="./public/assets/app/images/icon/contact-1.png" alt="">
                                    </div>
                                    <div class="text-wrapper color-white">
                                        <p class="fw-200"><span class="fw-400">Telephone :</span> 02 2530561</p>
                                        <p class="fw-200"><span class="fw-400">Call Center: </span>02 2072700</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid sm-50 md-1-3">
                        
                            <div class="contact">
                                <div class="contact-wrapper">
                                    <div class="icon-wrapper">
                                        <img src="./public/assets/app/images/icon/contact-2.png" alt="">
                                    </div>
                                    <div class="text-wrapper color-white">
                                        <p class="fw-200">618 ถนนนิคมมักกะสัน แขวงมักกะสัน</p>
                                        <p class="fw-200">เขตราชเทวี กรุงเทพมหานคร 10400</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid sm-50 md-1-3">
                            <div class="contact">
                                <div class="contact-wrapper">
                                    <div class="icon-wrapper">
                                        <img src="./public/assets/app/images/icon/contact-3.png" alt="">
                                    </div>
                                    <div class="text-wrapper color-white">
                                        <p class="fw-200">contact@ieat.mail.go.th</p>
                                        <p class="fw-200">investment.1@ieat.mail.go.th</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-bpadding section-bg" style="background-image:url('./public/assets/app/images/bg/contact-2.jpg'); background-size:cover; background-position:center;">
        <div class="container"  data-aos="fade-up" data-aos-delay="600">
            <h3 class="xs text-center color-white fw-400">แบบฟอร์มการติดต่อ</h3>
            <form class="contact-form" action="./" method="POST">
                <div class="grids mt-3">
                    <div class="grid sm-100 mt-2">
                        <div class="grids jc-center ai-center">
                            <div class="grid sm-100 lg-10 mt-0">
                                <div class="field">
                                    <label for="firstlast" class="mb-0 text-xl">ชื่อ-นามสกุล</label>
                                    <span class="text-xl">:</span>
                                </div>
                            </div>
                            <div class="grid sm-100 lg-40 mt-0">
                                <input type="text" name="firstlast">
                            </div>
                        </div>
                    </div>


                    <div class="grid sm-100 mt-2">
                        <div class="grids jc-center ai-center">
                            <div class="grid sm-100 lg-10 mt-0">
                                <div class="field">
                                    <label for="email" class="mb-0 text-xl">อีเมล์</label>
                                    <span class="text-xl">:</span>
                                </div>
                            </div>
                            <div class="grid sm-100 lg-40 mt-0">
                                <input type="text" name="email">
                            </div>
                        </div>
                    </div>


                    <div class="grid sm-100 mt-2">
                        <div class="grids jc-center ai-center">
                            <div class="grid sm-100 lg-10 mt-0">
                                <div class="field">
                                    <label for="topic" class="mb-0 text-xl">หัวข้อ</label>
                                    <span class="text-xl">:</span>
                                </div>
                            </div>
                            <div class="grid sm-100 lg-40 mt-0">
                                <input type="text" name="topic">
                            </div>
                        </div>
                    </div>


                    <div class="grid sm-100 mt-2">
                        <div class="grids jc-center ai-start">
                            <div class="grid sm-100 lg-10 mt-0">
                                <div class="field">
                                    <label for="topic" class="mb-0 text-xl">ข้อความ</label>
                                    <span class="text-xl">:</span>
                                </div>
                            </div>
                            <div class="grid sm-100 lg-40 mt-0">
                                <textarea name="topic" rows="7"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="grid sm-100 mt-2">
                        <div class="grids jc-center">
                            <div class="grid sm-100 lg-10 mt-0"></div>
                            <div class="grid sm-100 lg-40 mt-0">
                                <img style="width:100%;" src="./public/assets/app/images/icon/capcha2.png" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="grid sm-100 mt-3">
                        <div class="grids jc-center">
                            <div class="grid sm-100 lg-10 mt-0"></div>
                            <div class="grid sm-100 lg-40 mt-0">
                                <div class="btns mt-0 text-center">
                                    <button type="submit" class="btn btn-action mr-1">ส่ง</a>
                                </div>
                            </div>
                        </div>
                    </div>

                   

                
                
                </div>

            </form>
        
        </div>
        
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
