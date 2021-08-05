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
        <div class="container">
            <div class="bg-white p-3">
                <h6>เขตอุสาหกรรมทำเลทอง</h6>
            </div>
            
            <h4 style="text-align: center;" class="h4 fw-500 color-white bg-04 py-2">ค้นหาขั้นสูง</h3>
            
                <form action="/" method="POST">
                    <div class="ss-box-header shadow position-relative" style="z-index:1;">
                        <div class="header bg-white p-4">
                            <div class="grids">
                                <div class="grid lg-30">
                                    <p class="mb-1 fw-600">ระยะเวลาจาก:</p>
                                    <div class="input-date-wrapper">
                                        <input type="text" class="bg-white date-picker" title="General Text Input" />
                                    </div>
                                    <span class="px-1 fw-300">ถึง</span>
                                    <div class="input-date-wrapper">
                                        <input type="text" class="bg-white date-picker" title="General Text Input" />
                                    </div>
                                </div>
                                <div class="grid lg-20">
                                    <p class="mb-1 fw-600">เรียงลำดับ:</p>
                                    <div class="select-wrapper" style="width:100%">
                                        <select class="bg-white" style="width:100%" title="Type">
                                            <option value="">&nbsp;</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-1 fw-600">ประเภทข้อมูล:</p>
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
                            <div class="btns text-center mt-4">
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
        <div class="container">
                <h3 style="text-align: center;" class="h3 fw-600 color-04 mt-5">“เขตอุตสาหกรรมทำเลทอง”</h3>
                <h4 style="text-align: center;" class="mb-5">ผลลัพธ์การค้นหา 44 รายการ</h4>
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

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
