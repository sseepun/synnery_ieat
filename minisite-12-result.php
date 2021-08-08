<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading bg-ffgray">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-06.png',
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

            <div 
                class="grids jc-center position-relative" style="z-index:2;" 
                data-aos="fade-up" data-aos-delay="300"
            >
                <div class="grid lg-90 sm-100 mt-0">
                    <div class="search-panel-01 bg-white shadow">
                        <h6 class="title h4 sm fw-500">
                            เขตอุสาหกรรมทำเลทอง
                            <div class="btn-close">
                                <em class="zmdi zmdi-close"></em>
                            </div>
                        </h6>
                        <div class="subtitle h4 lg fw-600 text-center">
                            ค้นหาขั้นสูง
                            <div class="btn-toggle active">
                                <em class="zmdi zmdi-chevron-down"></em>
                            </div>
                        </div>
                        <div class="search-container">
                            <form action="/" method="POST">
                                <div class="grids">
                                    <div class="grid xl-40 lg-45 md-50 sm-75">
                                        <div class="field mt-2">
                                            <label class="fw-600">ระยะเวลาจาก :</label>
                                            <div class="control">
                                                <div class="d-flex ai-center">
                                                    <div class="input-date-wrapper">
                                                        <input type="text" class="bg-white date-picker" title="General Text Input" />
                                                    </div>
                                                    <label class="fw-400 mx-2">ถึง</label>
                                                    <div class="input-date-wrapper">
                                                        <input type="text" class="bg-white date-picker" title="General Text Input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid xl-30 lg-1-3 md-50 sm-60 xs-80">
                                        <div class="field mt-2">
                                            <label class="fw-600">เรียงลำดับ :</label>
                                            <div class="control">
                                                <div class="select-wrapper width-full">
                                                    <select class="bg-white width-full" title="Type">
                                                        <option value="">&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sep"></div>
                                
                                    <div class="grid sm-100">
                                        <div class="field mt-2">
                                            <label class="fw-600">ประเภทข้อมูล :</label>
                                            <div class="control">
                                                <fieldset>
                                                    <div class="grids">
                                                        <?php
                                                            foreach([
                                                                [ 'name' => 'เนื้อหาเว็บไซต์', 'num' => 22 ],
                                                                [ 'name' => 'ข่่าวสาร', 'num' => 12 ],
                                                                [ 'name' => 'เอกสารดาวน์โหลด', 'num' => 5 ],
                                                                [ 'name' => 'คลังภาพ', 'num' => 0 ],
                                                                [ 'name' => 'วิดีทัศน์', 'num' => 1 ],
                                                                [ 'name' => 'เว็บไซต์ย่อย', 'num' => 0 ],
                                                                [ 'name' => 'ถามตอบ', 'num' => 0 ],
                                                                [ 'name' => 'ทั้งหมด', 'num' => 0 ],
                                                            ] as $j=>$d){
                                                        ?>
                                                            <div class="grid lg-25 md-1-3 mt-2">
                                                                <input 
                                                                    class="mr-2" type="checkbox" name="checkbox" id="checkbox_<?= $j ?>" 
                                                                    value="<?= $j ?>" title="General Checkbox" style="transform:translateY(.0625rem);"
                                                                />
                                                                <label class="fw-300" for="checkbox_<?= $j ?>">
                                                                    <?= $d['name'] ?>
                                                                    <?php if($d['num']){?>
                                                                        <span class="fw-600 color-04">
                                                                            (<?= $d['num'] ?>)
                                                                        </span>
                                                                    <?php }?>
                                                                </label>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns text-center mt-4 pt-2">
                                    <button type="submit" class="btn btn-action mr-2">
                                        <span>ค้นหา</span>
                                    </button>
                                    <button type="reset" class="btn btn-action btn-action-01">
                                        <span>ล้างข้อมูล</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-ffgray text-center py-4 ovf-hidden" data-aos="fade-up" data-aos-delay="0">
                <h6 class="h3 fw-600 color-04 mt-4">“เขตอุตสาหกรรมทำเลทอง”</h6>
                <p class="h4">ผลลัพธ์การค้นหา 44 รายการ</p>
            </div>
            <div class="grids" data-aos="fade-up" data-aos-delay="150">
                <?php for($j=0; $j<10; $j++){?>
                    <div class="grid sm-100">
                        <?php
                            $cardType = 'Search';
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
