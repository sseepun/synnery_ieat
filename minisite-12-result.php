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
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-01.png',
            'title' => 'ค้นหา',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'ค้นหา' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding">
        <div class="container bg-white">
            <h5>เขตอุสาหกรรมทำเลทอง</h5>
            <h2>ค้นหา</h2>
            
                <form action="/" method="POST">
                    <div class="ss-box-header shadow position-relative" style="z-index:1;">
                        <div class="header bg-white pt-2">
                            <div class="grids">
                                <div class="grid md-30">
                                    <p>ระยะเวลาจาก</p>
                                        <div class="input-date-wrapper">
                                            <input type="text" class="bg-white date-picker" title="General Text Input" />
                                        </div>
                                        <span>ถึง</span>
                                        <div class="input-date-wrapper">
                                            <input type="text" class="bg-white date-picker" title="General Text Input" />
                                        </div>
                                </div>
                                <div class="grid md-20">
                                    <p>เรียงลำดับ</p>
                                    <div class="select-wrapper">
                                        <select class="bg-white" title="Type">
                                            <option value="">&nbsp;</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p>ประเภทข้อมูล :</p>
                            <fieldset>
                                <div class="grids">
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_0" value="0" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_0">เนื้อหาเว็บไซต์</label>
                                    </div>
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_1" value="1" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_1">ข่าวสาร</label>
                                    </div>
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_2" value="2" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_2">เอกสารดาวน์โหลด</label>
                                    </div>
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_3" value="3" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_3">คลังภาพ</label>
                                    </div>
                                </div>
                                <div class="grids">
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_5" value="5" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_5">วีดีทัศน์</label>
                                    </div>
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_5" value="5" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_5">เว็บไซต์ย่อย</label>
                                    </div>
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_5" value="5" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_5">ถามตอบ</label>
                                    </div>
                                    <div class="grid md-20 mt-0">
                                        <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_5" value="5" title="General Checkbox" />
                                        <label class="fw-300" for="checkbox_0_5">ทั้งหมด</label>
                                    </div>

                                </div>
                            </fieldset>


                                    
<!--                                         <div class="d-flex ai-center fw-wrap">
                                            <div class="mr-4">

                                            </div>
                                            <div class="mr-4">

                                            </div>
                                            <div class="mr-4">

                                            </div>
                                            <div class="mr-4">

                                            </div>
                                            <div class="mr-4">

                                            </div>
                                            <div class="mr-4">

                                            </div>
                                            <div>
                                                <input class="mr-2" type="checkbox" name="checkbox_0" id="checkbox_0_6" value="6" title="General Checkbox" />
                                                <label class="fw-300" for="checkbox_0_6">ถามตอบ</label>
                                            </div>
                                        </div>

                                </div>

                            </div> -->
                        </div>

                        <div class="btns text-center mt-0">
                            <button type="submit" class="btn btn-action mr-1">
                                <span>ค้นหา</span>
                            </button>
                            <button type="reset" class="btn btn-action btn-action-01">
                                <span>ล้างข้อมูล</span>
                            </button>
                        </div>

                    </div>
                </form>



        </div>
        <div class="container">
                <h1>“เขตอุตสาหกรรมทำเลทอง”</h1>
                <h2>ผลลัพธ์การค้นหา 44 รายการ</h2>
            <div class="grids">
                <?php for($j=0; $j<10; $j++){?>
                    <div class="grid sm-100">
                        <?php
                            $cardType = 'SearchResult';
                            include('component/minisite-card-list.php');
                        ?>
                    </div>
                <?php }?>
            </div>
        
    
            <?php include('component/grid-footer.php'); ?>
                               

        </div>
    </section>

    <section class="section-padding bg-fgray">
        <div class="container">
            <div class="grids">
                <div class="grid lg-25 sm-100 mt-0"></div>
                <div class="grid lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="ss-title">
                        <span class="h3 fw-600 color-04">วิดีทัศน์ที่เกี่ยวข้อง</span>
                    </div>
                    <div class="grids">
                        <?php for($j=0; $j<3; $j++){?>
                            <div class="grid md-1-3 sm-50">
                                <?php
                                    $cardType = 'Video';
                                    include('component/minisite-card-grid.php');
                                ?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
