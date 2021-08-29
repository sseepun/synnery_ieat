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
            'title' => 'เว็บลิงก์',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'เว็บลิงก์' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding pt-0" data-aos="fade-up" data-aos-delay="450">
        <div class="container position-relative">
            
            <div class="grid-header header-float sm-break mt-0">
                <div class="d-flex jc-end">
                    <div class="options w-auto mx-2">
                        <div class="select-wrapper">
                            <select class="order" title="Order">
                                <option value="" disabled="" selected="">เรียงลำดับ</option>
                                <option value="1">ใหม่ที่สุด</option>
                                <option value="2">เก่าที่สุด</option>
                                <option value="3">เป็นที่นิยม</option>
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
            
            <?php $categories = ['หน่วยงานภายใน', 'หน่วยงานภายนอก', 'รวมทั้งหมด']; ?>
            <div class="tab-container tab-container-04">
                <div class="tabs mt-0">
                    <?php foreach($categories as $i=>$d){?>
                        <a 
                            class="tab color-black h-color-04 <?php if($i==0)echo 'active'; ?>" 
                            data-tab="<?= $i ?>" href="#"
                        >
                            <p class="fw-500"><?= $d ?></p>
                        </a>
                    <?php }?>
                </div>
                <div class="tab-contents">
                    <?php foreach($categories as $i=>$d){?>
                        <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                            <div class="position-relative bg-white box-shadow-top p-4">
                                <div class="ss-title">
                                    <span class="h3 fw-600 color-04">
                                        <?= $d ?>
                                    </span>
                                </div>
                                <div class="grids">
                                    <?php for($j=0; $j<10; $j++){?>
                                        <div class="grid lg-50 sm-100">
                                            <?php
                                                $cardType = 'Weblink';
                                                include('component/minisite-card-list.php');
                                            ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <?php include('component/grid-footer.php'); ?>
                        </div>
                    <?php }?>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
