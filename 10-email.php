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
            [ 'url' => '#', 'display' => 'ผลการค้นหา' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="content-05 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/15.jpg"></div>
        <div class="img-bg bg-gradient-gray-02"></div>
        <div class="container">
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                ผลการค้นหา
            </h3>
            <h4 class="h3 sm color-02 fw-300" data-aos="fade-up" data-aos-delay="150">
                fdfdf
            </h4>
            <h5 data-aos="fade-up" data-aos-delay="300">
                ผลลัพธ์การค้นหา 
                <span class="fw-600 color-04">12</span> 
                รายการ
            </h5>

            <div class="mt-4" data-aos="fade-up" data-aos-delay="450">
                <form action="/" method="POST">
                    <div class="ss-box-header shadow position-relative" style="z-index:1;">
                        <div class="header bg-06 color-white pt-2">
                            <div class="grids">
                                <div class="grid sm-100 mt-0">
                                    <div class="field field-sm">
                                        <label>คำค้นหา :</label>
                                        <input type="text" class="bg-white" title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid sm-100 mt-0">
                                    <div class="field field-sm">
                                        <label>ประเภทข้อมูล :</label>
                                        <div class="control">
                                            <fieldset>
                                                <div class="d-flex ai-center fw-wrap">
                                                    <div class="mr-4">
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_0" value="0" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_0">เนื้อหาเว็บไซต์</label>
                                                    </div>
                                                    <div class="mr-4">
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_1" value="1" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_1">ข่าวประชาสัมพันธ์</label>
                                                    </div>
                                                    <div class="mr-4">
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_2" value="2" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_2">เอกสารดาวน์โหลด</label>
                                                    </div>
                                                    <div class="mr-4">
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_3" value="3" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_3">คลังภาพ</label>
                                                    </div>
                                                    <div class="mr-4">
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_4" value="4" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_4">วิดีโอ</label>
                                                    </div>
                                                    <div class="mr-4">
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_5" value="5" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_5">เว็บไซต์ย่อย</label>
                                                    </div>
                                                    <div>
                                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_6" value="6" title="General Checkbox" />
                                                        <label class="fw-300" for="checkbox_0_6">ถามตอบ</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md-25 sm-1-3 mt-0">
                                    <div class="field field-sm">
                                        <label>ระยะเวลาจาก :</label>
                                        <div class="control">
                                            <div class="input-date-wrapper">
                                                <input type="text" class="bg-white date-picker" title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md-25 sm-1-3 mt-0">
                                    <div class="field field-sm">
                                        <label>ถึง :</label>
                                        <div class="control">
                                            <div class="input-date-wrapper">
                                                <input type="text" class="bg-white date-picker" title="General Text Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md-25 sm-1-3 mt-0">
                                    <div class="field field-sm">
                                        <label>เรียงจาก :</label>
                                        <div class="select-wrapper">
                                            <select class="bg-white" title="Type">
                                                <option value="">&nbsp;</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body bg-08">
                            <div class="btns text-center mt-0">
                                <button type="submit" class="btn btn-action mr-1">
                                    <span>ค้นหา</span>
                                </button>
                                <button type="reset" class="btn btn-action btn-action-01">
                                    <span>ล้างข้อมูล</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div data-aos="fade-up" data-aos-delay="600">
                <div class="grids mt-3">
                    <?php for($j=0; $j<12; $j++){?>
                        <div class="grid sm-100">
                            <div class="ss-card ss-card-08">
                                <?php if($j%4==0){?>
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                        <div class="date bg-05">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </a>
                                <?php }else if($j%4==1){?>
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                        <div class="play-container">
                                            <div class="icon">
                                                <em class="zmdi zmdi-play"></em>
                                            </div>
                                        </div>
                                        <div class="date bg-05">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                    </a>
                                <?php }else if($j%4==2){?>
                                    <div class="ss-img">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/32.jpg"></div>
                                        <div class="date bg-05">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                        <div class="ss-options">
                                            <a class="color-black" href="#">
                                                <img src="public/assets/app/images/icon/03.png" alt="Icon" /> 
                                                ดาวน์โหลดไฟล์นี้
                                            </a>
                                            <a class="color-black" href="#">
                                                <img src="public/assets/app/images/icon/04.png" alt="Icon" /> 
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </div>
                                    </div>
                                <?php }else if($j%4==3){?>
                                    <div class="ss-img">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/33.jpg"></div>
                                        <div class="date bg-05">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                        <div class="ss-options">
                                            <a class="color-black" href="#">
                                                <img src="public/assets/app/images/icon/03.png" alt="Icon" /> 
                                                ดาวน์โหลดไฟล์นี้
                                            </a>
                                            <a class="color-black" href="#">
                                                <img src="public/assets/app/images/icon/04.png" alt="Icon" /> 
                                                แจ้งไฟล์เสีย
                                            </a>
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="text-container">
                                    <div class="wrapper">
                                        <div class="ss-box-shadow fade-right"></div>
                                        <div class="text-wrapper">
                                            <a class="title h4" href="#">
                                                ผู้ว่าการ กนอ. และคณะผู้บริหาร ตรวจเยี่ยมบริษัท สยามมิชลิน จำกัด (หาดใหญ่)
                                            </a>
                                            <p class="desc">
                                                บอร์ด กนอ. เห็นชอบในหลักการแนวทางจัดระเบียบสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                                เพื่อปรับภูมิทัศน์พื้นที่นิคมอุตสาหกรรม สอดรับการเป็นเมืองอัจฉริยะ (Smart City) 
                                                พร้อมวางระบบ 5G ครอบครุมพื้นที่นิคมอุตสาหกรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง 
                                                คาดสามารถเริ่มดำเนินการตามแผนได้ปี 2567
                                            </p>
                                            <div class="ss-tag">
                                                <div class="text">เมนู :</div> 
                                                <div class="tags">
                                                    <a class="tag" href="#">ข่าวประชาสัมพันธ์</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="options color-black">
                                        <div class="option">
                                            <span class="fw-600 mr-1">ประเภท :</span> 
                                            <span class="color-white">เนื้อหาเว็บไซต์</span>
                                        </div>
                                        <div class="option fw-600">
                                            <span class="icon mr-2">
                                                <img src="public/assets/app/images/icon/01.png" alt="Icon" />
                                            </span> 112 
                                            <span class="icon ml-4 mr-2">
                                                <img src="public/assets/app/images/icon/02.png" alt="Icon" />
                                            </span> 234
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <?php include('component/grid-footer.php'); ?>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
