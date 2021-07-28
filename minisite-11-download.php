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
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-04.png',
            'title' => 'ดาวน์โหลดเอกสาร',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'ดาวน์โหลดเอกสาร' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding pt-0" data-aos="fade-up" data-aos-delay="450">
        <div class="container">
            
            <div class="grids grid-header sm-break mt-0">
                <div class="grid sm-100 mt-0">
                    <div class="d-flex jc-end">
                        <div class="options w-auto mx-2">
                            <div class="select-wrapper">
                                <select class="order" title="Order">
                                    <option value="" disabled="" selected="">ที่มาใหม่</option>
                                    <option value="newest">ที่มาใหม่</option>
                                </select>
                            </div>
                        </div>
                        <div class="options w-auto">
                            <input type="text" class="w-md" name="search" placeholder="ค้นหา" required title="Search" />
                            <button type="submit" class="btn btn-grid">
                                <em class="zmdi zmdi-search"></em>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container">
                <div class="grids">
                    <div class="grid lg-25 sm-100" data-aos="fade-up" data-aos-delay="0">
                        <?php 
                            $categoryTab = [
                                'bg' => 'public/assets/app/images/bg/minisite-03.jpg',
                                'structure' => [
                                    [ 'name' => 'คู่มือหรือมาตรฐานการให้บริการ', 'icon' => 'book-cog.svg', 'active' => true ],
                                    [ 'name' => 'คู่มือต่างๆ', 'icon' => 'book.svg' ],
                                    [ 'name' => 'แบบฟอร์ม', 'icon' => 'report.svg' ],
                                    [ 'name' => 'รายงานสถานภาพการลงทุน', 'icon' => 'trend.svg' ],
                                    [ 'name' => 'รายงานสำรวจความพึงพอใจ', 'icon' => 'exchange.svg' ],
                                    [ 'name' => 'ข้อมูลเชิงสถิติการให้บริการ', 'icon' => 'papers.svg' ],
                                ]
                            ];
                            include('component/category-tab-minisite.php');
                        ?>
                        <div class="ss-title full mt-4">
                            <span class="h3 fw-600 color-04">เนื้อหาอื่นน่าสนใจ</span>
                        </div>
                        <div class="grids">
                            <?php for($j=0; $j<2; $j++){?>
                                <div class="grid lg-100 md-1-3 sm-50">
                                    <?php
                                        $cardType = 'CMS';
                                        include('component/minisite-card-grid.php');
                                    ?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="grid lg-75 sm-100" data-aos="fade-up" data-aos-delay="150">
                        <div class="tab-contents">
                            <?php for($i=0; $i<4; $i++){?>
                                <div class="tab-content bg-white <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <div class="px-4 py-3">
                                        <div class="ss-title">
                                            <span class="h3 fw-600 color-04">คู่มือหรือมาตรฐานการให้บริการ</span>
                                        </div>
                                    </div>

                                    <div class="table-wrapper">
                                        <table class="table table-download-02">
                                            <?php for($i=0; $i<4; $i++){?>
                                                <tr class="row-title">
                                                    <td colspan="2" class="no-border">
                                                        <div class="row-header no-hover">
                                                            <div class="ss-date">
                                                                <div class="date bg-04">
                                                                    <div class="d">04</div>
                                                                    <div class="m-y">09.2563</div>
                                                                </div>
                                                            </div>
                                                            <div class="text-wrapper">
                                                                <div class="h4">
                                                                    คู่มือเอกสาร แนะนำการใช้งาน สำหรับผู้ประกอบการ
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td colspan="2" class="no-border val-middle">
                                                        <div class="d-flex jc-end pr-3">
                                                            <a class="btn btn-img" href="#">
                                                                ลิงก์
                                                                <img src="public/assets/app/images/icon/exit.svg" alt="Image Icon" />
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="row-title">
                                                    <td colspan="2" class="no-border">
                                                        <div class="row-header no-hover">
                                                            <div class="ss-date">
                                                                <div class="date bg-11">
                                                                    <div class="d">04</div>
                                                                    <div class="m-y">09.2563</div>
                                                                </div>
                                                            </div>
                                                            <div class="text-wrapper">
                                                                <div class="h4">
                                                                    ผลแผนปฏิบัติการ-ไตรมาส 2 (070463)
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td colspan="2" class="no-border val-middle">
                                                        <div class="d-flex jc-end pr-3">
                                                            <a class="btn btn-img" href="#">
                                                                ดาวน์โหลดทั้ง (3 ไฟล์)
                                                                <img src="public/assets/app/images/icon/download.png" alt="Image Icon" />
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php foreach(['pdf', 'xls', 'doc', 'ppt'] as $d){?>
                                                    <tr>
                                                        <td>
                                                            <img class="file-icon" src="public/assets/app/images/file/<?= $d ?>.png" alt="File Icon Image" />
                                                        </td>
                                                        <td>
                                                            <p class="sm">
                                                                รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ. <br>
                                                                ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563)
                                                            </p>
                                                            <p class="sm">
                                                                ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                                จำนวนดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex jc-end">
                                                                <a class="btn btn-img" href="#">
                                                                    ดาวน์โหลด
                                                                    <img class="ml-2" src="public/assets/app/images/icon/download.png" alt="Image Icon" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex jc-end">
                                                                <a class="btn btn-img" href="#">
                                                                    แจ้งไฟล์เสีย 
                                                                    <img class="ml-2" src="public/assets/app/images/icon/error.png" alt="Image Icon" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                            <?php }?>
                                        </table>
                                    </div>

                                    <div class="px-4 py-2">
                                        <?php 
                                            $gridFooterClass = 'mt-0';
                                            include('component/grid-footer.php');
                                        ?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
